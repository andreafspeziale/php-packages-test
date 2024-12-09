<?php

namespace RandomNumberGenerator;

class RandomNumberGenerator
{
  public static function generate($min = 0, $max = 100)
  {
    return rand($min, $max);
  }
}
