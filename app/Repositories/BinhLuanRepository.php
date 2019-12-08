<?php namespace App\Repositories;

use App\Models\BinhLuan;
use Auth,Input,Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;

class BinhLuanRepository {
    public function index() {
        $tintucs = BinhLuan::all();
        $data = [];
        foreach ($tintucs as $tintuc) {
            $data[] = $tintuc->getArrayInfo();
        }
        $res['data'] = $data;
        $res['status'] = 200;
        return $res;

    }
    public function home() {
        $tintucs = BinhLuan::paginate(3);
        $data = [];
        foreach ($tintucs as $tintuc) {
            $data[] = $tintuc->getArrayInfo();
        }
        $res['data'] = $data;
        $res['status'] = 200;
        return $res;
    }
    public function show($slug) {
        $theloai = BinhLuan::where('Slug',$slug)
            ->orWhere('TheLoaiId',$slug)
            ->first();
        $data = $theloai->getArrayInfo();
        $res['data'] = $data;
        $res['status'] = 200;
        return $res;
    }
}