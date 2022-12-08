<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Course;
use App\Entity\CourseCategory;
use App\Form\CommentType;
use App\Repository\CourseCategoryRepository;
use App\Repository\CourseRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/category/{name}', name: 'category')]
    public function category(CourseCategory $courseCategory,UserRepository $userRepository, CourseCategoryRepository
                                            $courseCategoryRepository, CourseRepository $courseRepository):
    Response
    {
        $category_name = $courseCategory->getName();
        $category_id = $courseCategory->getId();
        $courses = $courseCategory->getCourses();
        return $this->renderForm('category/index.html.twig', [
            'category_name' => $category_name,
            'courses' => $courses,
        ]);
    }
}
