<?php

namespace ExamFinalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlgoController extends Controller
{
    //////////////////////////////////////
    // Complète les fonctions suivantes //
    //////////////////////////////////////

    // Exercice 1
    private function min_max($tab)
    {

    }

    // Exercice 2
    private function sum_of_min_max($tab)
    {

    }

    // Exercice 3
    private function toRoman($int)
    {

    }



    public function indexAction()
    {
        $tps_restant = $this->container->get('symfony_algo')->getTemps();
        $tab = array(rand(-999, 999), rand(-999, 999), rand(-999, 999), rand(-999, 999), rand(-999, 999), rand(-999, 999), rand(-999, 999), rand(-999, 999), );

        $sum = $this->container->get('symfony_algo')->getSum($tab);

        $test1 = rand(1, 10);
        $test2 = rand(1, 100);
        $test3 = rand(1, 999);
        $test4 = rand(1, 9999);

        $roman1 = $this->container->get('symfony_algo')->romanic_number($test1);
        $roman2 = $this->container->get('symfony_algo')->romanic_number($test2);
        $roman3 = $this->container->get('symfony_algo')->romanic_number($test3);
        $roman4 = $this->container->get('symfony_algo')->romanic_number($test4);

        $min_max = $this->min_max($tab);
        $sum_of_min_max = $this->sum_of_min_max($tab);
        $numeral_to_roman1 = $this->toRoman($test1);
        $numeral_to_roman2 = $this->toRoman($test2);
        $numeral_to_roman3 = $this->toRoman($test3);
        $numeral_to_roman4 = $this->toRoman($test4);

        return $this->render('ExamFinalBundle:Algorithmique:index.html.twig', array(
            'tps_restant' => $tps_restant,
            'sum' => $sum,
            'tab' => $tab,
            'min_max' => $min_max,
            'sum_of_min_max' => $sum_of_min_max,
            'test1' => $test1,
            'test2' => $test2,
            'test3' => $test3,
            'test4' => $test4,
            'roman1' => $roman1,
            'roman2' => $roman2,
            'roman3' => $roman3,
            'roman4' => $roman4,
            'numeral_to_roman1' => $numeral_to_roman1,
            'numeral_to_roman2' => $numeral_to_roman2,
            'numeral_to_roman3' => $numeral_to_roman3,
            'numeral_to_roman4' => $numeral_to_roman4,
        ));
    }
}