<?php
namespace MVC\URL; 
class Request{
    public $controller;
    public $action;
    public $params;
    public $url;
    
    public function __construct()
    {
    	$this->url=$_SERVER['REQUEST_URI'];
    }
}


 ?>