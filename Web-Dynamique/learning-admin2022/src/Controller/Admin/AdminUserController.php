<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminUserController extends AbstractController
{
    #[Route('/admin/users', name: 'app_admin_users')]
    #[IsGranted('ROLE_SUPER_ADMIN')]
    public function index(UserRepository $repository): Response
    {
      
      $users = $repository->findBy(
        [],
        ['lastName' => 'DESC']
      );
      return $this->renderForm('admin/users/users.html.twig', [
        'users' => $users,
      ]);
    }
   
    #[Route('/admin/promote/{id}/{role}', name: 'app_admin_users_promote')]
    // #[IsGranted('ROLE_SUPER_ADMIN')]
    public function promote(User $user, EntityManagerInterface $manager, $role): Response
    {
      $user->setRoles([$role]);
      $manager->flush();
      $this->addFlash(
        'success',
        'L\'utilisateur a bien été promu'
      );
      return $this->redirectToRoute('app_admin_users');
    }
}
