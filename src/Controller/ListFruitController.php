<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListFruitController extends AbstractController
{
    #[Route('/list/fruit', name: 'app_list_fruit')]
    public function index(): Response
    {
        return $this->render('list_fruit/index.html.twig', [
        ]);
    }
}
