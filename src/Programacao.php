<?php
//Declarando namespace
namespace Exemplar;

class  Programacao extends Tecnico{
    private string $area;    

    //Area
    public function getArea(): string
    {
        return $this->area;
    }
    
    public function setArea(string $area): self
    {
        $this->area = $area;

        return $this;
    }
}

