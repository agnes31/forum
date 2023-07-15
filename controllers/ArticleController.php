<?php

function article_controller_index() {
    require_once(MODEL_DIR.'/article.php');
    $data = article_model_list();
   
    //return print_r($data);
    render(VIEW_DIR.'/article/select.php', $data);
}

function article_controller_create() {
    render(VIEW_DIR.'/article/create.php');
}

function article_controller_store($request) {
    require_once(MODEL_DIR.'/article.php');
    article_model_store($request);
    header("Location: ?module=article&action=index");
}

function article_controller_show($request){
    //return print_r($request);
    require_once(MODEL_DIR.'/article.php');
    $data = article_model_show($request);
    //print_r($data);
    render(VIEW_DIR.'/article/edit.php', $data);
}

function article_controller_update($request) {  
    require_once(MODEL_DIR.'/article.php');
    article_model_update($request);  
    header("Location: ?module=article&action=index"); 
}

function article_controller_delete($request) {  
    require_once(MODEL_DIR.'/article.php');  
    article_model_delete($request);
    header("Location: ?module=article&action=index"); 
}

?>
