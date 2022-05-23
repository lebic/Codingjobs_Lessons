<?php
class Robot
{
    private $identifier;
    private $color;

    public function __construct($i, $c)
    {
        $this->identifier = $i;
        $this->color = $c;
    }
    public function __toString()
    {
        return "Identifier :" . $this->identifier . "<br>" .

            "Color :" . $this->color . "<br>";
    }

    public function Work()
    {
        echo $this->identifier . 'works ';
    }


    public function NotTalk()
    {
        echo 'bip bip boup';
    }
}
