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



