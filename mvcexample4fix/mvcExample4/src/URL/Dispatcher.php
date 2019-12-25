<?php 

namespace MVC\URL;
use MVC\URL\Request;
use MVC\URL\Router;
class Dispatcher{

	private $request;

	public function __construct()
	{
		$this->request=new Request();
	} 
	
	public function disPatch()
	{
        Router::parse($this->request->url,$this->request);
        
        	  $controller=$this->loadController();
    
              call_user_func_array([$controller,$this->request->action],$this->request->params);

	}

	private function loadController()
	{
		$controllerName="MVC\Controllers\\".$this->request->controller."Controller";
		$controller=new $controllerName();
		return $controller;

	}
}

 ?>