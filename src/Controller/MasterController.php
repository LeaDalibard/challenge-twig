<?php

namespace App\Controller;

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
            $message = $_POST['message'];
            file_put_contents('log.info', json_encode($message, JSON_PRETTY_PRINT));

        } else {
            $message = 'Mymessage';
        }

        return $this->render('master/index.html.twig', [
            'message' => $message,
        ]);
    }


}
