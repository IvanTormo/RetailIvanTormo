<?php

namespace App\Service;

class ServeiDadesSeccio
{
    private array $seccions = [
            '1' => [
                'titol' => 'Tecnologia',
                'paragraf' => 'Explora les últimes tendències en tecnologia, des de gadgets fins a innovacions en intel·ligència artificial.',
                'imatge' => 'assets/img/tecnologia.jpg',
            ],
            '2' => [
                'titol' => 'Ciència',
                'paragraf' => 'Descobreix els avenços científics més recents i com estan canviant el nostre món, des de la biologia fins a la física quàntica.',
                'imatge' => 'assets/img/ciencia.jpg',
            ],
            '3' => [
                'titol' => 'Art i Disseny',
                'paragraf' => "Mira les últimes creacions artístiques i el món del disseny modern, des de l'art digital fins a les exposicions més innovadores.",
                'imatge' => 'assets/img/artidisseny.jpg',
            ],
            '4' => [
                'titol' => 'Esports',
                'paragraf' => 'Segueix les últimes novetats en el món dels esports, des de competicions internacionals fins a novetats sobre equips i atletes.',
                'imatge' => 'assets/img/esport.jpeg',
            ],
    ];

    public function getSeccions(): array
    {
        return $this->seccions;
    }
}

