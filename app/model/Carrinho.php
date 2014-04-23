<?php
/**
* Class cart
*/
class Carrinho
{
    private $id;
    private $cart = array();

    function __construct()
    {
        $this->db = new Database();
    }

    public function addToCart()
    {   
        if (isset($_SESSION['user'])) {
            $this->id = $_GET['id'];

            $product = $this->db->pdo->query(
                "SELECT * FROM product WHERE id = ". $this->id
            );

            if ($product->rowCount() == 1) {
                foreach ($product as $key) {
                    $this->cart['id'] = $key['id'];
                    $this->cart['name'] = $key['name'];
                    $this->cart['value'] = $key['value'];
                    $this->cart['image'] = $key['image'];
                    $this->cart['quantity'] = $_POST['quantity'];
                }
                $_SESSION['cart'][$this->id] = $this->cart;
            }
        }
        else{
            header('location: ?view=login');
        }
    }

    public function removeToCart()
    {
        $this->id = $_GET['id'];

        if (isset($_SESSION['cart'][$this->id])) {
            unset($_SESSION['cart'][$this->id]);
            header("location: ?view=carrinho&model=carrinho");
            return true;
        }
        return false;
    }
}
