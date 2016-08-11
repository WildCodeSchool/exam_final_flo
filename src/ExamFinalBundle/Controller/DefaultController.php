<?php

namespace ExamFinalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $tps_restant = $this->container->get('symfony_algo')->getTemps();

        return $this->render('default/index.html.twig', array(
            'tps_restant' => $tps_restant
        ));
    }
}
