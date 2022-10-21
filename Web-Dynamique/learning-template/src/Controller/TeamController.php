<?php

namespace App\Controller;

use App\Entity\Course;
use App\Repository\CourseCategoryRepository;
use App\Repository\CourseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeamController extends AbstractController
{
  #[Route('/team', name: 'team')]
  public function team(): Response
  {
      return $this->render('team/team.html.twig');
  }
}
