<?php
function user_controller_create(){
    render(VIEW_DIR.'/user/create.php');
}

function user_controller_store($request) {
    require_once(MODEL_DIR.'/user.php');
    user_model_store($request);
    header("Location: ?module=login&action=index");
    //print_r($request); GET - POST
}

function user_controller_logout() {
    session_destroy();
    header("Location: ?module=login&action=index");
}

?>
