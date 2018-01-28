<?php
/**
 * Created by PhpStorm.
 * User: khadar
 * Date: 28/01/18
 * Time: 20:03
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OfferController extends Controller
{
    /**
     * @Route("/offres", name="offer.index")
     */
    public function offerAction()
    {
        // replace this example code with whatever you need
        return $this->render('frontend/offer/offer.html.twig');
    }
}