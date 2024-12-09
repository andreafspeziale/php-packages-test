<?php

namespace RandomStringGenerator;

class RandomStringGenerator
{
  public static function generate($length = 10)
  {
    return substr(str_shuffle(str_repeat('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', $length)), 0, $length);
  }
}
