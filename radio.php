<?php

class Radio
{
    private $name;
    private $mas = [];
    private $chkd;

    public function __construct($name, $mas = [])
    {
        $this -> name = $name;
        $this -> mas = $mas;
        $this -> chkd = isset($_GET[$this-> name]) ? $_GET[$this-> name] : '';
    }

    public function addItem($colorName, $color)
    {
        $this -> mas[] = [$colorName, $color];
    }

    public function __toString()
    {   $str='';
        foreach ($this -> mas as $col)
        {
            $ch = ($this->chkd==$col[1])?'checked':'';
            $str .= '<input type="radio" name="' . $this -> name . '" value="'.$this->value = $col[1].'" ' . $ch . '><label>'.$this ->lbl = $col[0].'</label><br>';
        }
        return $str;
    }

}