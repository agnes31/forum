<h2>Liste des articles</h2>
<table class="styled-table">
    <thead>
        <tr>    
            <th>Titre de l'article</th>
            <th>Article</th>
            <th>Date</th>
            <th>Utilisateur</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row) { ?>
            <tr>
                <td><?= $row['titre']; ?></td>
                <td><?= $row['article']; ?></td>
                <td><?= $row['date']; ?></td>  
                <td><?= $row['nom']; ?></td>
                <td>
                    <?php if ($row['user_id'] == $_SESSION['user_id']) { ?>
                    <div class="action">
                        <input type="button" class="btn" value="Modifier" onclick="window.location.href='?module=article&action=show&id=<?= $row['id']; ?>'"/>&nbsp;&nbsp;
                        <form action="?module=article&action=delete" method="post">
                            <input type="hidden" name="id" value="<?= $row['id']; ?>" >
                            <input type="submit" class="btn" name="submit" value="Supprimer"> 
                        </form>
                    </div>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php if (isset($_SESSION['user_id'])) { echo '<a href="?module=article&action=create">Ajouter</a>'; } ?>
