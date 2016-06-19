<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MainController extends Controller
{

    private function createSignupForm(){
        $defaultData = [
                        'username' => '',
                        'passwd' => 'password',
                        'domain' => 'UTBM',
                        'remember' => false,
                        'passwd2' => "Retype password",
                        'name' => "Real name"
                    ];
        $form = $this->createFormBuilder($defaultData)
            ->add('username', TextType::class, [
                                                    "label" => "Username:"
                                               ])
            ->add('passwd', PasswordType::class, [
                                                    "label" => "Password:"
                                               ])
            ->add('domain', ChoiceType::class, [
                                                    "choices" => [
                                                                    "UTBM" => "UTBM"
                                                                 ],
                                                    "label"  => "Your domain:"
                                               ])
            ->add('remember', CheckboxType::class, [
                                                    "label" => " Remember my login on this computer"
                                               ])
            ->add('passwd2', PasswordType::class, [
                                                    "label" => "Retype password:"
                                               ])
            ->add('name', TextType::class, [
                                                    "label" => "Real name:"
                                               ])
            ->add('signup', SubmitType::class, [
                                                    "label" => "Create account"
                                               ])
            ->getForm();

        return $form;
    }

    private function createLoginForm(){
        $defaultData = [
                            'username' => '',
                            'passwd' => 'password',
                            'domain' => 'UTBM',
                            'remember' => false,
                        ];
        $form = $this->createFormBuilder($defaultData)
            ->add('username', TextType::class, [
                                                    "label" => "Username:"
                                               ])
            ->add('passwd', PasswordType::class, [
                                                    "label" => "Password:"
                                               ])
            ->add('domain', ChoiceType::class, [
                                                    "choices" => [
                                                                    "UTBM" => "UTBM"
                                                                 ],
                                                    "label"  => "Your domain:"
                                               ])
            ->add('remember', CheckboxType::class, [
                                                    "label" => " Remember my login on this computer"
                                               ])
            ->add('login', SubmitType::class, [
                                                    "label" => "Log in"
                                               ])
            ->getForm();

        return $form;
    }

    public function signupAction(Request $request){
        $form = $this->createSignupForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // TODO search user
            // TODO verify passwd
            // TODO if ok
//                return $this->redirectToRoute('task_success');
            // TODO else
//                return $this->redirectToRoute('not succeed');
        }

        return $this->render(
                'default/signupForm.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Log in / create an account",
                    'form' => $form->createView()
                ]
            );
    }

    public function loginAction(Request $request){
        $form = $this->createLoginForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // TODO search user
            // TODO verify passwd
            // TODO if ok
//                return $this->redirectToRoute('task_success');
            // TODO else
//                return $this->redirectToRoute('not succeed');
        }

        return $this->render(
                'default/loginForm.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Log in / create an account",
                    'form' => $form->createView()
                ]
            );
    }

    public function indexAction(Request $request){
        if($request->query->has("title") && $request->query->get("title") == "Special:UserLogin"){
            if($request->query->has("type") && $request->query->get("type") == "signup")
                return $this->redirectToRoute('signup');
            return $this->redirectToRoute('login');
        }

        return $this->render(
                'default/home.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Home",
                    'content' => "basic index"
                ]
            );
    }

    public function homeAction(Request $request)
    {
        return $this->render(
                'default/home.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Home",
                    'content' => "Nothing to display for now"
                ]
            );
    }

    public function eventAction(Request $request)
    {
        return $this->render(
                'default/home.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Event",
                    'content' => "Coucou ça gaz ?"
                ]
            );
    }

    public function noPeopleAction(Request $request)
    {
        return $this->render(
                'default/error.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Error",
                    'error' => "No user selected"
                ]
            );
    }

    public function peopleAction(Request $request, $people)
    {
        if(strpos($people, "_") === false) // if user input is valid
            return $this->noPeopleAction($request);

        $repo = $this->getDoctrine()->getRepository('AppBundle:User');

        $p = $repo->findOneBy(
               [
                    "firstName" => explode("_", $people)[0],
                    "lastName" => explode("_", $people)[1]
               ]
            );

        if($p == null)
            return $this->noPeopleAction($request);

        // TODO render user data
        return $this->render( 
                'default/people.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "People:".$people,
                    'content' => "Coucou ça gaz ".$people." ?"
                ]
            );
    }
}
