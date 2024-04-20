<?php
$ROOT_URL="/bshop";
$CONTENT_URL="$ROOT_URL/content";
$ADMIN_URL="$ROOT_URL/admin";
$SITE_URL="$ROOT_URL/site";
$hinhpath="$ROOT_URL/upload/";

function exist_param($fileldname){
    return array_key_exists($fileldname, $_REQUEST);
}

?>