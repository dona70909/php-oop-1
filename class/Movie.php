<?php 

    class Movie {
        
        private $title;
        private $genre;
        private $typeMovie;
        private $cover;


        function __construct($title,$genre,$typeMovie,$cover)
        {
            $this->title = $title;
            $this->genre = $genre;
            $this->typeMovie = $typeMovie;
            $this->cover = $cover;
        }

        /*  public function setTitle() {
            $this->title;
        }

        public function setGenre() {
            $this->genre;
        }

        public function setTypeMovie() {
            $this->typeMovie;
        } */

        public function getTitle() {
            echo $this->title;
        }

        public function getGenre() {
            echo $this->genre;
        }

        public function getTypeMovie() {
            echo $this->typeMovie;
        }

        public function getCover() {
            echo $this->cover;
        }
    }

    
?>

