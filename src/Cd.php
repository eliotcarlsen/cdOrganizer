<?php
    class Cd
    {
        private $bandname;
        private $albumname;
        private $musicgenre;

        function __construct($bandname, $albumname, $musicgenre)
        {
          $this->bandname = $bandname;
          $this->albumname = $albumname;
          $this->musicgenre = $musicgenre;
        }

        function setBandName($newbandname)
        {
            $this->bandname = $newbandname;
        }

        function getBandName()
        {
            return $this->bandname;
        }

        function setAlbumName($newalbumname)
        {
            $this->albumname = $newalbumname;
        }

        function getAlbumName()
        {
            return $this->albumname;
        }

        function setMusicGenre($newmusicgenre)
        {
            $this->musicgenre = $newmusicgenre;
        }

        function getMusicGenre()
        {
            return $this->musicgenre;
        }

        function save()
        {
          array_push($_SESSION['list_of_cds'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_cds'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_cds'] = array();
        }
    }
?>
