<?php
class Elf extends Adventurers
{
    public function attack($opponent)
    {

        if ($this->equipment->getType() == 'Sword') {
            $this->atkPoints = $this->atkPoints + 2;
            return $this->atkPoints . "has increased of 2";
        }
        $opponent->healthPoints = $opponent->healthPoints - $this->atkPoints;
    }
    public function usePower()
    {
        $this->speed = $this->speed + 3;
        echo  $this->name . 'use his power';
    }
}
