<?php

class user{
    Public $id;
    Public $nom;
    Public $prenom;
    Public $email;
    Public $mdp;

    function getId() {
    return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getEmail() {
        return $this->email;
    }
    
    function getMdp() {
        return $this->mdp;
    }

    function setId($id){
        $this->id = $id;
    }
    function getSid() {
        return $this->sid;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setMdp($mdp) {
        $this->mdp = $mdp;
    }
    function setSid($sid) {
        $this->sid = $sid;
    }

    public function hydrate($donnees){
        if(isset($donnees['id'])) {
            $this->id = $donnees['id'];}
            else {
                $this->id = '';
        }

        if(isset($donnees['nom'])) {
            $this->nom = $donnees['nom'];}
            else {
                $this->nom = '';
        }

        if(isset($donnees['prenom'])) {
            $this->prenom = $donnees['prenom'];}
            else {
                $this->prenom = '';
        }

        if(isset($donnees['email'])) {
            $this->email = $donnees['email'];}
            else {
                $this->email = '';
        }

        if(isset($donnees['mdp'])) {
            $this->mdp = $donnees['mdp'];}
            else {
                $this->mdp = '';
        }
        if(isset($donnees['sid'])) {
            $this->sid = $donnees['sid'];}
            else {
                $this->sid = '';
        }


    }

}