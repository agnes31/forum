<div class="container">
    <div class="box form-box">  
    <header>Inscription</header>
        <form action="?module=user&action=store" method="post">
            <div class="field input">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="username">Nom d'utilisateur</label>
                <input type="email" name="username" id="email" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="birthday">Date de naissance</label>
                <input type="date" name="birthday" id="birthday" autocomplete="off" required>
            </div>

            <div class="field">
                <input type="submit" class="btn" name="submit" value="Inscription" required>
            </div>

            <div class="links">
                Déjà membre? <a href="?module=login&action=index">Login</a>
            </div>
        </form>
    </div>        
</div>  
