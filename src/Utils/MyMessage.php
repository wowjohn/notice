<?php
/**
 * Created by PhpStorm.
 * User: baofan
 * Date: 2018/9/2
 * Time: 13:30
 */

namespace App\Utils;

class MyMessage
{
    private $string;

    public function __construct($string)
    {
        return $this->string = $string;
    }
}