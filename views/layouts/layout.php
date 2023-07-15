<?php
session_start();

$name_session = $_SESSION['name'];
$id_session = $_SESSION['user_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="?module=user&action=create">Inscription</a></li>
            <?php if(!isset($_SESSION['user_id'])) { ?>
                <li><a href="?module=login&action=index">Log in</a></li>
            <?php } else { ?>
                <li><a href="?module=article&action=create">Article</a></li>
                <li><a href="#"><?= $name_session ?></a></li>
                <li><a href="?module=user&action=logout">Log out</a></li>
            <?php } ?>
        </ul>    
    </nav>
    <main>
        <?php echo $content; ?>
    </main>
</body>
</html>
