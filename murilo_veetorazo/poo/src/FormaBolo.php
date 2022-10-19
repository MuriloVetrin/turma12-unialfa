<?php 

namespace Unialfa\poo;

class FormaBolo
{
    public array $ingredientes;
    public int $tempoForno;

    public function fazerBolo(): void
    {
        $this->misturaIngredientes();
    }

    public function misturaIngredientes(): void
    {
        if (count($this->ingredientes) === 0) {
            echo "Não temos ingredientes suficientes";
            return;
        }

        echo "Misturando os ingredientes ". json_encode($this->ingredientes);
    }
}