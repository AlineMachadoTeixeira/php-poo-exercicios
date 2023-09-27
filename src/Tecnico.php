<?php
require_once "Livro.php";

class Tecnico extends Livro{
    private array $formato = ["digital", "fisico"];

    //Formato 
    public function getFormato(): string
    {
        return implode($this->formato);
    }   
    public function setFormato(array $formato): void
    {
        $this->formato = $formato;      
    }
}


    
