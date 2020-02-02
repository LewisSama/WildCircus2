<?php

namespace App\Controller;

use App\Repository\CircusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(CircusRepository $circusRepository): Response
    {
        return $this->render('homepage/index.html.twig', [
            'circuses' => $circusRepository->findAll()
        ]);
    }
}
