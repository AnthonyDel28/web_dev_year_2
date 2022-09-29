<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/', name: 'posts')]
    public function posts(): Response
    {
        return $this->render('post/posts.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
}
