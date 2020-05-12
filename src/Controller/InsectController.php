<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InsectController extends AbstractController
{
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
     * @Route("/starsheli", name="starsheli")
     */
    public function starsheli()
    {
        return $this->render('insects\styrsheli.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/kyrleji", name="kyrleji")
     */
    public function kyrleji()
    {
        return $this->render('insects\kyrleji.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/muhi", name="muhi")
     */
    public function muhi()
    {
        return $this->render('insects\muhi.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/ant", name="ant")
     */
    public function ant()
    {
        return $this->render('insects\ant.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/mosquitoes", name="mosquitoes")
     */
    public function mosquitoes()
    {
        return $this->render('insects\mosquitoes.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

}
