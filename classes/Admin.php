<?php

class Admin
{
    private $conn;
    private $office;

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAdmins()
    {
        try {
            $sql = "SELECT * FROM admin a INNER JOIN department_offices do ON a.department = do.id WHERE a.status = 'active'";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getAdminById($id)
    {
        try {
            $sql = "SELECT * FROM admin WHERE admin_id = $id AND status = 'active'";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function addAdmin($admin_id, $lname, $fname, $mname, $department_id, $position, $status)
    {
        try {
            $sql = "INSERT INTO admin (admin_id, lname, fname, mname, department, position, status) 
            VALUES (:admin_id, :lname, :fname, :mname, :department, :position, :status)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':admin_id', $admin_id);
            $stmt->bindParam(':lname', $lname);
            $stmt->bindParam(':fname', $fname);
            $stmt->bindParam(':mname', $mname);
            $stmt->bindParam(':department', $department_id);
            $stmt->bindParam(':position', $position);
            $stmt->bindParam(':status', $status);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    public function getAdminInfo($position)
    {
        try {
            $sql = "SELECT admin_id, lname, fname, mname, department FROM admin  WHERE position = :position";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    // public function addAdmin($admin_id ,$last_name, $first_name, $middle_name, $department_id, $position)
    // {
    //     try {

    //             $sql = "INSERT INTO admin (admin_id, last_name, first_name, middle_name, department, position, status) VALUES (:admin_id, :last_name, :first_name, :middle_name, :department, :position, 'active')";
    //             $stmt = $this->conn->prepare($sql);
    //             $stmt->bindParam(':admin_id', $admin_id);
    //             $stmt->bindParam(':last_name', $last_name);
    //             $stmt->bindParam(':first_name', $first_name);
    //             $stmt->bindParam(':middle_name', $middle_name);
    //             $stmt->bindParam(':department', $department_id);
    //             $stmt->bindParam(':position', $position);
    //             $stmt->execute();

    //             return true;

    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //         return false;
    //     }
    // }

    // private function getDepartmentById($department_id)
    // {
    //     try {
    //         $sql = "SELECT * FROM department_offices WHERE id = $department_id";
    //         $result = $this->conn->query($sql);
    //         return $result->fetch(PDO::FETCH_ASSOC);
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //         return false;
    //     }
    // }

    //     private function getOfficeByDepartmentId($department_id)
//     {
//         try {
//             $sql = "SELECT * FROM department_offices WHERE id = $department_id";
//             $result = $this->conn->query($sql);
//             return $result->fetch(PDO::FETCH_ASSOC);
//         } catch (PDOException $e) {
//             echo $e->getMessage();
//             return false;
//         }
//     }

    // public function deactivateAdmin()
    // {
    // }
}

?>