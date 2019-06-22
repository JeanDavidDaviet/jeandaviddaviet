<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('page/index.html.twig');
    }

    /**
     * @Route("/{slug}", name="page")
     */
    public function page($slug)
    {
        return $this->render('page/page.html.twig', [
            'slug' => $slug,
        ]);
    }
}
