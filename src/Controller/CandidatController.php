<?php

namespace App\Controller;

use App\Entity\Candidat;
use App\Form\CandidatType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CandidatController extends AbstractController
{
    #[Route('', name: 'app_home')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $data = new Candidat();
        $form = $this->createForm(CandidatType::class, $data);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($data);
            $em->flush();

            return $this->render('candidat/success.html.twig', [
                'name' => "{$data->getNom()} {$data->getPrenom()}"
            ]);
        }

        return $this->render('candidat/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
