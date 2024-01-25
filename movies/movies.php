<?php

class Movie
{
    public $filmCover;
    public $originalTitle;
    public $genre;
    public $language;
    public $plot;

    public function __construct($_filmCover, $_originalTitle, $_genre, $_language, $_plot)
    {
        $this->filmCover = $_filmCover;
        $this->originalTitle = $_originalTitle;
        $this->genre = $_genre;
        $this->language = $_language;
        $this->plot = $_plot;
    }


    public function getFilmCover()
    {
        return $this->filmCover;
    }

    public function getOriginalTitle()
    {
        return $this->originalTitle;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getPlot()
    {
        return $this->plot;
    }
}