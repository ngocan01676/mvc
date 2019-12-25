<?php
namespace MVC\Core;

use MVC\Config\Database;
use MVC\Core\Model;
use MVC\Core\ResourceModelInterface;

class ResourceModel implements ResourceModelInterface
{

    private $table;
    private $id;
    private $model;

    public function _init($table, $id, $model)
    {
        $this->table = $table;
        $this->id = $id;
        $this->model = $model;
    }

    public function save()
    {
        $key_s = "";
        $value_s = "";
        foreach ($this->model->getProperties() as $key => $value) {
            $key_s .= $key . ",";
            $value_s .= "'" . $value . "',";

        }

        $sql = "INSERT INTO " . $this->table . "(" . trim(substr($key_s, 0, (strlen($key_s) - 1))) . ")" . "values(" . trim(substr($value_s, 0, (strlen($value_s) - 1))) . ")";
        $query = Database::getConn()->query($sql);
        return $query;

    }

    public function edit($id)
    {

        $chuoi = "";
        foreach ($this->model->getProperties() as $key => $value) {
            $chuoi .= $key . '=' . "'" . $value . "',";
        }
        $chuoi = trim(substr($chuoi, 0, (strlen($chuoi) - 1)));
        $sql = "UPDATE " . $this->table . " set " . $chuoi . " where " . $this->id . " =" . $id;
        $query = Database::getConn()->query($sql);
        return $query;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE " . $this->id . " = " . $id;
        $query = Database::getConn()->query($sql);
        return $query;
    }

    public function getAll()
    {
        $sql = "SELECT *from " . $this->table;
        $data = [];
        $query = Database::getConn()->query($sql);
        while ($datas = mysqli_fetch_array($query)) {
            $data[] = $datas;
        }
        return $data;
    }

    public function getByid($id)
    {
        $sql = "SELECT *FROM " . $this->table . " where " . $this->id . " =" . $id;
        $query = Database::getConn()->query($sql);
        $data = mysqli_fetch_assoc($query);
        return $data;
    }

}
