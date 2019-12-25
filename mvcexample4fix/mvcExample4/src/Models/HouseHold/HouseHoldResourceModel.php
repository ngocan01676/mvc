<?php 
namespace MVC\Models\HouseHold;

use MVC\Core\ResourceModel;
use MVC\Models\HouseHold\HouseHoldModel;
class HouseHoldResourceModel extends ResourceModel{

function __construct(HouseHoldModel $house)
{
	$this->_init("ho_dan","id",$house);
}

}

 ?>