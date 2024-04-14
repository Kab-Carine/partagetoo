<?php

namespace App\Controller;


use App\Entity\Ad;
use App\Repository\AdRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    #[Route('/', name: 'default_home', methods: ['GET'])]
    public function home(AdRepository $adRepository): Response
    {
        $ads = $adRepository->findAll();

        return $this->render('default/home.html.twig', ['ads' => $ads]);
    }

}