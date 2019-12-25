<?php
namespace MVC\Models\HouseHold;

use MVC\Models\Household\HouseHoldModel;
use MVC\Models\HouseHold\HouseHoldResourceModel;

class HouseHoldRepository
{
	private $householdresourcemodel;
	
    public function __construct(HouseHoldModel $house)
    {
        $this->householdresourcemodel = new HouseHoldResourceModel($house);
	}
	
    public function save()
    {
        return $this->householdresourcemodel->save();
	}
	
    public function delete($id)
    {
        return $this->householdresourcemodel->delete($id);
	}
	
    public function getAll()
    {
        return $this->householdresourcemodel->getAll();
	}
	
    public function getByid($id)
    {
        return $this->householdresourcemodel->getByid($id);
	}
	
    public function edit($id)
    {
        return $this->householdresourcemodel->edit($id);
    }
}
