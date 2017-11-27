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
		if ($b <> 0){
			return $a/$b;
		}else{
			echo "No se puede dividir por cero, ingrese otro valor";
			return 0;
		}
	}
}


?>