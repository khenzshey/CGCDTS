<?php

class Admin
{
    private $conn;
    private $office;

    function __construct($conn)
    {
        $this->conn = $conn;
        this->office = $office;
    }

    public function getAdmins()
    {
        try {
            $sql = "SELECT * FROM admin WHERE status = 'active'";
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
            $sql = "SELECT * FROM admin WHERE id = $id AND status = 'active'";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function addAdmin($last_name, $first_name, $middle_name, $department_id, $position)
    {
        try {
            // Get department name and office details based on department_id
            $department = $this->getOfficeById($department_id);
            $office = $this->getOfficeById($department_id);

            if ($department && $office) {
                $department_name = $department['department_name'];
                $office_name = $office['office_name'];

                $sql = "INSERT INTO admin (last_name, first_name, middle_name, department, office, position, status) VALUES (:last_name, :first_name, :middle_name, :department, :office, :position, 'active')";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':last_name', $last_name);
                $stmt->bindParam(':first_name', $first_name);
                $stmt->bindParam(':middle_name', $middle_name);
                $stmt->bindParam(':department', $department_name);
                $stmt->bindParam(':office', $office_name);
                $stmt->bindParam(':position', $position);
                $stmt->execute();

                return true;
            } else {
                echo "Invalid department selected.";
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

//      function getDepartmentById($department_id)
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
}

?>