<?php

class Checkbox
{
    private $name;
    private $value;
    private $chkd;
    public function __construct($name, $val)
    {
        $this -> name = $name;
        $this -> value = $val;
        $this -> chkd = isset($_GET[$this -> name]) ? 'checked' : '';
    }

    public function __toString()
    {
        $chk = '<input type="checkbox" name="'.$this -> name.'" value="'. $this -> value .'" '. $this->chkd.'>';
        return $chk;
    }
}