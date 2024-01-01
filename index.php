<?php
#require_once('function/database.php');
require_once('function/HijriDate/hijri.class.php');

$titleMappings = [
    "home" => "Accueil",
];
$titleMappings1 = [
    "login" => "connexion",
];
$base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/';
if (empty($_GET)) {
    $title = "Accueil";
    include 'pages/home.php';
} else {

    $url = explode("/", filter_var($_GET['url'], FILTER_SANITIZE_URL));
    if (isset($url[1]) && !is_numeric($url[1])) {
        $title = $titleMappings1[$url[1]] ?? "Default Title";
    } elseif (!empty($url[0])) {
        $title = $titleMappings[$url[0]] ?? "Default Title";
    } else {
        $title = "Default Title";
    }

    #var_dump($base_url,$url = explode("/", filter_var($_GET['url'],FILTER_SANITIZE_URL)));
    switch ($url[0]) {
        case "home":
            include 'pages/home.php';
            break;
        case "api":
        if(empty($url[1])){
            echo "url not found";
           
        }elseif($url[1] == "adkar"){
            require "assets/json/adkar/adkar.json";
        }
        break;
           
       
        default:
            include 'pages/errors/404.php';
            break;
    }
}
