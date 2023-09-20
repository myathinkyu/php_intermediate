<?php

interface GameRules{
    public function createGameScene();
    public function createVegetables();
    public function createHousing();
    public function createActor();
}

class Index implements GameRules{

    public function createGameScene()
    {
        echo "Hello I am create scene!<hr>";
    }
    public function createVegetables()
    {
        echo "Hello I am create vegetables!<hr>";
    }
    public function createHousing()
    {
        echo "Hello I am create housing!<hr>";
    }
    public function createActor()
    {
        echo "Hello I am create actor!<hr>";
    }

}

$game = new Index;
$game -> createGameScene();
$game -> createVegetables();
$game -> createHousing();
$game -> createActor();


?>