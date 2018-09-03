<?php
/**
 * Created by PhpStorm.
 * User: baofan
 * Date: 2018/9/2
 * Time: 12:09
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * index
     *
     * @author baofan
     *
     * @Route("/Lucky/index",methods={"GET"},name="lucky_index")
     */
    public function index()
    {
        $random = mt_rand(10, 99);

        return new Response($random);
    }
}