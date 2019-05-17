<?php require_once './template/header.php';

if (isset($_SESSION['usuario_logado'])) {
    header("location: ./admin.php");
}

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
        background-position: 50% 70%;
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
        <form method="post" action="">
            <h1>Entrar</h1>
            <input id="input-index" type="text" name="txtEmail" placeholder="Email">
            <input id="input-index" type="password" name="txtSenha" autocomplete="off" placeholder="Senha">
            <button id="button-index" type="submit" class="btn btn-primary">
                Acessar
            </button>
            <a id="a" href="cadastrar.php">Ainda não tem cadastro? <strong>Cadastre-se!</strong></a>
        </form>
    </div>
</body>
<?php

if (isset($_POST['txtEmail']) && !empty($_POST['txtEmail'])) {
    $email = trim($_POST['txtEmail']);
    $senha = trim($_POST['txtSenha']);
    if (login($email, $senha)) {
        $_SESSION['usuario_logado'] = login($email, $senha);
        header("location: ./admin.php");
    } else {
        echo "erro ao logar";
    }
}

?>

<?php require_once './template/footer.php'; ?>