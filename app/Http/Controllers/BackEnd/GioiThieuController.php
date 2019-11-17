<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\About;
use App\Models\TinTuc;
use Input;
use App\Libraries\ImageLib;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GioiThieuController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index() {
        $tintucs = About::all();
        $data = [];
        foreach ($tintucs as $tintuc) {
            $data[] = $tintuc->getArrayInfo();
        }
        $this->data['tintucs'] = $data;
        return view('about.index',$this->data);

    }
    public function create() {
        return view('about.add',$this->data);
    }
    public function store() {
        $tintuc = new About();
        $tintuc->Mota = Input::get('Description');
        $tintuc->Slug = str_slug(Input::get('Name'));
        $tintuc->save();
        if (Input::hasFile('Image')) {
            $this->uploadImage(Input::file('Image'),$tintuc);
        } else {

        }
        return redirect('/admin/gioithieu');
    }
    public function edit($slug){
//        dd('xxx');
        $tintuc = About::where('Slug',$slug)
            ->orWhere('Id',$slug)
            ->first();
        if(!$tintuc) {
            return view('errors.404');
        }
        $data = $tintuc->getArrayInfo();
        $this->data['about'] = $data;
        return view('about.detail',$this->data);
    }
    public function show($slug) {
        $tintuc = About::where('Slug',$slug)
            ->orWhere('Id',$slug)
            ->first();
        $data = $tintuc->getArrayInfo();
        $this->data['tintuc'] = $data;
        return view('about.detail',$this->data);
    }
    public function update($slug) {
        $tintuc =  About::where('Slug',$slug)->orWhere('Id',$slug)->first();
        $tintuc->Mota = Input::get('Description');
//        $tintuc->Slug = str_slug(Input::get('Name'));
        $tintuc->save();
        if (Input::hasFile('Image')) {
            $this->delete($tintuc);
            $this->uploadImage(Input::file('Image'),$tintuc);
        }
        return redirect('/admin/gioithieu');
    }
    public function destroy($slug) {
        $tintuc = About::where('Slug',$slug)
            ->orWhere('Id',$slug)
            ->first();
        $tintuc->delete();
        $data['status']=200;
        return response()->json($data);
    }
    function uploadImage($photo,$sanpham) {
        $date_dir_name = md5(date_format($sanpham->Created_at, 'm-Y'));
        $key = str_random(6);
        $full_item_photo_dir = config('image.image_root').'/tintucs/'.$date_dir_name;
        $fileName = $sanpham->TintucId.'_'.$key;
        $size = config('image.sanphams');
        ImageLib::upload_image($photo, $full_item_photo_dir, $fileName, config('image.images.tintucs'), 0);
        $sanpham->HinhAnh = $fileName;
        $sanpham->save();
    }
    function delete($sanpham) {
        $date_dir_name = md5( date_format($sanpham->Created_at, 'm-Y'));
        $full_item_photo_dir = config('image.image_root').'/tintucs/'.$date_dir_name;
        ImageLib::delete_image( $full_item_photo_dir, $sanpham->HinhAnh, config('image.images.tintucs'), 0);
    }
}
