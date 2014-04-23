<div id="content">
    <form id="edit" action="?view=editUser&model=user&action=editUser" method="post">
        <div class="description">nome:</div> <input type="text" name="name" id="name" class="text" value="<?php echo $_SESSION['name'];?>"><br \>
        <div class="description">usuario:</div> <input type="text" name="user" id="user" class="text" value="<?php echo $_SESSION['user'];?>"><br \>
        <div class="description">Senha Atual:</div> <input type="password" name="pass" id="pass" class="text"><br \>
        <div class="description">Nova Senha:</div> <input type="password" name="newPass" id="newPass" class="text"><br \>
        <div class="description">Confirme a Nova Senha:</div> <input type="password" name="confirmNewPass" id="confirmNewPass" class="text"><br \>
        <input type="submit" name"alterar" id="submit" value="Alterar">
    </form> 
</div>