<?php

use PHPUnit\Framework\TestCase;
use Calculadora as CA;

final class CalculadoraTest extends TestCase
{
	
	public function testSuma()
	{
		$calc= new CA();
		$this->assertEquals(7,$calc->suma(3,4));
	}

	public function testFailure()
    {
    	$array = new CA();
        $this->assertArrayHasKey('foo', $array->cargarArray(['foo' => 'baz']));
    }

    public function testDivision()
    {
    	$div = new CA();
        $this->assertEquals(true, is_numeric($div->division(8,0)));
    }
}

?>