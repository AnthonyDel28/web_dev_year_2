<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'admin')]
    public function posts(PostRepository $repository): Response
    {
        $posts = $repository->findBy(
            [],
            ['createdAt' => 'DESC']
        );
        dump($posts);
        return $this->render('admin/admin.html.twig', [
            'posts' => $posts,
        ]);
    }

    #[Route('/admin/delete/{id}', name: 'delete')]
    public function delete(Post $post, EntityManagerInterface $manager) : Response
    {
        $manager->remove($post);
        $manager->flush();
        return $this->redirectToRoute('admin');
    }
}
