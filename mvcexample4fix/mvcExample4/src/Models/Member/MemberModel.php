<?php 
namespace MVC\Models\Member;
use MVC\Core\Model;
class MemberModel extends Model{
	protected $hoten;
	protected $tuoi;
	protected $namsinh;
	protected $nghenghiep;
	protected $id_hodan;


	public function setHoten($hoten){
		$this->hoten=$hoten;
	}
	
	public function settuoi($tuoi){
		$this->tuoi=$tuoi;
	}

	public function setNamsinh($ns){
		$this->namsinh=$ns;
	}

	public function setNghenghiep($nn){
		$this->nghenghiep=$nn;
	}

	public function setId_hodan($id_hodan){
		$this->id_hodan=$id_hodan;
	}

	public function getHoten()
	{
		return $this->hoten;
	}

	public function getTuoi()
	{
		return $this->tuoi;
	}

	public function getNamsinh()
	{
		return $this->namsinh;
	}

	public function getNghenghiep()
	{
		return $this->nghenghiep;
	}
	
	public function getId_hodan()
	{
		return $this->id_hodan;
	}

	


}



?>