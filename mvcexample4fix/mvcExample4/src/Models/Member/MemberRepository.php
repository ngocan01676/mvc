<?php 
namespace MVC\Models\Member;
use MVC\Models\Member\MemberModel;
use MVC\Models\Member\MemberResourceModel;
class MemberRepository{

	private $memberresourcemodel;

	public function __construct(MemberModel $member)
	{
		$this->memberresourcemodel=new MemberResourceModel($member);
	}

	public function save()
	{
		return $this->memberresourcemodel->save();
	}

	public function delete($id)
	{
		return $this->memberresourcemodel->delete($id);
	}

	public function getAll()
	{
		return $this->memberresourcemodel->getAll();
	}

	public function getByid($id)
	{
		return  $this->memberresourcemodel->getByid($id);
		
	}
	
	public function edit($id)
	{
		return $this->memberresourcemodel->edit($id);
	}
}


 ?>