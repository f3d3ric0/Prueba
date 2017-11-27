<?php
/**
* 
*/
class Calculadora
{
	
	function __construct()
	{
		//echo "calculadora numerica";
	}

	public function suma($a,$b){
		return $a+$b;
	}

	public function cargarArray($array)
	{
		return $array;
	}

	public function division($a,$b)
	{
		return $a/$b;
	}
}


?>