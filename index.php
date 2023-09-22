<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 </title>

    <style>

        *{box-sizing: border-box;}

        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
        }

        h1, h2 {
            text-align: center;
        }

        p a{
            font-size: 25px;
            margin: 10px;
        }
        
        table{            
            box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
        }

        table, td, tr {
             border: 1px solid; 
             border-collapse: collapse;  
             /* margin: auto;  */
             background-color: cornsilk          
        }      
        
        caption{          
              font-size: 30px;
              padding: 5px;              
        }

        th{
            background-color: #000000;
            color: #fff;
            padding: 10px;            
        }

        td{ 
            padding: 10px 50px;               
        }      

        tr:hover{
            background-color: cornsilk;
            color: #000000;
        }
    </style>

</head>

<body>
    <h1>Exercico Livro PHP com POO</h1>
    <hr>

    <?php
    require_once "src/Livro.php";
    $livroA = new Livro;

    $livroA->setTitulo("Árvore");
    $livroA->setAutor("Senhor das Árvore");
    $livroA->setPaginas(30);
    ?>

    <p>Titulo: <?= $livroA->getTitulo() ?></p>
    <p>Autor: <?= $livroA->getAutor() ?></p>
    <p>Páginas: <?= $livroA->getPaginas() ?></p>


    <!-- Essa tabela é a mesma coisa do <p> cima  -->
    <table>
        <caption>Livro</caption>
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Páginas</th>
        </tr>

        <tr>
            <td><?= $livroA->getTitulo() ?></td>
            <td><?= $livroA->getAutor() ?></td>
            <td><?= $livroA->getPaginas() ?></td>
        </tr>

    </table>


    <pre>
        <?= var_dump($livroA) ?>       
    </pre>









</body>

</html>