<?php
class Orc extends Adventurers
{
    public function attack($opponent)
    {
        if ((get_class($opponent) == 'Elf') && ($opponent->equipment->getType() !== "Shield")) {

            $opponent->healthPoints = $opponent->healthPoints - 50;

            echo $opponent->name . ' loses 50 HP <br>';
        }
    }
    public function usePower()
    {
        ($this->defPoints) + 20;
        ($this->atkPoints) - 10;
        echo  $this->name . 'use his power';
    }
}
