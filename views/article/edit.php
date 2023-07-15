<div class="container">
    <div class="box form-box"> 
        <header>Article</header> 
        <form class="form_article" action="?module=article&action=update" method="post">
            <div class="field input">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" autocomplete="off" value="<?= $data['titre']; ?>" required>
            </div>
            <div class="field input">
                <label for="article">Article</label>
                <textarea id="article" name="article" rows="7" cols="50"><?= $data['article']; ?></textarea>   
            </div>
            <div class="field input">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" autocomplete="off" value="<?= $data['date']; ?>"required>
            </div>
            <input type="hidden" name="id" value="<?= $data['id']; ?>">
            <input type="hidden" name="userId" value="<?= $data['user_id']; ?>">
            <div class="field">
                <input type="submit" class="btn" name="submit" value="Sauvegarder">
            </div>
        </form>
    </div>
</div>
