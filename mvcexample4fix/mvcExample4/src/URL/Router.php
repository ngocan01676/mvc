<?php 
namespace MVC\URL;
use MVC\URL\Request;

class Router{

	public static function parse($url,$request)
	{  


		$url=trim($url);
		if($url=='/mvcExample4/')
		{
			$request->controller="HouseHold";
			$request->action="index";
			$request->params=[];
		}else{

			$mang=explode("/",$url);
		    $request->controller=$mang[2];
			$request->action=$mang[3];
			$request->params=array_slice($mang,4);


		}

	}


}


?>