<?php

class Bdd
{
    public function getBdd(){
        try {
            return new PDO('mysql:host=localhost;dbname=vol;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            die('Erreur de connexion : ' . $e->getMessage());
        }
    }
}
