<?php

namespace UniAlfa\Trabalho;

use DateTime;

class Fabrica {


    public function fabricar(): Carro {


        $detalhes = new Detalhes();
        $detalhes->setId(1);
        $detalhes->setModelo('RS e-tron GT');
        $detalhes->setCarroEletrico(true);
        $detalhes->setArCondicionado(true);
        $detalhes->setconversivel(false);


        $marca = new Marca();
        $marca->setId(1);
        $marca->setDescricao('Audi');
        $marca->setDesde(new DateTime('25/05/2021'));
        $marca->setAte(null);

        $carro = new Carro();
        $carro->setId(1);
        $carro->setMarca($marca);
        $carro->setDetalhes($detalhes);

        return $carro;

    }

}

$this->fabricar();



?>