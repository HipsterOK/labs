<?php
    $mysqli = new mysqli("localhost", "a0656910_web_tech", "12345", "a0656910_web_tech");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $result = $mysqli->query(
        "SELECT name, email, comments FROM reviews"
    );

    if ($result){
        while ($row = $result->fetch_array()){
            $name = $row['name'];
            $email = $row['email'];
            $text = $row['comments'];

            echo "<h2>";
            echo sprintf("%s - %s",$name, $email);
            echo "</h2>";
            echo "<p style='font-size: 20px;'>";
            echo $text;
            echo "</p>";
        }
    }
?>