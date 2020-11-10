<?php

namespace App\Controller;

use App\Master;
use App\Weirdcase;
use App\Logger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MasterController extends AbstractController
{
    /**
     * @Route("/master", name="master")
     */
    public function index(): Response
    {
        $message = '';

        return $this->render('master/index.html.twig', [
            'message' => $message,
        ]);
    }

    /**
     * @Route("/message",name="message", methods="POST")
     */

    public function message(): Response
    {
        if ($_POST['message']) {
            $messagepost = $_POST['message'];
            $message=new Master($messagepost);
            $message->log();
            $finalmessage=$message->weirdcase();
        } else {
            $finalmessage = 'Mymessage';
        }

        return $this->render('master/index.html.twig', [
            'message' => $finalmessage,
        ]);
    }


}
