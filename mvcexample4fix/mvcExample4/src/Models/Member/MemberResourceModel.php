<?php 

namespace MVC\Models\Member;
use MVC\Core\ResourceModel;
use MVC\Models\Member\MemberModel;
class MemberResourceModel extends ResourceModel{
function __construct(MemberModel $member)
{
	$this->_init("thanh_vien","id",$member);
}
}

 ?>