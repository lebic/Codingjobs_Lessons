<?php

abstract class Adventurers
{
    public $name;
    public $healthPoints;
    public $defPoints;
    public $atkPoints;
    public $warCry;
    public $race;
    public $equipment;
    public $speed;

    public function __construct($n, $r, $hp, $atk, $def, $e)
    {
        $this->name = $n;
        $this->race = $r;
        $this->healthPoints = $hp;
        $this->atkPoints = $atk;
        $this->defPoints = $def;
        $this->warCry = "Attaaaaaack!";
        $this->speed = 10;
        $this->equipment = $e;

        if ($this->race == 'Orc')
            $this->warCry = "wwouogrouroulou mlll !!";
    }



    //GETTERS
    public function getType()
    {
        return $this->race;
    }
    public function getEquipment()
    {
        return $this->equipment;
    }

    // dependency injection
    public abstract function attack($opponent);
    public abstract function usePower();

    public function add_equipment($equip)
    {
        $this->equipment = $equip;
    }

    public function remove_equipment()
    {
        $this->equipment = null;
    }

    public function display_equipment()
    {
        echo $this->equipment;
    }

    public function __toString()
    {
        return "NAME :" .  $this->name . "<br>" .
            "RACE:" . $this->race . "<br>" .
            "HP :" . $this->healthPoints . "<br>" .
            "ATK POINTS :" . $this->atkPoints . "<br>" .
            "DEF POINTS :" . $this->defPoints . "<br> " .
            "EQUIPEMENT : <br>" . $this->equipment;
    }
}
