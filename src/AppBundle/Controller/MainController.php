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

use AppBundle\Model\User;

class MainController extends Controller
{
    public function indexAction(Request $request){
        if($request->query->has("title") && $request->query->get("title") == "Special:UserLogin"){
            if($request->query->has("type") && $request->query->get("type") == "signup")
                return $this->redirectToRoute('fos_user_registration_register');
            return $this->redirectToRoute('fos_user_security_login');
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
