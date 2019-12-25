<?php
namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\HouseHold\HouseHoldModel;
use MVC\Models\HouseHold\HouseHoldRepository;
use MVC\Models\Member\MemberModel;
use MVC\Models\Member\MemberRepository;

class HouseHoldController extends Controller
{
    private $householdReponsitory;
    private $house;
    private $member;
    private $memberReponsitory;

    public function __construct()
    {
        $this->house = new HouseHoldModel();
        $this->householdReponsitory = new HouseHoldRepository($this->house);
        $this->member = new MemberModel();
        $this->memberReponsitory = new MemberRepository($this->member);
    }

    public function index()
    {
        $d['members'] = $this->memberReponsitory->getAll();
        $this->set($d);
        $d['households'] = $this->householdReponsitory->getAll();
        $this->set($d);
        $this->render('index');

    }
    public function create()
    {
        if (isset($_POST['submit'])) {
            $this->house->setTenchuho($_POST['tenchuho']);
            $this->house->setSonha($_POST['sonha']);
            if ($this->householdReponsitory->save()) {
                header("Location: " . WEBROOT . "Household/index");
            }

        }
        $this->render('create');
    }

}
