<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
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
        // TODO FIND people

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
