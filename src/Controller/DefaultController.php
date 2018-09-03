<?php
/**
 * Created by PhpStorm.
 * User: baofan
 * Date: 2018/9/2
 * Time: 13:08
 */

namespace App\Controller;

use App\Utils\MyMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * index
     *
     * @author baofan
     *
     * @param MessageBusInterface $bus
     *
     * @Route("/send-message")
     */
    public function index(MessageBusInterface $bus)
    {
        $bus->dispatch(new MyMessage('A string to be sent...'));

        return new Response('success');
    }
}