<?php
#require_once('function/database.php');
require_once('function/HijriDate/hijri.class.php');

$titleMappings = [
    "home" => "الصفحة الرئيسية",
];
$titleMappings1 = [
    "login" => "connexion",
];
$base_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/';
if (empty($_GET)) {
    $title = "الصفحة الرئيسية";
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
    switch ($url[0]) {
        case "home":
            include 'pages/home.php';
            break;

        case "api":
            if (empty($url[1])) {
                $data = ["status" => "error", "message" => "API not found"];
                header('Content-Type: application/json; charset=utf-8');
                echo json_encode($data);
            } elseif ($url[1] == "adkar") {
                require "assets/json/adkar/adkar.json";
            }
            break;

        case "surat":
            if (isset($url[1]) && is_numeric($url[1])) {
                $surat = $url[1];
                include 'pages/quran/surat.php';
            } else {
                header('Location: ' . $base_url);
            }
            break;
            case "hadiths":
            if (isset($url[1]) && !empty($url[1]) && isset($url[2]) && !empty($url[2])) {
                $collection_name = $url[1];
                $book_number = $url[2];  
                include 'pages/hadiths/hadith_book.php';
            }elseif(isset($url[1]) && !empty($url[1])){
                $collection_name = $url[1];
                include 'pages/hadiths/hadith_collection.php';
            }else{
                include 'pages/hadiths/hadiths.php';
            }
            break;
        case "kitab":
            include 'pages/quran/kitab.php';
            break;
        case "asmaa":
            include 'pages/asmaa-husna/asmaa.php';
            break;
        case "adkar":
            include 'pages/adkar/adkar.php';
            break;
            case "contact":
            include 'pages/contact/contact.php';
            break;

        default:
        include 'pages/home.php';
            break;
    }
}
