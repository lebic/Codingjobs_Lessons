<?php

class Equipment
{
    private $EquipmentName;
    private $type;
    private $ap;
    private $dp;
    private $atkBonus;
    private $defBonus;
    private $elementBonus;

    //CONSTRUCT

    public function __construct($n, $t, $ap, $dp, $ab, $db, $eb)
    {

        $this->EquipmentName = $n;
        $this->type = $t;
        $this->ap = $ap;
        $this->dp = $dp;
        $this->atkBonus = $ab;
        $this->defBonus = $db;
        $this->elementBonus = $eb;
    }
    //GETTER
    public function getType()
    {
        return $this->type;
    }
    //Display Class

    public function __toString()
    {

        return "Name : $this->EquipmentName <br>
         Type : $this->type <br>
         Attack points : $this->ap<br>
         Defense points : $this->dp <br>
         Attack bonus points : $this->atkBonus<br>
         Defense bonus points : $this->defBonus <br>
         Element bonus : $this->elementBonus <br>
         <hr>";
    }
}

$sword = new Equipment("Death Sword", "Sword", 10, 0, 5, 0, 'Frost'); // name, type, ap,dp, 5 atk bonus, 0 def bonus,  Element bonus;
$hammer = new Equipment("The Balduk", "Hammer", 15, 0, -5, 0, 'Fire');
$bow = new Equipment("The Piercing wind ", "Bow", 12, 0, -5, 0, 'Bleeding');
$axe = new Equipment("The head splitter ", "Axe", 14, 0, 6, 0, 'Bleeding');

$jewel = new Equipment("Grace Necklace", "Jewelry", 0, 0, 5, 10, 'Force field');
$bestshield = new Equipment("BDG", "Shield", 0, 15, 0, 5, 'Rock lift');
$armor = new Equipment("Peasant armor", "Armor", 0, 10, 0, 5, 'Basic protection');
