<?php namespace App\Repositories;

use App\Models\TinTuc;
use Auth,Input,Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;

class TinTucRepository {
    public function index() {
        $tintucs = TinTuc::all();
        $data = [];
        foreach ($tintucs as $tintuc) {
            $data[] = $tintuc->getArrayInfo();
        }
        $res['data'] = $data;
        $res['status'] = 200;
        return $res;

    }
    public function home() {
        $tintucs = TinTuc::paginate(3);
        $data = [];
        foreach ($tintucs as $tintuc) {
            $data[] = $tintuc->getArrayInfo();
        }
        $res['data'] = $data;
        $res['status'] = 200;
        return $res;
    }
    public function show($slug) {
        $theloai = TinTuc::where('Slug',$slug)
            ->orWhere('TheLoaiId',$slug)
            ->first();
        $data = $theloai->getArrayInfo();
        $res['data'] = $data;
        $res['status'] = 200;
        return $res;
    }
}