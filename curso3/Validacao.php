<?php

class Validacao
{
	public static function protegeAtributo($atributo)
	{
		if($atributo == "titular" || $atributo == "saldo") {
			throw new Exception("O atributo $atributo continua privado ");	
		}
	}

	public static function verificaNumerico($valor)
	{
		if(!is_numeric($valor)) {
			throw new InvalidArgumentException("o Tipo passado nao é um numero valido");
		}
	}

	public static function verificaValorNegativo($valor)
	{
		if ($valor < 0) {
			throw new Exception("O valor não é permitido");
		}
	}	
}
?>