<?php

session_start();
$contador = isset($_SESSION['contagem']) ? $_SESSION['contagem'] : 0;
$contador = (int) $contador;
$contador++;

$_SESSION['contagem'] = $contador;

echo $contador;
