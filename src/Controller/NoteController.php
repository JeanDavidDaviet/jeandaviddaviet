<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NoteController extends AbstractController
{

    /**
     * @Route("/notes", name="notes")
     */
    public function index()
    {
        $notes = $this->getDoctrine()->getRepository(Post::class)->findBy([ 'isNote' => true, 'published' => true ], ['createdAt' => 'DESC']);

        if(!$notes){
            throw $this->createNotFoundException('Aucune note trouvé');
        }

        return $this->render('note/notes.html.twig', [
            'notes' => $notes,
        ]);
    }

    /**
     * @Route("/note/{slug}", name="note")
     */
    public function note($slug)
    {
        $note = $this->getDoctrine()->getRepository(Post::class)->findOneBy([
            'slug' => $slug
        ]);

        if(!$note){
            throw $this->createNotFoundException("La note n'existe pas.");
        }

        return $this->render('note/note.html.twig', [
            'note' => $note,
        ]);
    }
}
