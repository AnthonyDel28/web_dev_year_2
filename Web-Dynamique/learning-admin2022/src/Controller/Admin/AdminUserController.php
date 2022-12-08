<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminUserController extends AbstractController
{
    /**
     * @param UserRepository $repository
     * @return Response
     */
    #[Route('/admin/user', name: 'app_admin_user')]
    public function adminUsers(UserRepository $repository): Response
    {
        $users = $repository->findAll();
        return $this->render('admin/users/users.html.twig', [
            'users' => $users,
        ]);
    }


    #[Route('/admin/role_user/{id}', name: 'app_admin_role_user_user')]
    public function userToUser(User $user, EntityManagerInterface $manager): Response
    {
        $role[] = 'ROLE_USER';
       $user->setRoles($role);
       $manager->flush();
        return $this->redirectToRoute('app_admin_user');
    }

    #[Route('/admin/role_admin/{id}', name: 'app_admin_role_user_admin')]
    public function userToAdmin(User $user, EntityManagerInterface $manager): Response
    {
        $role[] = 'ROLE_ADMIN';
        $user->setRoles($role);
        $manager->flush();
        return $this->redirectToRoute('app_admin_user');
    }

    #[Route('/admin/role_super_admin/{id}', name: 'app_admin_role_user_super_admin')]
    public function userToSuperAdmin(User $user, EntityManagerInterface $manager): Response
    {
        $role[] = 'ROLE_SUPER_ADMIN';
        $user->setRoles($role);
        $manager->flush();
        return $this->redirectToRoute('app_admin_user');
    }

    #[Route('/admin/role_teacher/{id}', name: 'app_admin_role_user_teacher')]
    public function userToTeacher(User $user, EntityManagerInterface $manager) :Response
    {
        $role[] = 'ROLE_TEACHER';
        $user->setRoles($role);
        $manager->flush();
        return $this->redirectToRoute('app_admin_user');
    }

    #[Route('/admin/user_delete/{id}', name: 'app_admin_user_delete')]
    public function userDelete(User $user, EntityManagerInterface $manager) :Response
    {
        $manager->remove($user);
        $manager->flush();
        $this->addFlash(
            'success',
            'Le membre  '.$user->getFirstName(). ' ' .$user->getLastName(). ' a bien été supprimé'
        );
        return $this->redirectToRoute('app_admin_user');
    }
}
