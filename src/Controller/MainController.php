<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }


    /**
     * @Route("/aboutUs", name="aboutUs")
     */
    public function aboutUs()
    {
        return $this->render('main/aboutUs.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/allInsects", name="allInsects")
     */
    public function allInsects()
    {
        return $this->render('main/allInsects.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
