<?php
class Human
{
    private $hairColor;
    private $gender;
    private $name;



    public function __construct($n, $hc, $g)
    {
        $this->name = $n;
        $this->hairColor = $hc;
        $this->gender = $g;
    }

    public function Work($words)
    {
        echo $words;
    }

    public function Talk($words)
    {
        echo $words;
    }

    public function __toString()
    {
        return "Name :" . $this->name . "<br>" .
            "Gender :" . $this->gender . "<br>" .
            "Hair Color :" . $this->hairColor . "<br>" . "Gender :" . $this->gender . "<br> <hr>";
    }
}
