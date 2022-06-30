<?php

function get_header(){
    include './components/layout/header.php';
}
function get_footer(){
    include './components/layout/footer.php';
}

function get_admin_header(){
    include './components/layout/dashboard_header.php';
}
function get_admin_footer(){
    include './components/layout/dashboard_footer.php';
}
function dd($data){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}