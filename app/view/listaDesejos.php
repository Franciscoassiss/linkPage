<div id="content">
    <h2>Lista de Desejos</h2>
    <?php
    if (isset($_SESSION['wishList']) and $_SESSION['wishList'] != array()) {
        foreach ($_SESSION['wishList'] as $row) {
            echo "
                <div class='carrinho'>
                    <img src='../../images/{$row['image']}' />
                    Produto: {$row['name']} <br>
                    Preço: R$ {$row['value']} <br>
                    <br><br>
                    <a href='?view=loja&model=product'>
                        <input type='button' value='Visitar a Loja' class='button'>
                    </a>
                    <a href='?view=listaDesejos&model=product&action=removeToWish&id={$row['id']}'>
                        <input type='button' value='Remover da lista' class='button'>
                    </a>
                </div>
            ";
        }
    }
    else{
        echo "
            <div>
                Não há itens na lista de desejos
            </div>
        ";
    }
    ?>
</div>