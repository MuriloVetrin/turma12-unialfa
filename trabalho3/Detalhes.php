<?php

namespace UniAlfa\Trabalho;

class Detalhes {


    private int $id;
    private string $modelo;
    private bool $carroEletrico;
    private bool $arCondicionado;
    private bool $conversivel;

    public function setId($id):void
    {
        $this->id = $id;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function setModelo($modelo):void
    {
        $this->modelo = $modelo;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }


    public function setCarroEletrico($carroEletrico): void
    {
        $this->carroEletrico = $carroEletrico;
    }

    public function getCarroEletrico() : bool
    {
        return $this->carroEletrico;
    }


    public function setArCondicionado($arCondicionado): void
    {
        $this->arCondicionado = $arCondicionado;
    }

    public function getArCondicionado() : bool
    {
        return $this->arCondicionado;
    }


    public function setConversivel($conversivel): void
    {
        $this->conversivel = $conversivel;
    }

    public function getConversivelr() : bool
    {
        return $this->conversivel;
    }


}



?>