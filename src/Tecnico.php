<?php
require_once "Livro.php";

// class Tecnico extends Livro{
//     private array $formato = ["digital", "fisica"];

         
//     public function getFormato(): array
//     {
//         return $this->formato;        
//     }   

//     public function setFormato(array $formato):self
//     {
//         $this->formato = $formato;     
//         return $this; 
//     }
// }

//Forma do professor
 class Tecnico extends Livro{
     private array $formato = ["digital", "fisica"];

     //Formato   
     public function getFormato(): string
     {
         return implode ( ", ", $this->formato);        
     }   

     public function setFormato(array $formato):self
     {
         $this->formato = $formato;     
         return $this; 
     }
 }

    
