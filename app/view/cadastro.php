<div id="content">
    <h2>Cadastro</h2>
    <?php
    if (isset($this->params['result'])){
        echo "<div class='error2'>".$this->params['result']."</div>";
    }
    ?>
    <form id="cadastro" action="?view=cadastro&model=user&action=registering" method="post">
        <div class="description">Nome:</div> <input type="text" name="name" id="name" class="text"><br \>
        <div class="description">Usuario:</div> <input type="text" name="user" id="user" class="text"><br \>
        <div class="description">Senha:</div> <input type="password" name="pass" id="pass" class="text"><br \>
        <div class="description">Confirmar Senha:</div> <input type="password" name="pass_confirm" id="pass_confirm" class="text"><br \>
        <input type="submit" name"cadastrar" id="submit" value="Cadastrar">
    </form> 
</div>