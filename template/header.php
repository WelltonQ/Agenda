<?php
define('DISE', DIRECTORY_SEPARATOR);
$paths = $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'];
$explodir = explode("/", $paths);
$pathok = $explodir[0] . DISE . $explodir[1] . DISE . $explodir[2] . DISE . $explodir[3] . DISE;
include_once $pathok . "vendor" . DISE . "autoload.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="<?= base_url('assets/node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">

</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url(); ?>">Agenda</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../navbar/">Default</a></li>
                    <li><a href="../navbar-static-top/">Static top</a></li>
                    <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="<?= base_url('logount.php'); ?>">Sair<span class="sr-only">(current)</span></a></li>
                </ul>
                
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>