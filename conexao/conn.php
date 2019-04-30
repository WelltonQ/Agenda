<?php

function pdo () {
    $db = new \PDO('mysql:host=localhost;dbname=minha_agenda;', 'root', '');
    return $db;
}