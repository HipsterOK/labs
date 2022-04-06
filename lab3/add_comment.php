<?php
    $mysqli = new mysqli("localhost", "a0656910_web_tech", "12345", "a0656910_web_tech");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $id = $_GET['id'];
    $text = $_GET['description'];

    $result = $mysqli->query("INSERT INTO comments SET text='$text', id='$id'");
?>