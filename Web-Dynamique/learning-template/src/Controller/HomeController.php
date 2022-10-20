<?php

namespace App\Controller;
use App\Entity\Course;
use App\Controller\CourseController;
use App\Repository\CourseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
  /**
   * @return Response
   */
  #[Route('/', name: 'home')]
    public function index(CourseRepository $courseRepository): Response
    {
        $courses = $courseRepository->findBy(['is_published' => true], ['name' => 'DESC'], 3);
        return $this->render('home/index.html.twig', [
            'courses' => $courses
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
