<?php

namespace Tests\Unit;
//test unitario
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
//llamamos a la clase
use App\MathClass;
class ClassMathTest extends TestCase
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
    public function testPar(){
      $mathClass = new MathClass();//parte del arranque
      $resultado = $mathClass->esPar(2); //parte de la accion
      $this->assertTrue(true,$resultado);//asercion
    }
}
