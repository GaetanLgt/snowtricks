<?php

namespace App\Controller;

use App\Entity\Figure;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FigureController extends AbstractController
{
    #[Route('/figure/{slug}', name: 'figure_show')]
    public function index($slug, EntityManagerInterface $entityManager): Response
    {
        $figure = $entityManager->getRepository(Figure::class)->findOneBy(['slug' => $slug]);

        return $this->render('figure/index.html.twig', [
            'controller_name' => 'FigureController',
            'figure' => $figure
        ]);
    }
}
