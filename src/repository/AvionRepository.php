<?php

namespace repository;

use modele\Avion;

class AvionRepository
{

    public function recupererAvions(){
        $avion = [];
        $bdd = new \Bdd();
        $datebase = $bdd ->getBdd();
        $req = $datebase->prepare('SELECT * FROM avion');
        $req->execute();
        $avionBdd = $req->fetchAll();
        foreach($avionBdd as $avionBdd){
            $avion[] = new Avion([
                'idAvion' => $avionBdd['id_avion'],
                'nom' => $avionBdd['nom'],
                'refModele' => $avionBdd['ref_modele'],

            ]);
        }
        return $avion;

}

public function deleteAvion(Avion $avion){
    $bdd = new \Bdd();
    $database=$bdd->getBdd();
    $req = $database->prepare("DELETE FROM avion WHERE id_avion = :id_avion");
    $req->execute(array(
        "id_avion"=>$avion->getIdAvion()
    ));
    return $avion;
}
public function recupererInfoUniqueAvion(Avion $avion){
    $bdd = new \Bdd();
    $database = $bdd->getBdd();
    $req = $database->prepare('SELECT * FROM avion WHERE id_avion = :id_avion');
    $req->execute(array(
        "id_avion" => $avion->getIdAvion()
    ));
    $avionBdd = $req->fetch();
    return new Avion([
        'idAvion' => $avionBdd['id_avion'],
        'nom' => $avionBdd['titre'],
        'refModele' => $avionBdd['ref_modele'],

    ]);

}
public function updateAvion(Avion $avion) {
    $bdd = new \Bdd();
    $database = $bdd->getBdd();
    $req = $database->prepare('UPDATE avion SET nom= :nom, ref_modele = :ref_modele WHERE id_avion = :id_avion');
    $avion = $req->execute([
        'id_avion' => $avion->getIdAvion(),
        'nom' => $avion->getNom(),
        'refModele' => $avion->getrefModele(),

    ]);
    return $avion;
}
public function nvAvion(Avion $avion) {
    $bdd = new \Bdd();
    $database = $bdd->getBdd();
    $req = $database->prepare('INSERT INTO avion (nom,ref_modele ) VALUES (:nom, :ref_modele, )');
    $req->execute([
        'nom' => $avion->getNom(),
        'ref_modele' => $avion->getRefModele(),


    ]);
    return $avion;
}
}