<?php 

    class Movie {
        
        private $title;
        private $genre;
        private $type;


        function __construct($title,$genre,$type)
        {
            $this->title = $title;
            $this->genre = $genre;
            $this->genre = $type;
        }

        public function setTitle() {
            $this->title;
        }

        public function setGenre() {
            $this->genre;
        }

        public function setType() {
            $this->type;
        }

        public function getTitle() {
            $this->title;
        }

        public function getGenre() {
            $this->genre;
        }

        public function getType() {
            $this->type;
        }
    }
?>