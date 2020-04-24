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
     * @Route("/hlebarki", name="hlebarki")
     */
    public function hlebarki()
    {
        return $this->render('main/hlebarki.html.twig', [
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
}
