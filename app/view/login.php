<div id="content">
    <h2>Login</h2>
    <?php
        if (!isset($_SESSION['user'])) {
            echo
            '
            <div id="message"></div>
            <form id="login" action="?view=login&model=user&action=login" method="post">
                <div class="description">Usuario:</div> <input type="text" name="user" id="user" class="text"><br \>
                <div class="description">Senha:</div> <input type="password" name="pass" id="pass" class="text"><br \>
                <input type="submit" name="login" id="submit" value="Login" \>
            </form>';
        }
        else{
            echo "<h1>".$_SESSION['user']."</h1> 
            <p>Você já está logado ^^, se quiser sair da sua conta clique 
            <a href='?view=login&model=user&action=logout'>aqui</a></p>";
        }
        print_r($this->params);
    ?>
</div>