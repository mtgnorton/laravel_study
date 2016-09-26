<?php
namespace App\Helper;
class Helper{
  public  static function getRandomString($length)
  { 
    $begin = 33;
    $end   = 126;
    $randomString = '';
    for ($i=0; $i < $length; $i++) { 
    $randomString .=chr(mt_rand($begin,$end));
    }
    return $randomString;
  }
}