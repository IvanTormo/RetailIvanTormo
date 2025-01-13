<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeccioController
{
    #[Route('/seccio/{codi}', name:'dades_seccio')]
    public function seccio($codi)
    {
        $seccions = [
            ["codi" => "1", "nom" => "Roba", "descripcio" => "Descripció de la secció", "any" => "2024", "articles" => ["Pantalons", "Camisa", "Jersey", "Xaqueta"]],
            ["codi" => "2", "nom" => "Electrònica", "descripcio" => "Productes tecnològics", "any" => "2024", "articles" => ["Telèfon", "Ordinador", "Televisió"]],
            ["codi" => "3", "nom" => "Alimentació", "descripcio" => "Productes alimentaris", "any" => "2024", "articles" => ["Pa", "Llet", "Formatge"]],
            ["codi" => "4", "nom" => "Esports", "descripcio" => "Material esportiu", "any" => "2024", "articles" => ["Pilota", "Sabatilles", "Raqueta"]],
        ];

        $seccioTrobada = null;
        foreach ($seccions as $seccio) {
            if ($seccio["codi"] === $codi) {
                $seccioTrobada = $seccio;
                break;
            }
        }

        if ($seccioTrobada) {
            $detalls = sprintf(
                "Secció trobada:<br>Codi: %s<br>Nom: %s<br>Descripció: %s<br>Any: %s<br>Articles: %s",
                $seccioTrobada["codi"],
                $seccioTrobada["nom"],
                $seccioTrobada["descripcio"],
                $seccioTrobada["any"],
                implode(", ", $seccioTrobada["articles"])
            );
            return new Response($detalls);
        } else {
            return new Response(sprintf("No s’ha trobat la secció: %s", $codi));
        }
    }
}

