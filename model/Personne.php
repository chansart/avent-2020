<?php 
    require_once("Connexion.php");
    class Personne extends Connexion 
    {
        public function create($_nom, $_prenom, $_email, $_mdp)
        {
            $requete = "INSERT INTO users (user_nom,user_prenom,user_email,user_mdp) VALUES (:nom,:prenom,:email,:mdp)";      

            $tabChamps= array(
                ":nom" => $_nom,
                ":prenom"=>$_prenom,
                ":email"=>$_email,
                ":mdp"=>$_mdp
            );

            $this->execute($requete, $tabChamps);
        }

        public function userId($_email)
        {
            $requete = "SELECT `user_id` FROM users WHERE user_email = :email";

            $tabChamps = array(
                ":email" => $_email
            );
            return $this->execute($requete, $tabChamps);
        }


        public function infosConnexion($_email)
        {
            $requete = "SELECT  user_mdp,user_nom, user_prenom, user_email FROM users WHERE user_email = :email";

            $tabChamps = array(
                ":email" => $_email
            );
            return $this->execute($requete, $tabChamps);
        }

        public function deleteJoueur($_id)
        {
            $requete = "DELETE FROM `joueurs` where `joueurs`.`joueur_id`= :id";
            $tabChamps = array(
                ":id" => $_id
            );
            $this->execute($requete, $tabChamps);
        }
    }
?>