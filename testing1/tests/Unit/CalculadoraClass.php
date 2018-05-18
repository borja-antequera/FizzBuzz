<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\CalculadoraClass;
class CalculadoraClass extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testSuma(){
      $calculadoraClass= new CalculadoraClass();
      $resultado = $calculadoraClass ->suma(2,2);
      $this->assertEquals(4,$resultado);
    }
    public function testResta(){
      $calculadoraClass= new CalculadoraClass();
      $resultado = $calculadoraClass ->resta(2,2);
      $this->assertEquals(0,$resultado);
    }
    public function testMultiplicacion(){
      $calculadoraClass= new CalculadoraClass();
      $resultado = $calculadoraClass ->multiplicacion(2,2);
      $this->assertEquals(4,$resultado);
    }
    public function testDivision(){
      $calculadoraClass= new CalculadoraClass();
      $resultado = $calculadoraClass ->division(2,2);
      $this->assertEquals(1,$resultado);
    }
}
