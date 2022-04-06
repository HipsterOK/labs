<?php
    $mysqli = new mysqli("localhost", "a0656910_web_tech", "12345", "a0656910_web_tech");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $loaded = $_GET['loaded'];
    $need_to_load = $_GET['need_to_load'];

    $result = $mysqli->query(
        "SELECT  id, name, spec, pic FROM cars ORDER BY id DESC LIMIT $loaded, $need_to_load"
    );

    if ($result){
        while ($row = $result->fetch_array()){
            $id = $row['id'];
            $header = $row['name'];
            $text = $row['spec'];
            $image = $row['pic'];

            echo "<p>";
            echo "<table style='background-color:IndianRed'>";
            echo "<tr><th style='font-size:30px' colspan='1'>$header</th></tr>";
            echo "<tr>";
            echo "<td>";
            echo "<img width='250px' height='250px' src='$image' onclick=\"window.location.href='open_comments.php?id=$id'\">";
            echo "</td>";
            echo "<td>";
            echo $text;
            echo "</td>";
            echo "</tr>";
            echo "</table>";
            echo "</p>";
        }
    }
?>