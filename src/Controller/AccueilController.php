<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/home", name="home_list")
     */
    public function list()
    {
       return $this->render('Accueil/index.html.twig');
    }
}