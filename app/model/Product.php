<?php
/**
* Class to create, list, delete and modify a product
*/
class Product
{
    private $db;

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

}
