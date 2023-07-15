<?php

function base_controller_index(){
    //echo 'Base';
    render(VIEW_DIR.'/base/welcome.php');
}

function base_controller_error(){
    //echo 'Base';
    render(VIEW_DIR.'/base/error.php');
}

?>