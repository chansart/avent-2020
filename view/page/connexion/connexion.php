<?php require_once("view/menu/menu.php");  ?>
<div class="container-inscription">
    <div class="p-i-flex flexContact">
        <div class="connexion-form w-30">
            <form method="post" id="formConnexion">
            <h2 class="titleContent">Connexion</h2>
                <label>E-mail:</label>
                <input type="text" name="email" required>
                <label>Mot de passe:</label>
                <input type="text" name="mdpUser" required>
                <button type="submit">Se connecter</button>
                <p class="bold msgErreur"><?= $messageMdp; ?></p>
                <p>Pas encore de compte? <span class="bold"> <a href="?section=inscription">Inscris-toi !</a> </span></p>
                
            </form>
        </div>
    </div>
</div>
<script src="public/js/scriptInscription.js"></script>
