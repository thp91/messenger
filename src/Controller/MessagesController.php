<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessagesController extends AbstractController
{
    /**
     * @Route("/messages", name="app_messages")
     */
    public function index(): Response
    {
        return $this->render('messages/index.html.twig', [
            'controller_name' => 'MessagesController',
        ]);
    }

    /**
     * @Route("/messages/{id}", name="app_messages_show")
     */
    public function channel($id): Response
    {
        return $this->render('messages/channel.html.twig', [
            'controller_name' => 'ChannelController number' . $id,
        ]);
    }
}
