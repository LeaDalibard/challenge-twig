<?php

namespace App\Controller;

use App\Master;
use App\SpacesToDashes;
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
        $messagepost ="";
        if ($_POST['message']) {
            $messagepost = $_POST['message'];
        }
        if($_POST['display']=="weird"){
            $transform=new Weirdcase();
        }
        else{$transform=new SpacesToDashes();}
        $master=new Master($messagepost,$transform);

        $transformMessage=$master->getMessage();
       // $logger=new Logger();
        //$logger->log($transformMessage);

        return $this->render('master/index.html.twig', [
            'message' => $transformMessage,
        ]);
    }


}
