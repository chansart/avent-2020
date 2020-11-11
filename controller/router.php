<?php 
    // aiguilleur
    if(isset($_GET["section"]))
    {
        switch($_GET["section"])
        {
            case 'accueil':
                require_once("controller/accueilController.php");
                break;
            case 'connexion':
                require_once("controller/connexion/connexion.php");
                break;
            case 'inscription':
                require_once("controller/inscriptionController.php");
                break;
            case 'deconnexion':
                require_once("controller/deconnexionController.php");
                break;
            case 'moncompte':
                require_once("controller/moncompteController.php");
                break;
            case 'backgroundChoice':
                require_once("controller/backgroundChoiceController.php");
                break;
            case 'layoutChoice':
                require_once("controller/layoutChoiceController.php");
                break;
            case 'fillCalendar':
                require_once("controller/fillCalendarController.php");
                break;
            case 'myCalendar':
                require_once("controller/myCalendarController.php");
                break;

        }
    }
    else {
        require_once("view/page/personne/accueil.php");;
    }
?>