<?php

namespace App\Controller;

use App\Entity\Dossier;
use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->getPostsOrderedByDate('DESC');
        if(!$posts){
            throw $this->createNotFoundException('Aucun article trouvé');
        }
        return $this->render('blog/blog.html.twig', [
            'posts' => $posts,
        ]);
    }

    /**
     * @Route("/blog/{slug}", name="post")
     */
    public function post($slug)
    {
        $post = $this->getDoctrine()->getRepository(Post::class)->findOneBy([
            'slug' => $slug
        ]);

        if(!$post){
            throw $this->createNotFoundException("L'article n'existe pas.");
        }

        return $this->render('blog/post.html.twig', [
            'post' => $post,
        ]);
    }

    /**
     * @Route("/dossier/{slug}", name="dossier")
     */
    public function dossier($slug)
    {
        $dossier = $this->getDoctrine()->getRepository(Dossier::class)->findOneBy([
            'slug' => $slug
        ]);

        if(!$dossier){
            throw $this->createNotFoundException("Le dossier n'existe pas.");
        }

        $posts = $dossier->getPosts()->toArray();

        if(!$posts){
            throw $this->createNotFoundException("Aucun article lié à ce dossier.");
        }

        return $this->render('blog/dossier.html.twig', [
            'dossier' => $dossier,
            'posts' => $posts
        ]);
    }
}
