<?php

function user_model_store($request) {
    require(CONNEX_DIR);
    foreach($request as $key=>$value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    //$password_hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO user (nom, username, password, birthday) VALUES ('$name', '$username', '$password', '$birthday')";
    //$sql = "Select id, cityName from city order by cityName";  verifier si marche 
    $result  = mysqli_query($connex, $sql);
    mysqli_close($connex);
}

?>