<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @param PostRepository $repository
     * @return Response
     */
    #[Route('/admin', name: 'admin')]
    public function posts(PostRepository $repository): Response
    {
        $posts = $repository->findBy(
            [],
            ['createdAt' => 'DESC']
        );
        return $this->render('admin/admin.html.twig', [
            'posts' => $posts,
        ]);
    }

    /**
     * @param Post $post
     * @param EntityManagerInterface $manager
     * @return RedirectResponse
     */
    #[Route('/admin/delete/{id}', name: 'delete')]
    public function delete(Post $post, EntityManagerInterface $manager)
    {
        $manager->remove($post);
        $manager->flush();
        return $this->redirectToRoute('admin');
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/admin/new', name: 'new')]
    public function new(Request $request, EntityManagerInterface $manager)
    {
        $post = new Post;
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $post->setCreatedAt(new \DateTimeImmutable())
                 ->setImage('default.png')
                 ->createSlug();
            $manager->persist($post);
            $manager->flush();
            return $this->redirectToRoute('admin');
        }


        return $this->renderForm('admin/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/admin/edit/{id}', name: 'edit')]
    public function edit(EntityManagerInterface $manager, Post $post, Request $request)
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $post->createSlug();
            $manager->flush();
            return $this->redirectToRoute('admin');
        }
        return $this->renderForm('admin/edit.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/admin/view/{id}', name: 'view')]
    public function view(EntityManagerInterface $manager, Post $post)
    {
        $post->setIsPublished(!$post->isIsPublished());
        $manager->flush();
        return $this->redirectToRoute('admin');
    }
}
