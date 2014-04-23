<div id="content">
    <h2>Editar Produto</h2>
    <?php
        if ($_SESSION['id'] != 1) {
            echo "<h1>Você não devia estar aqui</h1>";
            die();
        }

        foreach ($param->selectProduct() as $row) {
            echo
                '<div class="produto">
                    <img src="../../images/'.$row['image'].'" />
                    <span>'.$row['name'].'</span>
                    <div>
                        '.$row['description'].'<br> R$ '.
                        $row['value'].'
                    </div>
                    <a href="?view=loja&model=product">
                        <input type="button" class="button" value="Alterações Concluidas">
                    </a>
                </div>
                <form id="editProduct" method="post" action="?view=editProduct&model=product&action=editProduct&id='.$row["id"].'">
                    <div class="description">Nome do Produto:</div> <input type="text" name="name" id="name" class="text" value="'.$row['name'].'"><br \>
                    <div class="description">Descrição do Produto:</div> <textarea  cols="30" line="3" name="area" id="area" class="text">'.$row['description'].'</textarea><br \>
                    <div class="description">Valor do Produto:</div> <input type="text" name="value" id="value" class="text" value="'.$row['value'].'"><br \>
                    <div class="description">Quantidade:</div> <input type="text" name="quantity" id="quantity" class="text" value="'.$row['quantity'].'"><br \>
                    <div class="description">Nome da imagem:</div> <input type="text" name="image" id="image" class="text" value="'.$row['image'].'"><br \>
                    <input type="submit" class="button" name="editProduct" id="editProduct" Value="Alterar">
                </form>
            ';
        }
    ?>

</div>