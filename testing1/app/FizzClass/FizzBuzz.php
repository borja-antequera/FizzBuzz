<?php

namespace App;

class FizzBuzz{
  const FIZZ_FACTOR = 3;
  const BUZZ_FACTOR = 5;

  public static function isFizz($value){
    return 0 === $value % self::FIZZ_FACTOR;
  }
  public static function isBuzz($value){
    return 0 === $value % self::BUZZ_FACTOR;
  }
  public static function isFizzBuzz($value){
    $result1 = $this->isFizz($value);
    $result2 = $this->isBuzz($value);
    return $result1 && $result2;
  }
  public static function getReplacement($value){
    // if(self::isFizzBuzz($value)){
    //   return 'FizzBuzz';
    // }
    $fizzBuzzRule = new FizzBuzzRule();
    if($fizzBuzzRule->match($value)){
      return $fizzBuzzRule ->getReplacement();
    }
    // if(self::isFizz($value)){
    //   return 'Fizz';
    // }
    $fizzRule = new FizzRule();
    if($fizzRule ->match($value)){
      return $fizzRule->getReplacement();
    }
    // if(self::isBuzz($value)){
    //   return 'Buzz';
    // }
    $buzzRule = new BuzzRule();
    if($buzzRule->match($value)){
      return $buzzRule->getReplacement();
    }
    return $value;
  }
}
