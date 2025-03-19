<?php

namespace modele;

class Avion
{
    private $idAvion;

    private $modelAvion;

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
    public function getModelAvion()
    {
        return $this->modelAvion;
    }

    /**
     * @param mixed $modelAvion
     */
    public function setModelAvion($modelAvion)
    {
        $this->modelAvion = $modelAvion;
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