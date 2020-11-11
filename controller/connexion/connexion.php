<?php 
// Vérifier si l'utilisateur existe
$messageMdp="";
    if(isset($_POST["email"], $_POST["mdpUser"]))
    {
        $messageMdp="";
        if($_POST['email']!="" && $_POST['mdpUser']!="")
        {
            $email =$_POST['email'];
            $mdpUser=$_POST['mdpUser'];
            $p = new Personne();
            $tabInfos = $p->infosConnexion($email);
            var_dump($tabInfos);
            if($tabInfos[0]['user_mdp'] == $mdpUser ){
                $_SESSION['nom'] = $tabInfos[0]["user_nom"];
                $_SESSION['prenom'] = $tabInfos[0]["user_prenom"];
                $_SESSION['email'] = $tabInfos[0]["user_email"];
                echo $_SESSION['nom'];
                echo $_SESSION['prenom'];
                $_SESSION["nbrofcalendar"]=0;
        
                header("Location:?section=moncompte");
            }else{
                $messageMdp="Cet utilisateur ou ce mot de passe n'est pas correct";

            }
        }
       
    }
                require_once("view/page/connexion/connexion.php");
?>