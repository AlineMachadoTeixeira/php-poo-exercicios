<?php
//Declarando namespace
namespace Exemplar;



class Didatico extends Tecnico{
    private string $disciplina;
    private array $nivel = ["básico", "médio", "superior"];
    

    //Disciplina
    public function getDisciplina(): string
    {
        return $this->disciplina;
    }
    
    public function setDisciplina(string $disciplina): self
    {
        $this->disciplina = $disciplina;

        return $this;
    }

    //Nivel
    public function getNivel(): array
    {
        return $this->nivel;
    }
    
    public function setNivel(array $nivel): self
    {
        $this->nivel = $nivel;

        return $this;
    }
}