<div class="container">
    <div class="box form-box"> 
        <header>Article</header> 
        <form class="form_article" action="?module=article&action=store" method="post">
            <div class="field input">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" autocomplete="off" required>
            </div>
            <div class="field input">
                <label for="article">Article</label>
                <textarea id="article" name="article" rows="7" cols="50"></textarea>   
            </div>
            <div class="field input">
                <label for="titre">Date</label>
                <input type="date" name="date" id="date" autocomplete="off" required>
            </div>
            <div class="field">
                <input type="submit" class="btn" name="submit" value="Soumettre" >
            </div>
        </form>
    </div>        
</div>  
