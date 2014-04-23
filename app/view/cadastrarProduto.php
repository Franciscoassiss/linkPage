<div id="content">
<?php 
if ($_SESSION['id'] != 1) {
echo "<h1>Você não devia estar aqui</h1>";
die();
}
?>
<form id="cadastrarProduto" action="?view=loja&model=product&action=registeringProduct" method="post">
    <div class="description">Nome do Produto:</div> <input type="text" name="name" id="name" class="text"><br \>
    <div class="description">Descrição do Produto:</div> <textarea  cols="30" line="3" name="area" id="area" class="text"></textarea><br \>
    <div class="description">Valor do Produto:</div> <input type="text" name="value" id="value" class="text"><br \>
    <div class="description">Quantidade:</div> <input type="text" name="quantity" id="quantity" class="text"><br \>
    <div class="description">Nome da imagem .jpg:</div> <input type="text" name="image" id="image" class="text"><br \>
    <input type="submit" name"cadastrar" id="submit" value="Cadastrar">
</form> 
</div>