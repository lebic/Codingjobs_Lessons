<?php

class HtmlString
{
    public $string;

    public function __construct($s)
    {
        $this->string = $s;
    }


    public function setString($newString)
    {
        if (is_string($newString))
            $this->string = $newString;
        else
            echo "Must be a string";
    }

    public function getString()
    {
        return $this->string;
    }

    public function getBoldString()
    {
        echo "<b>" . $this->string . "</b>";
    }
    public function getItalicBoldString()
    {
        echo "<b> <i>" . $this->string . "</i> </b>";
    }
}
