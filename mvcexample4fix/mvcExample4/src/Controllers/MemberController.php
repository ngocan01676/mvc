<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\HouseHold\HouseHoldModel;
use MVC\Models\HouseHold\HouseHoldRepository;
use MVC\Models\Member\MemberModel;
use MVC\Models\Member\MemberRepository;

class MemberController extends Controller
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

            $this->member->setHoten($_POST['hoten']);
            $this->member->setNamsinh($_POST['namsinh']);
            $this->member->setTuoi(date("Y") - $_POST['namsinh']);
            $this->member->setNghenghiep($_POST['nghenghiep']);
            $this->member->setId_hodan($_POST['id_chuho']);
            $d['housebyid'] = $this->householdReponsitory->getByid($_POST['id_chuho']);
            extract($d);
            $this->house->setTenchuho($housebyid['tenchuho']);
            $this->house->setSothanhvien($housebyid['sothanhvien'] + 1);
            $this->house->setSonha($housebyid['sonha']);
            if ($this->memberReponsitory->save()) {
                $this->householdReponsitory->edit($_POST['id_chuho']);
                header("Location: " . WEBROOT . "Member/index");
            }

        }

        $d['households'] = $this->householdReponsitory->getAll();
        $this->set($d);
        $this->render('create');
    }

    public function edit($id)
    {

        if (isset($_POST['submit'])) {
            $this->member->setHoten($_POST['hoten']);
            $this->member->setNamsinh($_POST['namsinh']);
            $this->member->setTuoi(date("Y") - $_POST['namsinh']);
            $this->member->setNghenghiep($_POST['nghenghiep']);
            $this->member->setId_hodan($_POST['id_hodan']);
            if ($this->memberReponsitory->edit($id)) {
                header("Location: " . WEBROOT . "Member/index");
            }

        }
        $d['households'] = $this->householdReponsitory->getAll();
        $this->set($d);

        $d['members'] = $this->memberReponsitory->getByid($id);
        $this->Set($d);
        $this->Render('edit');
    }

    public function delete($id)
    {

        $d['memberbyid'] = $this->memberReponsitory->getByid($id);
        extract($d);
        $d['housebyid'] = $this->householdReponsitory->getByid($memberbyid['id_hodan']);
        extract($d);
        if ($this->memberReponsitory->delete($id)) {
            $this->house->setTenchuho($housebyid['tenchuho']);
            $this->house->setSothanhvien($housebyid['sothanhvien'] - 1);
            $this->house->setSonha($housebyid['sonha']);
            $this->householdReponsitory->edit($memberbyid['id_hodan']);
            header("Location: " . WEBROOT . "Member/index");
        }

    }

}
