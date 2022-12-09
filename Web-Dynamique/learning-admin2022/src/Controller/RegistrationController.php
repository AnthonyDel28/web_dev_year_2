<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(MailerInterface $mailer, Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user   ->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
                );
                if(empty($user->getImageFile()))  $user->setImageName('default.jpg');  
                $user   ->setCreatedAt(new \DateTimeImmutable())
                        ->setUpdatedAt(new \DateTimeImmutable())
                        ->setRoles(['ROLE_USER'])
                        ->setIsDisabled(false);
            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            $email = new TemplatedEmail();
            $email->from($user->getEmail());
            $email->to('anthony@gmail.com');
            $email->subject('Inscription sur notre site');
            $email->htmlTemplate('contact/email-registration.html.twig');
            $email->context(
                [
                    'firstName' => $user->getFirstName(),
                    'lastName' => $user->getLastName(),
                ]
            );
            $mailer->send($email);
            $this->addFlash(
                'success',
                'Inscription terminée avec succès!'
            );
            return $this->redirectToRoute('home');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
