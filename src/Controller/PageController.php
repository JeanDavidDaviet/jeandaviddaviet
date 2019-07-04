<?php

namespace App\Controller;

use App\Entity\Page;
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
     * @Route("/{slug}", name="page", requirements={"slug"="^(?![portfolio|admin].*$).*"})
     */
    public function page($slug)
    {
        $page = $this->getDoctrine()->getRepository(Page::class)->findOneBy([
            'slug' => $slug
        ]);

        if(!$page){
            throw $this->createNotFoundException('Aucune page trouvée');
        }

        return $this->render('page/page.html.twig', [
            'page' => $page,
        ]);
    }
}
