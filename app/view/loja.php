<div id="content">
    <h2>Loja</h2>
    <p>
        Os melhores produtos a venda (Exceto a triforce)!
    </p>
    <?php
    $products = $param->allProducts();
    foreach ($products as $row) {
    echo
        '<form class="produto" action="?view=carrinho&model=carrinho&action=addToCart&id='.$row["id"].'" method="post">
            <img src="../../images/'.$row['image'].'" />
            <span>'.$row['name'].'</span>
            <div>
                '.$row['description'].'<br><br> <strong>R$ '.
                $row['value'].'</strong>
            </div>
            <input type="submit" class="button . buy" name="buy" value="Comprar">
            <input type="number" name="quantity" class="quantity" value="1" min="1" max="'.$row["quantity"].'">
            <label>qtd:</label>
            <a href="?view=listaDesejos&model=product&action=addWish&id='.$row["id"].'">
                <input type="button" class ="button . wish" name="addWish" id="addWish" Value="Desejar">
            </a>';
            
            if (isset($_SESSION['id']) and $_SESSION['id'] == 1) {
                echo '
                    <br>
                    <a href="?view=editProduct&model=product&id='.$row["id"].'">
                        <input type="button" class="button" name="edit" id="edit" value="Editar">
                    </a>
                    <a href="?view=loja&model=product&action=deleteProduct&id='.$row["id"].'">
                        <input type="button" class="button" name="delete" id="delete" value="Excluir"/>
                    </a>
                ';
            }
        echo '</form>';
    }
    ?>
</div>