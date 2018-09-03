<?php
/**
 * Created by PhpStorm.
 * User: baofan
 * Date: 2018/9/2
 * Time: 12:55
 */

namespace App\MessageHandler;

use App\Utils\MyMessage;

class MyMessageHandler
{
    public function __invoke(MyMessage $message)
    {
        sleep(10);
        var_dump($message);
        // do something with it.
    }
}