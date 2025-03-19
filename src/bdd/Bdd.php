<?php

class Bdd
{
    public function getBdd(){
        return new Bdd('mysql:host=localhost;dbname=vol;charset=utf8','root','');
}

}