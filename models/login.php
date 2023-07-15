<?php

function login_model_authenticate($request) {
    require(CONNEX_DIR);

    foreach($request as $key=>$value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($connex, $sql);
    $count =  mysqli_num_rows($result);

    // 2 la reponse  count == 1
    if ($count == 1) {
        //3 check password saisit = db
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        //var_dump($user);
        $dbPassword = $user['password'];
       
        //if(password_verify($password, $dbPassword)){      **METTRE PLUS TARD TROUVER PLACE
        if ($password == $dbPassword) {
 
            //session_regenerate_id();                      **METTRE PLUS TARD TROUVER PLACE
            //$salt = '@3agRTR&';                              **METTRE PLUS TARD TROUVER PLACE
            $_SESSION['finger_print'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'].$salt);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['nom'];

            header("Location: index.php");
        } else {
            header("Location: ?module=login&action=index&msg=2");
        }
    } else {
        header("Location: ?module=login&action=index&msg=1");
    }
}

?>