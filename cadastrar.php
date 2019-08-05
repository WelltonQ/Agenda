<?php require_once './template/header.php';
?>

<style type="text/css">
div#corpo-form {
    width: 420px;
    margin: 270px auto 0px auto;
}

input#input-index, button#button-index {
    width: 400px;
    margin: 5px;
    border-radius: 30px;
    border: 1px solid black;
    font-size: 12pt;
    padding: 5px 10px;
    border: none;
    outline: none;
}

body#corpo-login {
    background-image: url("parede.png");
    background-size: cover;
    background-position: 50% 80%;
}

body#corpo-login h1 {
    text-align: center;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
}

a#a {
    color: white;
    text-decoration: none;
    text-align: center;
    display: block;
}

a#a:hover {
    text-decoration: underline;
}
</style>
<?php
    if (isset($_SESSION['menssagem'])) {
    echo $_SESSION['menssagem'];
    unset($_SESSION['menssagem']);
    }
?>
<body id="corpo-login">
<div id="corpo-form">
    <form action="cadastrar_final.php" method="post">
        <h1>Cadastrar</h1>
        <input id="input-index" type="email" name="email_usuario" placeholder="Email">
        <input id="input-index" type="password" name="senha_usuario" autocomplete="off" placeholder="Senha">
        <input id="input-index" type="password" name="conf_senha_usuario" autocomplete="off" placeholder="Confirmar Senha">
        <button id="button-index" type="submit" class="btn btn-primary">
            Criar
        </button>
        <a id="a" href="index.php">Já sou cadastrado!</a>
    </form>
</div>
</body>

<?php require_once './template/footer.php'; ?>