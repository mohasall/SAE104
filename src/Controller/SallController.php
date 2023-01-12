<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SallController extends AbstractController
{
    #[Route('/sall', name: 'app_sall')]
    public function index(): Response
    {
        return $this->render('sall/index.html.twig', [
            'controller_name' => 'SallController',
        ]);
    
    }
    #[Route('/Sall', name: 'app_Sall')]
    Public function home(){
    return $this->render('Sall/home.html.twig');
    }
}
