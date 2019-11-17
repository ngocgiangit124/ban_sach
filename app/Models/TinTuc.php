<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TinTuc extends Model
{
    protected $table = 'TinTuc';
    protected  $primaryKey = 'TinTucId';

    public $timestamps = true;
    const CREATED_AT = 'Created_at';
    const UPDATED_AT = 'Updated_at';

    public function getArrayInfo() {
        $rels = array(
            "Id"   => $this->TinTucId,
            "Name"     => $this->TieuDe,
            "Description"      => $this->Mota,
            "ContentShort"      => substr(strip_tags($this->Mota),0,100),
            "Slug"      => $this->Slug,
            "Created_at"  =>date('d-m-Y H:i', strtotime($this->Created_at)),
            "Photos" =>$this-> getPhoto(),
        );
        return $rels;
    }
    function getPhoto() {
        $data = [];
        if ($this->HinhAnh) {
            $date_dir_name = md5(date_format($this->Created_at, 'm-Y'));
            $data['Small'] = env("IMAGE_URL").'/tintucs/'.$date_dir_name.'/'.$this->HinhAnh.'_200x200.png';
            $data['Medium'] = env("IMAGE_URL").'/tintucs/'.$date_dir_name.'/'.$this->HinhAnh.'_400x400.png';
            $data['Large'] = env("IMAGE_URL").'/tintucs/'.$date_dir_name.'/'.$this->HinhAnh.'.png';
        } else {
            $data['Small'] = env("HOME_PAGE").'/img/team_ing_default.png';
            $data['Medium'] = env("HOME_PAGE").'/img/team_ing_default.png';
            $data['Large'] = env("HOME_PAGE").'/img/team_ing_default.png';
        }
        return $data;
    }

}
