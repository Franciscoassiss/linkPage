<?php
/**
* Class to create, list, delete and modify a product
*/
class Product
{
    private $db;
    private $id;
    private $wishList = array();

    function __construct()
    {
        $this->db = new Database();
    }

    public function allProducts()
    {
        $products = $this->db->pdo->query(
            "SELECT * FROM product"
        );
        return $products;
    }

    public function registeringProduct()
    {
        $insert = $this->db->pdo->prepare(
            "INSERT INTO product (name, description, image, quantity, value) 
            VALUES (:name, :description, :image, :quantity, :value)"
        );

        $insert->bindParam(':name', $_POST['name']);
        $insert->bindParam(':description', $_POST['area']);
        $insert->bindParam(':image', $_POST['image']);
        $insert->bindParam(':quantity', $_POST['quantity']);
        $insert->bindParam(':value', $_POST['value']);

        try{
            $insert->execute();
            return true;
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            die();
        }
    }

    public function deleteProduct()
    {
        $result = $this->db->pdo->prepare("DELETE FROM product WHERE id = :id");
        $result->bindParam(':id', $_GET['id']);
        try{
            $result->execute();
            return true;
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            die();
        }
    }

    public function selectProduct()
    {
        $product = $this->db->pdo->query(
            "SELECT * FROM product WHERE id = ".$_GET['id']
        );
        return $product;
    }

    public function editProduct()
    {
        $insert = $this->db->pdo->prepare(
            "UPDATE product SET 
            name = :name, 
            description = :description,
            value = :value,
            quantity = :quantity,
            image = :image
            WHERE id = :id"
        );

        $insert->bindParam(':name', $_POST['name']);
        $insert->bindParam(':description', $_POST['area']);
        $insert->bindParam(':value', $_POST['value']);
        $insert->bindParam(':quantity', $_POST['quantity']);
        $insert->bindParam(':image', $_POST['image']);
        $insert->bindParam(':id', $_GET['id']);

        try{
            $insert->execute();
            return true;
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            die();
        }
    }

    public function addWish()
    {
        if (isset($_SESSION['user'])) {
            $this->id = $_GET['id'];

            $product = $this->db->pdo->query(
                "SELECT * FROM product WHERE id = ". $this->id
            );

            if ($product->rowCount() == 1) {
                foreach ($product as $key) {
                    $this->wishList['id'] = $key['id'];
                    $this->wishList['name'] = $key['name'];
                    $this->wishList['value'] = $key['value'];
                    $this->wishList['image'] = $key['image'];
                }
                $_SESSION['wishList'][$this->id] = $this->wishList;
            }
        }
        else{
            header('location: ?view=login');
        }
    }

    public function removeToWish()
    {
        $this->id = $_GET['id'];
        if (isset($_SESSION['wishList'][$this->id])) {
            unset($_SESSION['wishList'][$this->id]);
            header("location: ?view=listaDesejos&model=product");
            return true;
        }
        return false;
    }
}
