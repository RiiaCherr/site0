<?php
    $articleId = $_GET['id'];
    $mysqli = new mysqli('localhost', 'root', '', 'blog0404');
    $mysqli->query("SELECT * FROM `articles` WHERE `id` = '$articles'");
    $article = $result->fetch_assoc();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Добавление статьи</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>footer>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Группа 0404</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ссылка</a>
                </li>
            </ul>
            <a href="login.html" class="btn btn-success me-3">Вход</a>
            <a href="reg.html" class="btn btn-success">Регистрация</a>
        </div>
    </div>
</nav>
<div class="container">
    <h2><?= $article['title'] ?></h2>
    <p><?= $article['article'] ?></p>
    <p><?= $article['author'] ?></p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>