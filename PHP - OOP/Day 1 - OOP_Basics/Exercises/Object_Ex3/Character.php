<?php
class Character
{

    private $name;
    private $hp;
    private $ap;
    private $dp;
    private $warCry;
    private $type;
    public $inventory = array(
        "Armor" => null,
        "Weapon1" => null,
        "Weapon2" => null,
        "Object1" => null,
        "Object2" => null,
        "Object3" => null,
        "Object4" => null,
    );

    //CONSTRUCT

    public function __construct($n, $t, $hp, $ap, $dp, $wc, $i)
    {

        $this->name = $n;
        $this->type = $t;
        $this->hp = $hp;
        $this->ap = $ap;
        $this->dp = $dp;
        $this->warCry = $wc;
        $this->inventory = $i;
    }

    //SETTERS
    public function setWarcry($newWarcry)
    {
        if ($this->type == 'Orc') {
            $this->warCry = "wwouogrouroulou mlll !!";
        } else {
            $this->warCry = $newWarcry;
            return $this->warCry;
        }
    }
    public function setInventory($newEquipment)
    {
        //CHECK IF THIS IS AN ARMOR

        if ($inventory[0] = null && ($newEquipment->type == getType("Armor"))) {
            $inventory["Armor"] = $newEquipment;
            return $this->inventory;
        }
        //CHECK IF THIS IS A PRIMARY WEAPON
        if ($inventory[1] = null && (($newEquipment->type == getType("Sword")) || ($newEquipment->type == getType("Hammer")) || ($newEquipment->type == getType("Bow")) || ($newEquipment->type == getType("Axe")))) {

            $inventory["Weapon1"] = $newEquipment;

            return $this->inventory;
        }

        //CHECK IF THIS IS A SECONDARY WEAPON
        if ($inventory[2] = null && (($newEquipment->type == getType("Sword")) || ($newEquipment->type == getType("Hammer")) || ($newEquipment->type == getType("Bow")) || ($newEquipment->type == getType("Axe")))) {

            $inventory["Weapon2"] = $newEquipment;
            return $this->inventory;
        }

        //CHECK IF THIS IS AN OBJECT
        if ($inventory[3] = null && ($newEquipment->type == getType("Object"))) {
            $inventory["Object1"] = $newEquipment;
            return $this->inventory;
        }
    }

    //METHODS 

    public function displayEquipment()
    {
        echo  $this->inventory;
    }

    public function addEquipment($newEquipment)
    {
        if (($this->equipment) !== null) {
            return 'Here is your :' . $this->equipment;
        }
        return  $this->equipment = $newEquipment;
    }

    public function removeEquipment()
    {
        $this->equipment = null;
        return $this->equipment;
    }


    //Display Class

    public function __toString()
    {

        return "$this->name <br>
         Type : $this->type <br>
         Health points : $this->hp<br>
         Attack points : $this->ap<br>
         Defense points : $this->dp <br>
         Warcry : $this->warCry <br>
         <hr>
         $this->name 'S EQUIPMENT : <br> $this->inventory <br>
         <hr><hr>";
    }
}
