<?php
    class Cd
    {
        private $band_name;
        private $album_name;
        private $music_genre;


        function __construct($band_name, $album_name, $music_genre)
        {
          $this->band_name = $band_name;
          $this->album_name = $album_name;
          $this->music_genre = $music_genre;
        }

        function setBandName($new_band_name)
        {
            $this->band_name = $new_band_name;
        }

        function getBandName()
        {
            return $this->band_name;
        }

        function setAlbumName($new_album_name)
        {
            $this->album_name = $new_album_name;
        }

        function getAlbumName()
        {
            return $this->album_name;
        }

        function setMusicGenre($new_music_genre)
        {
            $this->music_genre = $new_music_genre;
        }

        function getMusicGenre()
        {
            return $this->music_genre;
        }

        function save()
        {
          array_push($_SESSION['list_of_cds'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_cds'];
        }
    }
?>
