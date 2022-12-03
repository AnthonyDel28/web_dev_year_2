<?php

namespace App\Controller\Admin;

use App\Entity\News;
use Cocur\Slugify\Slugify;
use App\Form\NewsType;
use App\Repository\NewsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminNewsController extends AbstractController
{
    #[Route('/admin/news', name: 'app_admin_news')]
    public function adminNews(NewsRepository $repository): Response
    {
        $news = $repository->findBy(
            [],
            ['createdAt' => 'DESC']
        );
        return $this->render('admin/news/news.html.twig', [
            'news' => $news
        ]);
    }

    #[Route('/admin/delnews/{id}', name: 'app_admin_del_news')]
    public function delnews(News $news, EntityManagerInterface $manager) {
        $manager->remove($news);
        $manager->flush();
        $this->addFlash(
            'success',
            'La news a bien été supprimé'
        );
        return $this->redirectToRoute('app_admin_news');
    }

    #[Route('/admin/viewnews/{id}', name: 'app_admin_view_news')]
    public function viewCourse(News $news, EntityManagerInterface $manager): Response
    {
        $news->setIsPublished(!$news->isIsPublished());
        $manager->flush();
        return $this->redirectToRoute('app_admin_news');
    }

    #[Route('/admin/newnews', name: 'app_admin_new_news')]
    public function newNews(EntityManagerInterface $manager, \Symfony\Component\HttpFoundation\Request $request) :Response
    {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $slug = new Slugify();
            $news->setSlug($slug->slugify($news->getName()));
            $news->setCreatedAt(new \DateTimeImmutable());
            $news->setIsPublished(true);
            $manager->persist($news);
            $manager->flush();
            $this->addFlash(
                'success',
                'La news a bien été ajoutée.'
            );
            return $this->redirectToRoute('app_admin_news');
        }
        return $this->renderForm('admin/news/newnews.html.twig', [
            'form' => $form,
        ]);
    }
}
