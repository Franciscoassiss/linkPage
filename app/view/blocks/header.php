<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Link Rinku</title>
        <script type="text/javascript" src= <?php $_SERVER['DOCUMENT_ROOT']; ?>"js/jquery.min.js"></script>
        <script type="text/javascript" src= <?php $_SERVER['DOCUMENT_ROOT']; ?>"js/jquery.validate.js"></script>
        <script type="text/javascript" src= <?php $_SERVER['DOCUMENT_ROOT']; ?>"js/script.js"></script>
        <link rel="stylesheet" type="text/css" href=<?php $_SERVER['DOCUMENT_ROOT'] ?>"css/style.css">
    </head>
    <body>
    <div id="tudo">
        <div id="session">
        <?php 
        if (isset($_SESSION['user'])) {
            echo "
                Bem vindo
                <ul>
                <li>
                <a>{$_SESSION['name']}</a>
                    <ul>
                        <li><a href='?view=editUser'>Editar Conta</a></li>
                        <li><a href='?view=listaDesejos&model=user'>Lista de Desejos</a></li>
                        <li><a href='?view=historico&model=user'>Histórico de Compras</a></li>";
                        if ($_SESSION['id'] == 1) {
                            echo "
                                <li><a href='?view=cadastrarProduto'>Cadastrar Produto</a></li>
                                <li><a href='?view=usuarios&model=user'>Usuários</a></li>
                            ";
                        }
            echo "
                        <li><a href='?view=home&model=user&action=logout'>Sair</a></li>
                    </ul>
                </li>
                </ul>
            ";
        }
        else{
            echo "Bem vindo <ul><li><a href='?view=login'>Faça o Login</a></li></ul>";
        }
        ?>
        </div>
        <a href="?view=home"><span id="homeLink"></span></a>
        <div id="navbar">
            <ul>
                <div id="left">
                    <li><a href="?view=historia">História</a></li>
                    <li><a href="?view=personagens">Personagens</a></li>
                    <?php if (!isset($_SESSION['user'])) {
                        echo "<li><a href='?view=cadastro'>Cadastro</a></li>";
                    }?>
                </div>
                <div id="right">
                    <?php if (!isset($_SESSION['user'])) {
                    echo "<li><a href='?view=login'>Login</a></li>";
                    }?>
                    <li><a href="?view=loja&model=product">Loja</a></li>
                    <li><a href="?view=carrinho&model=carrinho">Carrinho</a></li>
                </div>
            </ul>
        </div>
