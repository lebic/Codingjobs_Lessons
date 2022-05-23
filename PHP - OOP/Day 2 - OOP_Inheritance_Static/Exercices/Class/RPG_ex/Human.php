<?php
class Human extends Adventurers
{
    public function attack($opponent)
    {
        if ($this->equipment->getType() == null) {
            $this->atkPoints = $this->atkPoints + 3;
            return $this->atkPoints . "has increased of +3";
        }
        $opponent->healthPoints = $opponent->healthPoints - $this->atkPoints;
    }
    public function usePower()
    {
        $this->healthPoints = $this->healthPoints + 20;
        echo  $this->name . ' use his power : +20 HP <br>';
    }
}
