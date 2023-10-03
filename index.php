<?php

use Exemplar\Didatico;
use Exemplar\Programacao;
use Exemplar\Tecnico;
use Exemplar\Web;

require_once "vendor/autoload.php";

$livroTecnico = new  Tecnico;  
    $livroTecnico->setTitulo("Desenvolvimento de sistema");
    $livroTecnico->setAutor("Fulano de Tal");
    $livroTecnico->setPaginas(250);
    $livroTecnico->setFormato(["digital"]);
  

$livrosDidatico = new Didatico;
    $livrosDidatico->setTitulo("Literatura Moderna");
    $livrosDidatico->setFormato(["digital", "fisico"]);
    $livrosDidatico->setNivel(["medio", "superoir"]);
    $livrosDidatico->setDisciplina("Libras para tecnologia");


$livroProgramacao = new Programacao;
    $livroProgramacao->setTitulo("PHP");
    $livroProgramacao->setAutor("Beltrano");
    $livroProgramacao->getFormato("digital");
    $livroProgramacao->setArea("Tecnologia");   

  
   

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 </title> 
</head>

<body>
    <h1>Exercico Livro PHP com POO</h1>    
    <hr>

    <h2>Dados (Técnico)</h2>
    <p><b>Nome do livro:</b> <?=$livroTecnico->getTitulo()?></p>
    <p><b>Autor do livro:</b> <?=$livroTecnico->getAutor()?></p>
    <p><b>Formato do livro:</b> <?=$livroTecnico->getFormato()?></p>
   
    


    <h2>Dados (Didatico)</h2>
    <p><b>Nome:</b> <?=$livrosDidatico->getTitulo()?></p>
    <p><b>Formato:</b> <?=$livrosDidatico->getFormato()?></p>
    <p><b>Nivel:</b>  
        <?php
          foreach($livrosDidatico->getNivel() as $nivel){
            echo $nivel." ";
          };
          
        ?>  
    </p>
    

    <h2>Dados (Programação)</h2>
    <p><b>Nome:</b> <?=$livroProgramacao->getTitulo()?></p>
    <p><b>Autor:</b> <?=$livroProgramacao->getAutor()?></p>
    <p><b>Formato:</b> <?=$livroProgramacao->getFormato()?></p>
    <p><b>Área:</b> <?=$livroProgramacao->getArea()?></p></p>    


   


    <pre>       
        <?= var_dump($livroTecnico) ?> 
        <?= var_dump($livroProgramacao) ?> 
        <?= var_dump($livrosDidatico) ?>     
        

       
    </pre>


    <?php
    $livroWeb = new Web;
    var_dump($livroWeb);
    
    ?>
    

   
    
</body>

</html>