<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 </title>

   

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