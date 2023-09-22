<?php

class player
{
    private $path;
    private $music;
    //constructor injection
    // public function __construct($path,$music)
    // {
    //     $this -> path = $path;
    //     $this -> music = $music;
    // }

    // public function playNow()
    // {
    //     echo "Playing " . $this-> music . " from ". $this->path;
    // }

    //setter injection
    public function setMusicPath($path)
    {
        $this -> path = $path;
    }

    public function setMusic($music)
    {
        $this -> music = $music;
    }

    public function getMusicPath(){
        return  $this -> path;
    }

    public function getMusic(){
        return  $this -> music;
    }
    
}

?>