<?php

namespace App\Controller;
use App\Entity\Course;
use App\Controller\CourseController;
use App\Entity\News;
use App\Repository\CourseRepository;
use App\Repository\NewsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
  /**
   * @return Response
   */
  #[Route('/', name: 'home')]
    public function index(CourseRepository $courseRepository, NewsRepository $newsRepository): Response
    {
        $courses = $courseRepository->findBy(['is_published' => true], ['name' => 'DESC'], 3);
        $news = $newsRepository->findBy(['isPublished' => true], [], 4);
        return $this->render('home/index.html.twig', [
            'courses' => $courses,
            'news' => $news
        ]);
    }

    /**
     * @return Response
     */
    #[Route('course/{slug}', name: 'course')]
    public function course(Course $course): Response
    {
        return $this->render('course/course.html.twig', [
            'course' => $course
        ]);
    }

}
