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
    private $Points;
    private $Golds;
    private $Telephone;
    private $Pseudo;

    public function __construct()
    {} 

    public function getPoints(){
        return $this->Points;
    }

    public function getTelephone(){
        return $this->Telephone;
    }

    public function setTelephone($Telephone){
        $this->Telephone = $Telephone;
    }

    public function getPseudo(){
        return $this->Pseudo;
    }

    public function setPseudo($Pseudo){
        $this->Pseudo = $Pseudo;
    }

    public function getGolds(){
        return $this->Golds;
    }

    public function setPoints($points){
        $this->Points = $points;
    }

    public function setGolds($golds){
        $this->Golds = $golds;
    }

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