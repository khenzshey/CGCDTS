<?php
class Accounts
{
    private $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function makeUserAccount($admin_id, $username, $password, $role_id, $position, $status)
    {
        try {
            $sql = "INSERT INTO accounts (admin_id, username, password, role_id, position, status) VALUES (:admin_id, :username, :password, :role_id, :position, :status)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':admin_id', $admin_id);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':role_id', $role_id);
            $stmt->bindParam(':position', $position);
            $stmt->bindParam(':status', $status);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getStatus()
    {
        try {
            $sql = "SELECT * FROM accounts WHERE status = 'active' ";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getAccountId($account_id)
    {
        try {
            $sql = "SELECT * FROM accounts WHERE account_id = $account_id";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getUsername($username)
    {
        try {
            $sql = "SELECT * FROM accounts WHERE username = $username";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getRoleId($role_id)
    {
        try {
            $sql = "SELECT * FROM accounts WHERE role_id = $role_id";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    public function login($username, $password)
    {
        try {
            $sql = "SELECT * FROM accounts WHERE username = :username AND password = :password";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                if ($user["status"] == "active") {
                    session_start();
                    $_SESSION["account_id"] = $user["account_id"];
                    $_SESSION["username"] = $user["username"];
                    $_SESSION["role_id"] = $user["role_id"];
                    $this->redirectUser($user["role_id"]);
                } else {
                    echo "User is deactivated.";
                }
            } else {
                echo "Invalid username or password.";
            }
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

    }

    public function redirectUser($role)
    {
        session_write_close(); // Close the session before redirecting

        switch ($role) {
            case "1":
                header("location: ../superadmin/index.php");
                exit();
            case "2":
                header("location: ../admin/index.php");
                exit();
            case "3":
                header("location: ../employees/index.php");
                exit();
            default:
                echo "Invalid role.";
                exit();
        }
    }

}
?>