<?php

namespace App\Controller;

use App\Service\ServeiDadesSeccio;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class IniciController extends AbstractController
{
    /*private ServeiDadesSeccio $serveiDadesSeccio;

    public function __construct(ServeiDadesSeccio $serveiDadesSeccio)
    {
        $this->serveiDadesSeccio = $serveiDadesSeccio;
    }*/

    #[Route("/inici", name:"inici")]
    public function inici(ServeiDadesSeccio $serveiDadesSeccio)
    {
	    $seccions = $serveiDadesSeccio->getSeccions();
        return $this->render('inici.html.twig', [
            'seccions' => $seccions,
        ]);
    }
}

