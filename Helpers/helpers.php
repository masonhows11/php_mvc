<?php

function site_url($route)  
{
    return $_ENV['BASE_URL'] . $route;
}

function asset_url($route)  
{
    return site_url("assets/".$route);
}

function random_element($array){
    shuffle($array);
    return array_pop($array);
}

function view($path){
    $path = str_replace('.','/',$path);
    $view_full_path = BASE_PATH . "resources/views/$path.php";
    include_once $view_full_path;

}


