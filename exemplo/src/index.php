<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("banco_dados", "root", "example", "agenda");

$result = $mysqli->query("SELECT * FROM pessoa");
foreach ($result as $row) {
    echo "ID: " . $row['id'];
    echo " nome: " . $row['nome'] . "<br />";
}


echo "Conectou...";
