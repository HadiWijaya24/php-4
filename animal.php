<?php 
 

class Animal {

    // property
    public $name = "shaun";
    public $legs = "2";
    public $cold_bloded = "false";

    // method set

    public function get_name()
    {
        return $this->name;
    }

    public function get_legs()
    {
        return $this->legs;
    }

    public function get_cold_bloded()
    {
        return $this->cold_bloded;
    }

}



?>