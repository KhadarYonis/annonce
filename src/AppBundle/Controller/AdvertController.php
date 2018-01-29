<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdvertController extends Controller
{
    /**
     * @Route("/annonce", name="annonce.index")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('frontend/annonce/annonce.html.twig');
    }
}
