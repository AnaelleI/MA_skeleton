<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Model\User;

class SearchController extends Controller
{
    public function searchAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery("SELECT u.page FROM AppBundle:User u WHERE u.page LIKE :searchterm")
            ->setParameter('searchterm', '%'.$request->query->get("search").'%');

        $results = $query->getResult();

        dump($results);

        $formRes = "</br>".$results[0]["page"];

        return $this->render(
                'default/search.html.twig', 
                [
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
                    'title' => "Search",
                    'search' => $request->query->get("search"),
                    'res' => $formRes
                ]
            );
    }

}
