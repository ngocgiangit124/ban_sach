<?php

namespace App\Http\Controllers\FrontEnd;

use App\Libraries\ImageLib;
use App\Models\BinhLuan;
use App\Models\HinhAnh;
use App\Models\SanPham;
use App\Models\TheLoai;
use App\Models\User;
use App\Repositories\TheLoaiRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SanPhamController extends Controller
{
    protected $theloaiRepository;
    public function __construct(TheLoaiRepository $theloaiRepository)
    {
        parent::__construct();
        $this->theloaiRepository =$theloaiRepository;
    }
    public function index() {
        $sanphams = SanPham::orderBy('SanPhamId','DESC')->paginate(12);
        $data = [];
        foreach ($sanphams as $sanpham) {
            $data[] = $sanpham->getArrayInfo();
        }
        $res=$sanphams->toArray();
        $res['total'] = $sanphams->total();
        $this->data['sanphams'] = $data;
        $this->data['paginate'] = $res;
        return view('front.sanpham.full_index',$this->data);
    }

    public function listSanPham($slug) {
        $theloai = TheLoai::where('TheLoai.Slug','=',$slug)->orWhere('TheLoai.TheLoaiId','=',$slug)->first();
        $sanphams = $theloai->sanphams;
        $theloai1 = $theloai->getArrayInfo();
        $data = [];
        foreach ($sanphams as $sanpham) {
            $data[] = $sanpham->getArrayInfo();
        }
        $this->data['theloai'] = $theloai1;
        $this->data['sanphams'] = $data;
//        dd($this->data);
//        dd($this->data);
        return view('sanpham.index',$this->data);
    }
    public function create($slug) {
        $theloai = $this->theloaiRepository->show($slug);
        $this->data['theloai'] = $theloai['data'];
        return view('sanpham/add',$this->data);
    }
    public function show($slug) {
        $theloai = SanPham::where('Slug',$slug)
            ->orWhere('SanPhamId',$slug)
            ->first();
        if(!$theloai) {
            return view('errors.404',$this->data);
        }
        $data = $theloai->getArrayInfoDetail();
        $this->data['sanpham'] = $data;
//        dd($this->data);
        $sanphamRandom = SanPham::where('TheLoaiId',$theloai->TheLoaiId)->paginate(8);
        $data1 = [];
        foreach ($sanphamRandom as $sanphamRandoms) {
            $data1[] = $sanphamRandoms->getArrayInfo();
        }
        $this->data['sanphamRandoms'] = $data1;
//        dd($this->data);
        return view('front.sanpham.detail',$this->data);
    }
    public function storeComment() {
        $id = Input::get('Id');
        $user = User::find($id);
        if($id && $user) {
            $cm = new BinhLuan();
            $cm -> BinhLuan = Input::get('Comment');
            $cm -> SanPhamId = Input::get('ProductId');
            $cm -> NguoiDungId = $user->NguoiDungId;
            $cm -> DanhGia = Input::get('Rate');
            $cm->save();
            $this->checkRate($cm -> SanPhamId);
            return back();
        }
        return redirect('/login');
    }
    function checkRate($id) {
        $total =0;$dem =0;
        $sanpham = SanPham::find($id);
        $cms = BinhLuan::where('SanphamId',$id)->get();

        foreach ($cms as $cm ) {
            $total = $total + $cm->DanhGia;
            $dem++;
        }
        $sanpham->DanhGia = round($total/$dem);
        $sanpham->save();
    }
    public function viewQuick() {
        $sanpham = SanPham::find(Input::get('id'));
        $data = $sanpham->getArrayInfo();
//        $html = view('front.sanpham.item', ['sanpham' => $data])->render();
//        $this->data = [
//            'html' => $html,
//            'status' =>200,
////            'has_more' => count($data) >= 1 ? true : false,
//        ];
//        dd($data);
        return response()->json($data);


    }
}
