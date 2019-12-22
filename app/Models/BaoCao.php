<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaoCao extends Model
{
    protected $table = 'BaoCao';
    protected $primaryKey = 'Id';

    public $timestamps = true;
    const CREATED_AT = 'Created_at';
    const UPDATED_AT = 'Updated_at';

    public function getArrayInfo()
    {
        $rels = array(
            "Id" => $this->Id,
            "Name" => $this->Ten,
            "Report" => $this->BaoCao,
            "Created_at" => date('d-m-Y H:i', strtotime($this->Created_at)),
        );
        return $rels;

    }
}
//CREATE TABLE `noi_that`.`baocao` ( `Id` INT(11) NOT NULL AUTO_INCREMENT , `Ten` VARCHAR(225) NOT NULL , `Email` VARCHAR(225) NOT NULL , `BaoCao` TEXT NOT NULL , `Created_at` DATETIME NULL , `Updated_at` DATETIME NULL , PRIMARY KEY (`Id`)) ENGINE = InnoDB;
