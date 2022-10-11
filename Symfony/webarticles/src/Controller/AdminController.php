<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Post;
use App\Form\CategoryType;
use App\Form\PostType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
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
                 ->setImage('default.png');
            $manager->persist($post);
            $manager->flush();
            return $this->redirectToRoute('admin');
        }


        return $this->renderForm('admin/new.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/admin/category', name: 'category')]
    public function addCategory(Request $request, EntityManagerInterface $manager) : Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($category);
            $manager->flush();
            return $this->redirectToRoute('admin');
        }
        return $this->renderForm('admin/category.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/admin/edit/{id}', name: 'edit')]
    public function edit(Request $request, EntityManagerInterface $manager, Post $post) : Response
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($post);
            $manager->flush();
            return $this->redirectToRoute('posts');
        }
        return $this->renderForm('admin/edit.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/admin/hide/{id}', name: 'hide')]
    public function hide(EntityManagerInterface $manager, Post $post) :Response
    {
        $post->setIsPublished(!$post->isIsPublished());
        $manager->flush();
        return $this->redirectToRoute('admin');
    }
}
