<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AccountPasswordController extends AbstractController
{

    private $passwordEncoder; //declaration de variable 

    public function __construct(UserPasswordHasherInterface $passwordEncoder) // le contructeur permet de construir une variable et de l associer a une classe permettant de l utiliser plus bas
    {
        $this->passwordEncoder = $passwordEncoder; // simplification et assigniation de la variable 
    }


    /**
     * @Route("/account/password_reset", name="account_password") 
     */
    public function passwordReset(Request $request): Response
    {
        $user = $this->getUser(); // utilisateur connecter (objet)
        $form = $this->createForm(ChangePasswordType::class, $user); // creation du formulaire de modification ChangePasswordClass et ajout du paramettres user
        $form->handleRequest($request); // ont retrouve request 


        if ($form->isSubmitted() && $form->isValid()) { // si le formulaire et soumis et valide 

            $new_pwd = $form->get('password')->getData(); // récuperation des donner des champ du formulaire


            $em = $this->getDoctrine()->getManager(); // em contient desormait la methode doctrine afin de pouvoir enregistrer en bdd.
            $user->setPassword(
                $this->passwordEncoder->hashPassword($user, $new_pwd) // permet de hacher le mot de passe et demande 2 arguments .
            );

            $em->flush(); // envoi la variable en bdd
            $this->addFlash('success', 'Votre mot de passe a bien etait modifier !'); // message flash apres insertion.
        }

        return $this->render('account/account_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
