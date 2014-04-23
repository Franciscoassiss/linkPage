<?php
/**
* This class make login, logout, registering, editing, validation and delete a user
*/
class User
{
    private $db;
    
    function __construct()
    {
        $this->db = new Database();
    }

    public function registering()
    {
        $insert = $this->db->pdo->prepare("INSERT INTO user (name, user, pass) VALUES (:name, :user, :pass)");

        $insert->bindParam(':name', $_POST['name']);
        $insert->bindParam(':user', $_POST['user']);
        $insert->bindParam(':pass', md5($_POST['pass']));

        try{
            $insert->execute();
            header("location: ?view=login");
            return true;
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
            die();
        }        
    }

    public function verifyUser()
    {
        $verify = $this->db->pdo->prepare(
            "SELECT * FROM user WHERE
            user = :user LIMIT 1"
        );

        $verify->bindParam($_POST['user']);
        $verify->execute();

        if ($verify->rowCount() == 1) {
            return false;
        }
        return true;
    }

    public function login()
    {
        $login = $this->db->pdo->prepare(
            "SELECT * FROM user WHERE 
            user = :user AND pass = :pass
            LIMIT 1"
        );
        $pass = md5($_POST['pass']);
        $login->bindParam(':user', $_POST['user']);
        $login->bindParam(':pass', $pass);
        $login->execute();

        if ($login->rowCount() == 1) {
            if(!isset($_SESSION)){
                session_start();
            }

            foreach ($login as $key) {
                $_SESSION['id'] = $key['id'];
                $_SESSION['user'] = $key['user'];
                $_SESSION['name'] = $key['name'];
                $_SESSION['pass'] = md5($key['pass']);
            }
            header("location: ?view=home");
            return true;
        }
        $message = "Usuário ou senha inválidos";
        return $message;
    }

    public function logout()
    {
        session_destroy();
        header("location: ?view=login");
    }

    public function validUser($user, $pass)
    {
        $valid = $this->db->pdo->prepare(
            "SELECT *
            FROM user WHERE 
            user = :user 
            AND pass = :pass
            LIMIT 1"
        );

        $valid->bindParam(':user', $user);
        $valid->bindParam(':pass', $pass);
        $valid->execute();

        if ($valid->rowCount() == 1) {
            return true;
        }
        return false;
    }

    public function editUser()
    {
        $pass = md5($_POST['pass']);
        ($_POST['newPass'] == "")? $newPass = $pass : $newPass = md5($_POST['newPass']);

        if ($this->validUser($_SESSION['user'], $pass)) {
            $update = $this->db->pdo->prepare(
                "UPDATE user SET 
                name = :name, 
                user = :user,
                pass = :newPass
                WHERE id = :id AND pass = :pass"
            );

            $update->bindParam(':name', $_POST['name']);
            $update->bindParam(':user', $_POST['user']);
            $update->bindParam(':newPass', $newPass);
            $update->bindParam(':pass', $pass);
            $update->bindParam(':id', $_SESSION['id']);    
            
            try{
                $update->execute();
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['pass'] = md5($newPass);
                header("location: ?view=editUser");
                return true;
            }
            catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                return false;
                die();
            }
        }
        else{
            echo "Senha Incorreta";
        }

    }

    public function deleteUser()
    {
        $result = $this->db->pdo->prepare("DELETE FROM user WHERE id = :id");
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

    public function listUsers()
    {
        $users = $this->db->pdo->query(
        "SELECT * FROM user"
    );
    return $users;
    }
}
