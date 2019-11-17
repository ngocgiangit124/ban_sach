<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\TinTuc;
use Input;
use App\Libraries\ImageLib;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TinTucController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index() {
        $tintucs = TinTuc::all();
        $data = [];
        foreach ($tintucs as $tintuc) {
            $data[] = $tintuc->getArrayInfo();
        }
        $this->data['newss'] = $data;
        return view('front.tintuc.index',$this->data);

    }
    public function edit($slug){
        $tintuc = Tintuc::where('Slug',$slug)
            ->orWhere('TinTucId',$slug)
            ->first();
        $data = $tintuc->getArrayInfo();
        $this->data['news'] = $data;
        return view('front.tintuc.detail',$this->data);
    }
    public function show($slug) {
        $tintuc = Tintuc::where('Slug',$slug)
            ->orWhere('TinTucId',$slug)
            ->first();
        $data = $tintuc->getArrayInfo();
        $this->data['news'] = $data;
        return view('front.tintuc.detail',$this->data);
    }

}
