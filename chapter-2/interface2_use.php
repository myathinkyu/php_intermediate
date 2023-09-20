<?php

interface sheInterface{
    public function setWeapon($weapon);
}

class Index implements sheInterface{
    private $weapon;
    public function setWeapon($weapon)
    {
        $this -> weapon = $weapon;
    }
    public function killNow()
    {
        echo "killing enemy with " . $this -> weapon;
    }
}


$obj = new Index;
$obj -> setWeapon("knife");
$obj -> killNow();

?>