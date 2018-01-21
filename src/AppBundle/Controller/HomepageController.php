<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomepageController extends Controller
{
    /**
     * @Route("/", name="homepage.index")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('frontend/homepage/home.html.twig');
    }
}
