<?php

class Admin
{

    private $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addAdmin($admin_lname, $admin_fname, $admin_mname, $department_id, $admin_position)
    {
        try {
            $sql = "INSERT INTO admins (last_name, first_name, middle_name, department_id, position) 
            VALUES (:last_name, :first_name, :middle_name, :department_id, :position)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':last_name', $admin_lname);
            $stmt->bindParam(':first_name', $admin_fname);
            $stmt->bindParam(':middle_name', $admin_mname);
            $stmt->bindParam(':department_id', $department_id);
            $stmt->bindParam(':position', $admin_position);
            $stmt->execute();

            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
?>