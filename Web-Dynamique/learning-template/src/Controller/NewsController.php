<?php

namespace App\Controller;

use App\Repository\NewsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    #[Route('/news', name: 'news')]
    public function news(NewsRepository $repository, PaginatorInterface $paginator, Request $request): Response
    {
        $news = $repository->findBy(
            ['isPublished' => true]
        );
        $pagination = $paginator->paginate(
            $news,
            $request->query->getInt('page', 1), /*page number*/
            10 /*limit per page*/
        );
        return $this->render('news/news.html.twig', [
            'news' => $pagination
        ]);
    }
}
