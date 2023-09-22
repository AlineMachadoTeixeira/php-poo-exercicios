<?php
class Livro{
    private string $titulo;
    private string $autor;
    private int $paginas = 0;

    //Titulo
    public function setTitulo(string $titulo):void{
        $this->titulo = $titulo;
    }

    public function getTitulo():string{
        return $this->titulo;
    }
 
    //Autor
    public function setAutor(string $autor):void{
        $this->autor = $autor;
    }

    public function getAutor():string{
        return $this->autor;
    }

    //Páginas
    public function setPaginas(int $paginas):void{
        $this->paginas = $paginas;
    }

    public function getPaginas():int{
        return $this->paginas;
    }


}



