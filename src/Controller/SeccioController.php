<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeccioController extends AbstractController
{
    #[Route('/seccio/{codi}', name: 'dades_seccions')]
    public function dadesSeccio(string $codi): Response
    {
        // Defineix les dades segons el codi
        $dades = [
            '001' => [
                'titol' => 'Tecnologia',
                'paragraf' => 'Explora les últimes tendències en tecnologia, des de gadgets fins a innovacions en intel·ligència artificial.',
                'imatge' => 'assets/img/tecnologia.jpg',
            ],
            '002' => [
                'titol' => 'Ciència',
                'paragraf' => 'Descobreix els avenços científics més recents i com estan canviant el nostre món, des de la biologia fins a la física quàntica.',
                'imatge' => 'assets/img/ciencia.jpg',
            ],
            '003' => [
                'titol' => 'Art i Disseny',
                'paragraf' => "Mira les últimes creacions artístiques i el món del disseny modern, des de l'art digital fins a les exposicions més innovadores.",
                'imatge' => 'assets/img/artidisseny.jpg',
            ],
            '004' => [
                'titol' => 'Esports',
                'paragraf' => 'Segueix les últimes novetats en el món dels esports, des de competicions internacionals fins a novetats sobre equips i atletes.',
                'imatge' => 'assets/img/esport.jpeg',
            ],
        ];

        // Recupera les dades segons el codi, o un valor per defecte
        $dadesSeccio = $dades[$codi] ?? [
            'titol' => 'Secció no trobada',
            'paragraf' => 'El codi de la secció no és vàlid o no existeix.',
            'imatge' => 'img/error.png',
        ];

        // Renderitza la plantilla amb les dades de la secció
        return $this->render('dades_seccio.html.twig', [
            'dadesSeccio' => $dadesSeccio,
        ]);
    }

    // Ruta per mostrar totes les seccions
    #[Route('/dades_seccions', name: 'dades_seccions_llista')]
    public function dadesSeccionsLlista(): Response
    {
        // Defineix les dades de totes les seccions
        $dades = [
            '001' => [
                'titol' => 'Tecnologia',
                'paragraf' => 'Explora les últimes tendències en tecnologia, des de gadgets fins a innovacions en intel·ligència artificial.',
                'imatge' => 'assets/img/tecnologia.jpg',
            ],
            '002' => [
                'titol' => 'Ciència',
                'paragraf' => 'Descobreix els avenços científics més recents i com estan canviant el nostre món, des de la biologia fins a la física quàntica.',
                'imatge' => 'assets/img/ciencia.jpg',
            ],
            '003' => [
                'titol' => 'Art i Disseny',
                'paragraf' => "Mira les últimes creacions artístiques i el món del disseny modern, des de l'art digital fins a les exposicions més innovadores.",
                'imatge' => 'assets/img/artidisseny.jpg',
            ],
            '004' => [
                'titol' => 'Esports',
                'paragraf' => 'Segueix les últimes novetats en el món dels esports, des de competicions internacionals fins a novetats sobre equips i atletes.',
                'imatge' => 'assets/img/esport.jpeg',
            ],
        ];

        // Renderitza la plantilla amb la llista de seccions
        return $this->render('dades_seccions.html.twig', [
            'totesLesSeccions' => $dades,
        ]);
    }
}
