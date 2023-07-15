<?php
$msg = null;
if(isset($_GET['msg'])){
    if($_GET['msg']==1){
        $msg = "Le nom d'utilisateur n'existe pas";
    } elseif($_GET['msg']==2){
        $msg = "Verifier le mot de passe";
    }
}
?>

<div class="container">
    <div class="box form-box">
    <header>Login</header> 
        <span><?= $msg; ?></span>
        <form action="?module=login&action=authenticate" method="post">  
            <div class="field input">
                <label for="username">Courriel</label>
                <input type="text" name="username" id="username" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Login" required>
            </div>
            <div class="links">
                Pas de compte? <a href="?module=user&action=create">Inscription</a>
            </div>
        </form>
    </div>
</div>
