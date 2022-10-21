<?php

namespace App\Controller;

use App\Entity\News;
use App\Repository\CourseCategoryRepository;
use App\Repository\CourseRepository;
use App\Repository\NewsRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
  #[Route('/news', name: 'news')]
  public function news(NewsRepository $newsRepository, PaginatorInterface $paginator, Request $request): Response
  {
      $news = $newsRepository->findBy(['isPublished' => true], ['name' => 'ASC']);

      $pagination = $paginator->paginate(
          $news,
          $request->query->getInt('page', 1),
          10
      );
    return $this->render('news/news.html.twig', [
        'news' => $pagination,
    ]);
  }


}
