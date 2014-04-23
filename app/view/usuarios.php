<div id="content">
    <?php
    if ($_SESSION['id'] != 1) {
        echo "<h1>Você não devia estar aqui</h1>";
        die();
    }
    foreach ($param->listUsers() as $key) {
        echo '
            <div class="user">
                Nome: '.$key['name'].' <br> Usuário: '.$key['user'].'<br><br>
                <a href="?view=usuarios&model=user&action=deleteUser&id='.$key["id"].'">
                    <input type="button" class="button" id="deleteUser" name="deleteUser" value="Excluir">
                </a>
            </div>
        ';
    } ?>
</div>