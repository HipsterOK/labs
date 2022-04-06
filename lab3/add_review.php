<?php
    $mysqli = new mysqli("localhost", "a0656910_web_tech", "12345", "a0656910_web_tech");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $name = $_GET['name'];
    $email = $_GET['email'];
    $comments = $_GET['comments'];

    $result = $mysqli->query(
        "INSERT INTO reviews SET name='$name', email='$email', comments='$comments'"
    );
?>