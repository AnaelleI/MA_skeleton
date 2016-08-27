<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Model\User;

class SearchController extends Controller
{
    public function searchAction(Request $request){

        return $this->render(
                'default/home.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Search",
                    'content' => "basic search"
                ]
            );
    }

}
