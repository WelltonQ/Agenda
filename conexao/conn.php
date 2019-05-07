<?php

function pdo () {
    $db = new \PDO('mysql:host=localhost:3308;dbname=minha_agenda;', 'root', '');
    return $db;
}