<?php

function login_controller_index() {
    render(VIEW_DIR.'/login/login.php');
}

function login_controller_authenticate($request) {
    require_once(MODEL_DIR.'/login.php');
    login_model_authenticate($request);
}

?>
