<?php
class UtilisateurDAO extends PDO
{          
        //Vérifie le statut de l'utilisateur //
        public static function verification($mail, $unMdp)
        {
            $requetePrepa = DBConnex::getInstance()->prepare("SELECT Jeton FROM utilisateur WHERE Mail = :mail and mdp = :mdp");
            $requetePrepa->bindParam(":mail", $mail);
            $md5 = hash('md5', $unMdp);


            $requetePrepa->bindParam(":mdp", $md5);
            $requetePrepa->execute();

            return $requetePrepa->fetch()[0];
        }

        public static function lire($jeton) 
        {   
            $requetePrepa = DBConnex::getInstance()->prepare("SELECT * FROM utilisateur WHERE jeton = :jeton");
            $requetePrepa->bindParam(":jeton", $jeton);
            $requetePrepa->execute();
            
            $liste = $requetePrepa->fetch();
    
            if(!empty($liste)){
                $unUtilisateur = new Utilisateur();
                $unUtilisateur->hydrate($liste);
                return $unUtilisateur;
            }
        }

        public static function lire2($mail) 
        {   
            $requetePrepa = DBConnex::getInstance()->prepare("SELECT * FROM utilisateur WHERE mail = :mail");
            $requetePrepa->bindParam(":mail", $mail);
            $requetePrepa->execute();
            
            $liste = $requetePrepa->fetch();
    
            if(!empty($liste)){
                $unUtilisateur = new Utilisateur();
                $unUtilisateur->hydrate($liste);
                return $unUtilisateur;
            }
        }

        public static function sel($mail)
        {
            $requetePrepa = DBConnex::getInstance()->prepare("SELECT sel FROM utilisateur WHERE mail = :mail");
            $requetePrepa->bindParam(":mail", $mail);
            $requetePrepa->execute();
          
            return $requetePrepa->fetch()[0];
        }

        public static  function Jeton($jeton,$mail) 
        {
            $requetePrepa = DBConnex::getInstance()->prepare("UPDATE utilisateur SET jeton= :jeton where mail = :mail");
            
            $requetePrepa->bindParam( ":jeton",$jeton);
            $requetePrepa->bindParam( ":mail",$mail);

            $requetePrepa->execute();
        }

    //////////////////////////////////Vérification de la présence du de l'email dans la BDD//////////////////////////////////////////////////


    public static function verificationMail($mail)
    {       
            $requetePrepa = DBConnex::getInstance()->prepare("select id from utilisateur where mail = :mail ");
                        
            $requetePrepa->bindParam( ":mail",$mail);

            $requetePrepa->execute();   
            
            $id = $requetePrepa->fetch();

            return $id[0];
    }
 
}