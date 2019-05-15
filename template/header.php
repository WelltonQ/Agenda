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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agenda</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="<?= base_url('assets/node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        td {
            word-wrap: break-word;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
    </style>

</head>

<body>
    <?php if (isset($_SESSION['usuario_logado']->id_usuario) && !empty($_SESSION['usuario_logado']->id_usuario)) : ?>

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">

                <div class="navbar-header">
                    <a class="navbar-brand" href="<?= base_url(); ?>">Agenda</a>
                    <form class="navbar-form navbar-left" method="POST" id="form-pesquisa" action="">
                        <div class="input-group">
                            <input id="pesquisa" name="pesquisa" type="text" class="input-search form-control" placeholder="Pesquisar contato...">
                        </div>
                    </form>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="<?= base_url('logount.php'); ?>">Sair<span class="sr-only">(current)</span></a></li>
                    </ul>
                </div>

            </div>
        </nav>

        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <?php endif; ?>