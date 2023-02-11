<?php

namespace App\Controller;

use App\Entity\Card;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/Dashboard", name="app_dashboard")
     */
    public function index(): Response
    {
        return $this->render('BackOffice/dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
}
