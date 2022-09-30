<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/', name: 'posts')]
    public function posts(PostRepository $repository): Response
    {
        $posts = $repository->findBy(array('isPublished' => true), array('title' => 'ASC'));
        return $this->render('post/posts.html.twig', [
            'posts' => $posts,
        ]);
    }
}
