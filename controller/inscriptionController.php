<?php 
    // enregistrer le val des champs dans la db
    if(isset($_POST["nom"],$_POST["prenom"], $_POST["email"], $_POST["mdp"]))
    {
        if(trim($_POST["nom"]) !== "" && trim($_POST["prenom"]) !== ""){ 

            $nom = $_POST["nom"];
            $prenom=$_POST["prenom"];
            $email=$_POST["email"];
            $mdp=$_POST["mdp"];

            $p = new Personne();
            $p->create($_POST["nom"],$_POST["prenom"], $_POST["email"], $_POST["mdp"]);

        $_SESSION["nom"] = $_POST["nom"];
        $_SESSION["prenom"] = $_POST["prenom"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["nbrofcalendar"]=0;

        header("Location:?section=moncompte");
        }
    }


    // appeler la vue
    require_once("view/page/personne/inscription.php"); 
?>