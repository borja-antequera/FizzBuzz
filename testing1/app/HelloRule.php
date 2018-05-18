<?php
namespace App;

class HelloRule implements RuleInterface
{
  const HELLO_FACTOR=7;
  public function match($value)
  {
    return 0 ===$value % self::HELLO_FACTOR;
  }
  public function getReplacement()
  {
    return 'Hello';
  }
}

 ?>
