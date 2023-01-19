<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SallController extends AbstractController
{
    #[Route('/', name: 'app_sall')]
    public function index(): Response
    {
        return $this->render('sall/index.html.twig', [
            'controller_name' => 'SallController',
        ]);
    
    }


    #[Route('/CV', name: 'app_sall1')]
    public function CV(): Response
    {
        return $this->render('sall/CV.html.twig', [
            'controller_name' => 'SallController',
        ]);
    
    }

    
    #[Route('/PORTFOLIO', name: 'app_sall2')]
    public function PORTFOLIO(): Response
    {
        return $this->render('sall/PORTFOLIO.html.twig', [
            'controller_name' => 'SallController',
        ]);
    
    }
    #[Route('/HOBBIES', name: 'app_sall3')]
    public function HOBBIES(): Response
    {
        return $this->render('sall/HOBBIES.html.twig', [
            'controller_name' => 'SallController',
        ]);
    
    }
 
   
    
}
