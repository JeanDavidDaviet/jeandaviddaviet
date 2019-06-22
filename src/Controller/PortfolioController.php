<?php

namespace App\Controller;

use App\Entity\Portfolio;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function index()
    {
        $portfolios = $this->getDoctrine()->getRepository(Portfolio::class)->findAll();

        if(!$portfolios){
            throw $this->createNotFoundException('Aucun projet trouvé');
        }

        return $this->render('portfolio/portfolio.html.twig', [
            'portfolios' => $portfolios,
        ]);
    }
    /**
     * @Route("/portfolio/{slug}", name="projet")
     */
    public function projet($slug)
    {
        $projet = $this->getDoctrine()->getRepository(Portfolio::class)->findOneBy([
            'slug' => $slug
        ]);

        if(!$projet){
            throw $this->createNotFoundException('Aucun projet trouvé');
        }

        return $this->render('portfolio/projet.html.twig', [
            'projet' => $projet,
        ]);
    }
}
