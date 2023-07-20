<?php
    $path = $_SERVER['REQUEST_URI'];
    if($path == "/login"){
        $content = file_get_contents('views/login.html');
    }elseif($path == "/reg"){
        $content = file_get_contents("views/reg.html");
    }elseif($path == "/addArticle"){
        $content = file_get_contents("views/addArticle.html");
    }
    else{
        $content = "Такой не существует, ошибка 404";
    }

    require_once('template.php');