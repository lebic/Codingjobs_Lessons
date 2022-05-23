<?php
class Animal
{
    protected $name;
    private $legs;
    private $color;
    protected $gender;

    public function __construct($n, $l, $c, $g)
    {
        $this->name = $n;
        $this->legs = $l;
        $this->color = $c;
        $this->gender = $g;
    }

    public function __toString()
    {
        return "Name :" . $this->name . "<br>" .
            "Legs :" . $this->legs . "<br>" .
            "Color :" . $this->color . "<br>" . "Gender :" . $this->gender . "<br> <hr>";
    }
}
