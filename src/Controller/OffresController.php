<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OffresController extends AbstractController
{
    /**
     * @Route("/offres", name="offres_list")
     */
    public function list()
    {
       return $this->render('emplois/index.html.twig');
    }
}