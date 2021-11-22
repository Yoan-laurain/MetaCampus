<?php
class Utilisateur
{
    use hydrate;
    private  $id;
    private  $Nom;
    private  $Prenom;
    private  $Mail;
    private  $mdp;
    private $Jeton;
    private $Sel;
    private $Prof;

    public function __construct()
    {} 

    public function getJeton()
    {
        return $this->Jeton;
    }

    public function setJeton($Jeton)
    {
        $this->Jeton = $Jeton;
    }

    public function getSel()
    {
        return $this->Sel;
    }

    public function setProf($Prof)
    {
        $this->Prof = $Prof;
    }

    public function getProf()
    {
        return $this->Prof;
    }

    public function setSel($Sel)
    {
        $this->Sel = $Sel;
    }

    
    public function getid()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function getPrenom()
    {
        return $this->Prenom;
    }

    public function getMail()
    {
        return $this->Mail;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setid($id)
    {
        $this->id = $id;
    }

    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;
    }

    public function setMail($Mail)
    {
        $this->Mail = $Mail;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

}