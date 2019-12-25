<?php

namespace MVC\Core;

class Controller
{
    public $array = [];
    public $obj;

    public function set($mang)
    {
        $this->array = array_merge($this->array, $mang);
	}
	
    public function getObj($mang)
    {
        $this->obj = (object) $mang;
	}
	
    public function zender($filename)
    {
        $person = $this->obj;
        $foder = str_replace("Controller", "", basename(get_class($this)));
        require ROOT . "views/" . $foder . "/" . $filename . ".php";
    }

    public function render($filename)
    {
        extract($this->array);
        $foder = str_replace("Controller", "", basename(get_class($this)));
        require ROOT . "views/" . $foder . "/" . $filename . ".php";

    }
}
