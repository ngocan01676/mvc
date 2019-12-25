<?php 

namespace MVC\Config;
use mysqli;

class Database{
	private static $conn=null;

	public static function getConn()
	{
		if(is_null(self::$conn))
		{

			self::$conn=new mysqli('localhost','root','','mvcexample4');

		}
		return self::$conn;
	}
}

 ?>