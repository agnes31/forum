<?php

function article_model_list() {
    require(CONNEX_DIR);
    $sql = "SELECT article.id AS id, article.article AS article, article.titre AS titre, article.date AS date, article.user_id AS user_id, user.nom AS nom FROM article INNER JOIN user ON user.id = article.user_id order by date DESC";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connex);
    return $result;
}

function article_model_store($request) {
    require(CONNEX_DIR);
    foreach($request as $key=>$value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $id = $_SESSION['user_id'];
    $sql = "INSERT INTO article (titre, article, date, user_id) VALUES ('$titre', '$article', '$date', '$id')";

    $result = mysqli_query($connex, $sql);
    mysqli_close($connex);
}

function article_model_show($request) {
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $request['id']);
    $sql = "SELECT * FROM article WHERE id = '$id'";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_assoc($result);
    mysqli_close($connex);
    return $result;
}

function article_model_update($request) {
    require(CONNEX_DIR);
    foreach($_POST as $key=>$value) {
        $$key=mysqli_real_escape_string($connex, $value);
    }
    $sql = "UPDATE article SET titre = '$titre', article = '$article', date = '$date', user_id = '$userId' WHERE id = '$id'";
    $result = mysqli_query($connex, $sql);
    mysqli_close($connex);
}

function article_model_delete($request) {  
    require (CONNEX_DIR);
    foreach($_POST as $key=>$value){
        $$key=mysqli_real_escape_string($connex, $value);
    }
    $sql = "DELETE FROM article WHERE id = '$id'"; 
    $result = mysqli_query($connex, $sql);
    mysqli_close($connex);
}

?>
