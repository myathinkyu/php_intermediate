<?php

require_once "player.php";

class dependency_Injection{
    public function __construct()
    {
        $player = new player();
        $player -> setMusicPath("C:/Users/maybel/documents/music/");
        //$player -> playNow();
        $player -> setMusic("awayfromme.mp3");

        $this->playNow($player->getMusicPath(),$player->getMusic());
    }

    public function playNow($path,$music){
        echo "Playing " . $music . " from ". $path;
    }
}



new dependency_Injection;




?>