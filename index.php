<?php

class Genre 
{
    public $name;

    public function __construct($name) 
    {
        $this->name = $name;
    }
}

class Movie 
{
    public $title;
    public $lenght;
    public $poster;
    public $genre;

    public function __construct($title, $lenght, $poster, Genre $genre) 
    {
        $this->title = $title;
        $this->lenght = $lenght;
        $this->poster = $poster;
        $this->genre = $genre;
    }

    public function getDetail(){
        return "Titolo: $this->title - Genere: {$this->genre->name} - Durata: $this->lenght";
    }
}

$memento = new Movie('Memento', '2:30', 'http//...', 'Thriller');

var_dump($memento);