<?php

class Select
{
    private $options = [];
    private $name;
    private $value; // значение выбранного пункта списка

    public function __construct($n)
    {
        $this -> name = $n;
        $this -> value = isset($_GET[$this -> name]) ? $_GET[$this -> name] : null;
    }

    public function __toString()
    {
        $str = '<select name = "' . $this -> name . '">';
        foreach($this -> options as $opt)
        {
            $str .='<option value="'. $opt[1] .'" '. (($opt[1] == $this -> value) ? 'selected' : '') .'>'.$opt[0].'</option>';
        }
        $str .= '</select>';
        return $str;
    }

    public function addItem($optionText, $optionValue)
    {
        $this -> options[] = [$optionText, $optionValue];
    }

    public function getValue()
    {
        return $this -> value;
    }
}