<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/registered_styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <?php require_once 'layout/registered_header.php' ?>

    <div class="wrapper">
        <div class="search">
            <input type="text" placeholder="Найдите слово" required spellcheck="false">
        </div>
        <p class="info-text">Введите существующее слово, чтобы получить часть речи, пример, синонимы и т. д.</p>
        <ul>
            <li class="word">
                <div class="details">
                    <p>__</p>
                    <span>_ _</span>
                </div>
                <i class="fas fa-volume-up"></i>
            </li>
            <div class="content">
                <li class="meaning">
                    <div class="details">
                        <p>Meaning</p>
                        <span>___</span>
                    </div>
                </li>
                <li class="example">
                    <div class="details">
                        <p>Example</p>
                        <span>___</span>
                    </div>
                </li>
                <li class="synonyms">
                    <div class="details">
                        <p>Synonyms</p>
                        <div class="list"></div>
                    </div>
                </li>
            </div>
        </ul>
    </div>

    <script src="js/dictionary.js"></script>

</body>

</html>