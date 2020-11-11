<?php 
    if(isset($_SESSION["color"])){
        echo '<header style="background-color:'.$_SESSION["color"].'">';
    }else{
        echo '<header style="background-color:#601632">';
    }
?>
      <nav>
      <?php 
    if(isset($_SESSION["nom"],$_SESSION['prenom']))
    {
        echo "<p>Bienvenue<span class='bold'> ".$_SESSION["prenom"]." ".$_SESSION["nom"]."</span></p>";
    }else{
        echo "<p></p>";
    }
?>
      
        <ul>
    


    <?php 
            if(isset($_SESSION["nom"],$_SESSION["prenom"]))
            {
                echo '
                <li id="compte"><a href="?section=moncompte">Mon compte</a></li>
                <li id="deconnexion"><a href="?section=deconnexion">Déconnexion</a></li>';
            }
            else 
            {
                echo '<li id="accueil"><a href="?section=accueil">Accueil</a></li>
                <li id="connexion"><a href="?section=connexion">Se connecter</a></li>';
            }
        ?>
        </ul>
    </nav>
</header>