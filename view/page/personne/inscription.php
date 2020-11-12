<?php require_once("view/menu/menu.php");  ?>
<div class="container-inscription">
        <div class="connexion-form w-30">
            <form method="post" id="formInscription">
            <h2 class="titleContent">Inscription</h2>
                <label>Nom:</label>
                <input type="text" name="nom" required>
                <label>Prénom:</label>
                <input type="text" name="prenom" required>
                <label>Adresse e-mail:</label>
                <input type="text" name="email" required>
                <label>Mot de passe:</label>
                <input id="iptMdp" type="password" name="mdp" required>
                <button type="submit">S'inscrire</button>
                <p>Déjà inscris? <span class="bold"> <a href="?section=connexion">Connecte-toi !</a> </span></p>
            </form>
        </div>
    </div>
</div>
<script src="public/js/scriptInscription.js"></script>