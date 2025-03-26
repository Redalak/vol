<?php

namespace repository;

class VolRepository
{
    public function recupererVol(){

        $vols = [];
        $bdd = new Bdd();
        $datebase = $bdd ->getBdd();
        $req = $datebase->prepare('SELECT * FROM vol');
        $req->execute();
        $volBdd = $req->fetchAll();
        foreach($volBdd as $volBdd){
            $vols[] = new $vol([
                'id$vol' => $volBdd['id_$vol'],
                'heureDeDepart' => $volBdd['heureDeDepart'],
                'heureDeArrivee' => $volBdd['heureDeArrivee'],
                'villeArrivee' => $volBdd['villeArrivee'],
                'idAvion' => $volBdd['idAvion'],
                '$prix' => $volBdd['$prix'],
            ]);
        }
        return $vols;
    }

}