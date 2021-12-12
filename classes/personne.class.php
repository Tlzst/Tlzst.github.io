<?php

class Personne
{
    public $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function getName()
    {
        return $this->name;
    }
}
