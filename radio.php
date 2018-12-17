<?php

class Radio
{
    private $name;
    private $value = [];
    private $lbl = [];
    private $mas = [];
    private $chkd;

    public function __construct($name, $mas = [])
    {
        $this -> name = $name;
        $this -> mas = $mas;
        foreach ($mas as $col)
        {
            $this -> value = $col[1];
            $this -> lbl = $col[0];
        }
        $this -> chkd = isset($_GET[$this-> value]) ? 'checked' : '';
    }

    public function addItem($colorName, $color)
    {
        $this -> mas[] = [$colorName, $color];
        foreach ($this -> mas as $col)
        {
            $this -> value = $col[1];
            $this -> lbl = $col[0];    
        }
    }

    public function __toString()
    {   $str='';
        foreach ($this -> mas as $col)
        {
            $str .= '<input type="radio" name="' . $this -> name . '" value="'.$this->value = $col[1].'" ' . $this->chkd . '><label>'.$this ->lbl = $col[0].'</label><br>';
        }
        
        return $str;
    }
}