<?php
namespace MVC\Models\HouseHold;

use MVC\Core\Model;

class HouseHoldModel extends Model
{

    protected $tenchuho;
    protected $sothanhvien;
    protected $sonha;

    public function setTenchuho($ten)
    {
        $this->tenchuho = $ten;
    }

    public function getTenchuho()
    {
        return $this->tenchuho;
    }

    public function setSonha($num)
    {
        $this->sonha = $num;

    }

    public function getSonha()
    {
        return $this->sonha;
    }
    
    public function setSothanhvien($num)
    {
        $this->sothanhvien = $num;

    }
    
    public function getSothanhvien()
    {
        return $this->sothanhvien;
    }

}
