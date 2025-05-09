<?php

namespace modele;

class Reservation
{
    private $idReservation;
    private $refUser;
    private $refVol;

    private $prixBillet;

    /**
     * @return mixed
     */
    public function getRefUser()
    {
        return $this->refUser;
    }

    /**
     * @param mixed $refUser
     */
    public function setRefUser($refUser)
    {
        $this->refUser = $refUser;
    }

    /**
     * @return mixed
     */
    public function getRefVol()
    {
        return $this->refVol;
    }

    /**
     * @param mixed $refVol
     */
    public function setRefVol($refVol)
    {
        $this->refVol = $refVol;
    }

    /**
     * @return mixed
     */
    public function getPrixBillet()
    {
        return $this->prixBillet;
    }

    /**
     * @param mixed $prixBillet
     */
    public function setPrixBillet($prixBillet)
    {
        $this->prixBillet = $prixBillet;
    }
    private $dateReservation;

    /**
     * @return mixed
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * @param mixed $idReservation
     */
    public function setIdReservation($idReservation)
    {
        $this->idReservation = $idReservation;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

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
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * @param mixed $dateReservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;
    }

}