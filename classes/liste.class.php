<?php

class Liste
{
    public $liste;
    public $cpt = 0;

    public function add(Personne $p)
    {
        $this->liste = array($this->cpt => $p);
        $this->cpt++;
    }

    public function remove(Personne $p)
    {
        if (in_array($p, $this->liste)) {
            unset($this->liste[array_search($p, $this->liste)]);
        }
    }

    public function removeAll()
    {
    }
}
