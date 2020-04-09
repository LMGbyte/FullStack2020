<?php

class Calculator
{
    // Inkapsuliacija – tai savybių ar metodų pasiekiamumo ribojimas.

    private $num_1;
    private $num_2;

    function __construct($num_1 = null, $num_2 = null)
    {
        $this->setBoth($num_1, $num_2);
    }

    public function sum()
    {
        return $this->num_1 + $this->num_2;
    }

    public function minus()
    {
        return $this->num_1 - $this->num_2;
    }

    public function multi()
    {
        return $this->num_1 * $this->num_2;
    }

    public function div()
    {
        if ($this->num_2 == 0) {
            return 0;
        }
        return $this->num_1 / $this->num_2;
    }

    public function pow()
    {
        if ($this->num_2 == 0) {
            return 0;
        }
        return $this->num_1 / $this->num_2;
    }

    public function setA($num)
    {
        $this->num_1 = $num;
    }

    public function setB($num)
    {
        $this->num_2 = $num;
    }

    public function getA()
    {
        return $this->num_1;
    }

    public function getB()
    {
        return $this->num_2;
    }

    public function setBoth($num_1, $num_2)
    {
        $this->setA($num_1);
        $this->setB($num_2);
    }
}