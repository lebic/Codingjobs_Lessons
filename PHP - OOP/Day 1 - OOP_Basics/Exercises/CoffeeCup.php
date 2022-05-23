<?php

class CoffeeCup
{

    private $quantity;
    private $volume;
    private $brand;
    private $temperature;


    //CONSTRUCT

    public function __construct($v, $b, $t)
    {

        $this->quantity = $v;
        $this->volume = $v;
        $this->brand = $b;
        $this->temperature = $t;
    }



    //GETTER

    public function get_quantity()
    {
        return $this->quantity;
    }

    public function get_brand()
    {
        return $this->brand . '<br>';
    }

    public function get_temperature()
    {
        return $this->temperature . '<br>';
    }


    // SETTER


    public function setVolume($newVolume)
    {
        // Make sure the volume is a number
        if (is_integer($newVolume))
            $this->volume = $newVolume;
        else
            echo 'Quantity must be a string <br>';
    }


    // Methods

    public function sip($q)
    {
        if (($this->quantity) < ($this->volume)) {
            $this->quantity = 0;
        } else {
            $remain = $this->quantity - $q;
            $this->quantity = $remain;
            return 'Remain ' . $remain . 'cl of coffee <br>';
        }
    }

    public function refill()
    {
        if ($this->quantity == $this->volume) {
            return 'Mug is already full <br>';
        } else {
            $this->quantity = $this->volume;

            return 'Mug full again :' . $this->quantity . 'cl <br>';
        }
    }
    public function reHeat($t)
    {
        $newTemperature = $this->temperature + $t;
        $this->temperature = $newTemperature;

        if ($newTemperature > 100) {
            return 'Woops, the coffee just boiled and evaporate! <br>';
        } else {

            return 'Coffee has been heat up to ' . $this->temperature . '°C <br>';
        }
    }
    public function coolDown($t)
    {
        $newTemperature = $this->temperature - $t;
        $this->temperature = $newTemperature;

        if ($newTemperature < 0) {
            return 'Sorry, I froze your coffee';
        }
        return 'Coffee has been cool down to ' . $this->temperature . '°C <br>';
    }


    //Display Class

    public function __toString()
    {
        if (($this->quantity) <= ($this->volume)) {
            return "Quantity : $this->quantity cl<br>
        Volume : $this->volume cl <br>
        Brand : $this->brand<br>
        Temperature : $this->temperature °c <br>
        <hr>";
        } else {
            return "You poured too much coffee in your cup, that sucks <br>";
        }
    }
}
