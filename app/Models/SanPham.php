<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SanPham extends Model
{
    use SoftDeletes;
    const DELETED_AT = 'Deleted_at';
    protected $dates = ['Deleted_at'];
    protected $table = 'SanPham';
    protected  $primaryKey = 'SanPhamId';

    public $timestamps = true;
    const CREATED_AT = 'Created_at';
    const UPDATED_AT = 'Updated_at';

    public function getArrayInfo() {
        $rels = array(
            "Id"   => $this->SanPhamId,
            "Name" => $this->Ten,
            "Code" => $this->Code,
            "Price" => $this->Gia,
//            "Quality" => $this->Gia,
            "Description" => $this->Mota,
            "Amount" => $this->SoLuong,
            "ChatLieu" => $this->ChatLieu,
            "Slug" => $this->Slug,
            "KichThuoc" => $this-> KichThuoc,
            "MauSac" => $this-> MauSac,
            "BaoHanh" => $this-> BaoHanh,
            "GiaoHang" => $this-> GiaoHang,
            "NhaSanXuat" => $this-> NhaSanXuat,
            "TenTheLoai" => $this-> NameTheloai(),
            "TheLoai" => $this-> NameTheloai(),
            "TheLoaiId" => $this->TheLoaiId,
            "Photo" => $this -> onePhoto(),
            "Photos" => $this -> listPhoto(),
            "Created_at"  =>date('d-m-Y H:i', strtotime($this->Created_at)),
            "Xem"   =>$this->Xem,
            "Rate" => $this->DanhGia,
        );
        return $rels;
    }
    public function getArrayInfoDetail() {
        $rels = array(
            "Id"   => $this->SanPhamId,
            "Name" => $this->Ten,
            "Code" => $this->Code,
            "Price" => 0+$this->Gia,
            "Quality" => 0+$this->Gia,
            "Bought" => 0+$this->SoLuongBan,
            "QualityAgain" => (0+$this->SoLuong) - (0+$this->SoLuongBan),
            "Description" => $this->Mota,
            "Amount" => $this->SoLuong,
            "ChatLieu" => $this->ChatLieu,
            "Slug" => $this->Slug,
            "KichThuoc" => $this-> KichThuoc,
            "MauSac" => $this-> MauSac,
            "BaoHanh" => $this-> BaoHanh,
            "GiaoHang" => $this-> GiaoHang,
            "NhaSanXuat" => $this-> NhaSanXuat,
            "TheLoai" => $this-> NameTheloai(),
            "TheLoaiId" => $this->TheLoaiId,
            "Rate" => $this->DanhGia,
            "Photo" => $this -> onePhoto(),
            "Photos" => $this -> listPhoto(),
            "Xem" => $this -> Xem,
            "Created_at"  =>date('d-m-Y H:i', strtotime($this->Created_at)),
            "SameProduct" => $this -> listProduct(),
            "Comments"=> $this -> listComment(),

        );
        return $rels;
    }
    public function listComment() {
        $data = [];
//        dd($this->comments);
        foreach ($this->comments as $cm) {
            $data[] = $cm->getArrayInfo();
        }
        return $data;
    }
    public function listProduct() {
        $data=[];
        $sanphams = SanPham::where('TheLoaiId',$this->TheLoaiId)->paginate(6);
        foreach ($sanphams as $sanpham) {
            $data[] = $sanpham->getArrayInfo();
        }
        return $data;
    }

    public function theloai() {
        return $this->belongsTo('App\Models\TheLoai','TheLoaiId','TheLoaiId');

    }
    public function NameTheloai() {
        $theloai = $this->theloai()->select('Ten')->first();
        return $theloai->Ten;
    }

    public function listPhoto() {
        $data = [];
        $res =[];
        if($this->images->count()>0) {
            foreach ($this->images as  $photo) {
                $res[] = $photo->getArrayInfo($this->Created_at);
            }
            return $res;
        } else {
            return $data;
        }
    }
    public function onePhoto() {
        $res = '';
        if($this->images->count()>0) {
            $photo = $this->images->first();
            $res = $photo->getOneInfo($this->Created_at);
            return $res;
        } else {
            $data['Small'] = env("HOME_PAGE").'/img/logo.png';
            $data['Medium'] = env("HOME_PAGE").'/img/logo.png';
            $data['Large'] = env("HOME_PAGE").'/img/logo.png';
                $res = $data;
            return $res;
        }
    }
//    public function onePhoto() {
//        $img = $this->images()->first();
//        return $img->getOneInfo();
//    }
    public function images() {
        return $this->hasMany('App\Models\HinhAnh','SanPhamId','SanPhamId');
    }

    public function comments() {
        return $this->hasMany('App\Models\BinhLuan','SanPhamId','SanPhamId');
    }
}
//ALTER TABLE `sanpham` ADD `DanhGia` INT(1) NULL AFTER `Xem`;
//ALTER TABLE `binhluan` ADD `DanhGia` INT(1) NULL AFTER `NguoiDungId`;
