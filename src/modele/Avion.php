<?php

namespace modele;

class Avion
{
    private $idAvion;

    private $nom;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    private $refModele;

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
    public function getModeleAvion()
    {
        return $this->modeleAvion;
    }

    /**
     * @param mixed $modeleAvion
     */
    public function setModeleAvion($modeleAvion)
    {
        $this->modeleAvion = $modeleAvion;
    }


    public function __construct($donnees){
        $this->hydrate($donnees);
    }

        private function hydrate(array $donnees) {
            foreach ($donnees as $key => $value) {
                $method = 'set'.ucfirst($key);


                if (method_exists($this, $method)) {

                    $this->$method($value);
                }
            }
        }



}