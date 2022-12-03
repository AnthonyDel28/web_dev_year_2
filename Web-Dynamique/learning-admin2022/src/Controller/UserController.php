<?php

namespace App\Controller;

use App\Form\EditProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(): Response
    {
        return $this->render('user/profile.html.twig', [
            
        ]);
    }

    #[Route('/edit-profile', name: 'app_edit_profile')]
    public function editProfile(\Symfony\Component\HttpFoundation\Request $request, EntityManagerInterface $manager)
    {
        $user = $this->getUser();
        $form = $this->createForm(EditProfileType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $user->setUpdatedAt(new \DateTimeImmutable());
            $manager->flush();
            return $this->redirectToRoute('app_profile');
        }
        return $this->renderForm('user/edit-profile.html.twig', [
            'form' => $form,
        ]);
    }
}
