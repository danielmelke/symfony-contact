<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactDataController extends AbstractController
{
    #[Route('/', name: 'contact_data')]
    public function index(): Response
    {
        return $this->render('contact_data/index.html.twig', [
            'controller_name' => 'ContactDataController',
        ]);
    }
}
