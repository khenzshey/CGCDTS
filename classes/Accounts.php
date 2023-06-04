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

}
?>