<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\About;
use App\Models\BaoCao;
//use App\Models\Report;
use App\Models\HoaDon;
use App\Models\SanPham;
use App\Models\User;
use App\Repositories\BinhLuanRepository;
use App\Repositories\SanPhamRepository;
use App\Repositories\SlideRepository;
use App\Repositories\TheLoaiRepository;
use App\Repositories\TinTucRepository;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    protected $theloaiRepository;
    protected $slideRepository;
    protected $sanphamRepository;
    protected $tintucRepository;
    protected $binhluanRepository;
    public function __construct(BinhLuanRepository $binhluanRepository,TinTucRepository $tintucRepository,SanPhamRepository $sanphamRepository,SlideRepository $slideRepository,TheLoaiRepository $theloaiRepository)
    {
        parent::__construct();
        $this->theloaiRepository =$theloaiRepository;
        $this->slideRepository =$slideRepository;
        $this->sanphamRepository =$sanphamRepository;
        $this->tintucRepository =$tintucRepository;
        $this->binhluanRepository =$binhluanRepository;
    }
    public function index() {
        $theloais = $this->theloaiRepository->index();
        $this->data['theloais'] = $theloais['data'];
        $slides = $this->slideRepository->index();
        $this->data['slides'] = $slides['data'];
        $sanphamNews = $this->sanphamRepository->indexAll();
        $this->data['sanphams'] = $sanphamNews['data'];
        $sanphamSale = $this->sanphamRepository->indexSale();
        $this->data['sanphamSale'] = $sanphamSale['data'];
        $sanphamRandom = $this->sanphamRepository->indexRandom();
        $this->data['sanphamRandoms'] = $sanphamRandom['data'];
        $tintuc = $this->tintucRepository->home();
        $this->data['tintucs'] = $tintuc['data'];
        $binhluan = $this->binhluanRepository->home();
        $this->data['binhluans'] = $binhluan['data'];
//        dd($this->data);
       return view('front.index',$this->data);
    }
    public function contact() {
        return view('front.contact.contact',$this->data);
    }
    public function about() {
        $about = About::first();
        $this->data['gioithieu'] = $about->getArrayInfo();
        return view('front.contact.about',$this->data);
    }
    public function login() {
        return view('front.users.login',$this->data);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function postLogin()
    {
        $rule = [
            'Email' => 'required',
            'Password' => 'required',
        ];
        $validator = Validator::make(
            Input::all(),
            $rule
        );
        if ($validator->fails()) {
            return back()->with('status', 'false');
        }
        $username = Input::get('Email');
        $password = Input::get('Password');


        $credentials = ['Email' => $username, 'password' => $password ];
        $check = Auth::attempt($credentials);

        if (!$check) {
            $rels = array(
                'status' => -1,
                'errors' => ['message'=>'Id, email or password is invalid'],
            );
        } else {
            $user = Auth::User();
            if ($user->Status == 0) {
                $rels = array(
                    'status' => -1,
                    'errors' => ['message'=>'Your account has been bloked'],
                );
            } else {
                $rels = array(
                    'status' => 200,
                    'data' => $user->getArrayInfo(),
                );
            }
        }


        if ($rels['status'] == -1) {
//            return back()->withErrors($rels['errors']['message'])->withInput();
            return  back()->with('status', 'false');
        }
        $this->data['user'] = $rels['data'];
        return back()->with('status', 'tru');
    }
    public function getRegistration() {
        $auth = Auth::user();
        if($auth) {
            $orders = HoaDon::where('NguoiDungId',$auth->NguoiDungId)->paginate(100);
        } else {
            $orders = [];
        }
        $data = [];
        foreach ($orders as $order) {
            $data[] = $order->getArrayInfo();
        }
        $this->data['orders'] = $data;
        return view('front.users.detail',$this->data);
    }
    public function registration() {
        $users = new User();
        $users->Ten = Input::get('Name');
        $users->Email = Input::get('Email');
        $users->SDT = Input::get('Phone');
        $users->DiaChi = Input::get('Address');
        $users->Quyen = 'kh';
        $users->Password = bcrypt(Input::get('Password'));
        $users->save();
        return redirect('/');
    }
    public function update() {
        $users = Auth::user();
        $users->Ten = Input::get('Name');
        $users->Email = Input::get('Email');
        $users->SDT = Input::get('Phone');
        $users->DiaChi = Input::get('Address');
//        $users->Quyen = 'kh';
        if(Input::get('Password')) {
            $users->Password = bcrypt(Input::get('Password'));
        }
        $users->save();
        return back();
    }
    public function search() {

        $search = Input::get('search');
        $query = SanPham::where('Ten','like','%'.$search.'%')->orWhere('Gia',$search);
        $sanphams = $query->where(function ($query) use ($search) {
            if(is_int($search)) {
                return $query->orWhereBetween('Gia',array((0+$search)*90/100, (0+$search)*110/100));
            }
        })->orderBy('Gia','desc')->paginate(12);

        $data =[];
        foreach ($sanphams as $item) {
            $data[] = $item->getArrayInfo();
        }
        $res=$sanphams->toArray();
        $res['total'] = $sanphams->total();
        $this->data['sanphams'] = $data;
        $this->data['paginate'] = $res;
        return view('front.sanpham.full_index',$this->data);
    }

    public function report() {
        $report = new BaoCao();
        $report->Ten = Input::get('cf_name');
        $report->Email = Input::get('cf_email');
        $report->BaoCao= Input::get('cf_message');
        $report->save();
        return back();
    }
}
