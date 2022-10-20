<?php

namespace App\Controller;

use App\Repository\CourseCategoryRepository;
use App\Repository\CourseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends AbstractController
{
  #[Route('/courses', name: 'courses')]
  public function courses(CourseCategoryRepository $categoryRepository, CourseRepository $courseRepository): Response
  {
      $categories = $categoryRepository->findBy([], ['name' => 'ASC']);
      $courses = $courseRepository->findBy(['is_published' => true], ['name' => 'ASC']);
    return $this->render('course/courses.html.twig', [
        'categories' => $categories,
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
