<?php
namespace App\Controller;

use App\Service\ServeiDadesSeccio;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeccioController extends AbstractController
{

    #[Route('/seccio/{codi}', name: 'dades_seccio')]
    public function dadesSeccio(string $codi, ServeiDadesSeccio $serveiDadesSeccio): Response
    {
        // Obté totes les seccions des del servei
        $seccions = $serveiDadesSeccio->getSeccions();

        // Busca la secció pel codi
        $dadesSeccio = null;
        if (array_key_exists($codi,$seccions)) {
            $dadesSeccio = $seccions[$codi];
        } else {
            $dadesSeccio = [
                'titol' => 'Secció no trobada',
                'paragraf' => 'El codi de la secció no és vàlid o no existeix.',
                'imatge' => 'assets/img/error.png',
            ];
        }

        // Renderitza la plantilla amb les dades de la secció
        return $this->render('dades_seccio.html.twig', [
            'dadesSeccio' => $dadesSeccio,
        ]);
    }

    // Ruta per mostrar totes les seccions
    #[Route('/dades_seccions', name: 'dades_seccions_llista')]
    public function dadesSeccionsLlista(ServeiDadesSeccio $serveiDadesSeccio): Response
    {
        // Defineix les dades de totes les seccions
        $seccions = $serveiDadesSeccio->getSeccions();

        // Renderitza la plantilla amb la llista de seccions
        return $this->render('dades_seccions.html.twig', [
            'totesLesSeccions' => $seccions,
        ]);
    }
}
