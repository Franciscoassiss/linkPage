<div id="content">
    <h2>Carrinho</h2>
    <?php
    $price = 0;
    if (isset($_SESSION['cart']) and $_SESSION['cart'] != array()) {
        foreach ($_SESSION['cart'] as $row) {
            echo "
                <div class='carrinho'>
                    <img src='../../images/{$row['image']}' />
                    Produto: {$row['name']} <br>
                    Preço: R$ {$row['value']} <br>
                    Quantidade: {$row['quantity']}<br><br>
                    <a href='?view=carrinho&model=carrinho&action=removeToCart&id={$row['id']}'>
                        <input type='button' value='remover do carrinho' class='button'>
                    </a>
                </div>
            ";
            $price += $row['value'] * $row['quantity'];
        }
        echo "
            <p>
                <strong>total: R$ {$price}</strong>
            </p>
        ";
    }
    else{
        echo "
            <div>
                Não há itens no carrinho!
            </div>
        ";
    }
    ?>
</div>