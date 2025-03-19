<?php

namespace modele;

class Vol
{
    private $idVol;
    private $heureDeDepart;
    private $heureDeArrivee;
    private $villeArrivee;
    private $idAvion;
    private $prix;

    /**
     * @return mixed
     */
    public function getIdVol()
    {
        return $this->idVol;
    }

    /**
     * @param mixed $idVol
     */
    public function setIdVol($idVol)
    {
        $this->idVol = $idVol;
    }

    /**
     * @return mixed
     */
    public function getHeureDeDepart()
    {
        return $this->heureDeDepart;
    }

    /**
     * @param mixed $heureDeDepart
     */
    public function setHeureDeDepart($heureDeDepart)
    {
        $this->heureDeDepart = $heureDeDepart;
    }

    /**
     * @return mixed
     */
    public function getHeureDeArrivee()
    {
        return $this->heureDeArrivee;
    }

    /**
     * @param mixed $heureDeArrivee
     */
    public function setHeureDeArrivee($heureDeArrivee)
    {
        $this->heureDeArrivee = $heureDeArrivee;
    }

    /**
     * @return mixed
     */
    public function getVilleArrivee()
    {
        return $this->villeArrivee;
    }

    /**
     * @param mixed $villeArrivee
     */
    public function setVilleArrivee($villeArrivee)
    {
        $this->villeArrivee = $villeArrivee;
    }

    /**
     * @return mixed
     */
    public function getIdAvion()
    {
        return $this->idAvion;
    }

    /**
     * @param mixed $idAvion
     */
    public function setIdAvion($idAvion)
    {
        $this->idAvion = $idAvion;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
   
}