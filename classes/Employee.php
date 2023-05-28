<?php

class Employee
{
    private $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getEmployees()
    {
        try {
            $sql = "SELECT * FROM employees em INNER JOIN department_offices do ON em.department = do.id WHERE em.status = 'active'";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getEmployeeById($id)
    {
        try {
            $sql = "SELECT * FROM employees WHERE id = $id AND status = 'active'";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function addEmployee($employee_id, $last_name, $first_name, $middle_name, $department_id, $position)
    {
        try {

            $sql = "INSERT INTO employees (employee_id, last_name, first_name, middle_name, department, position, status) VALUES (:employee_id, :last_name, :first_name, :middle_name, :department, :position, 'active')";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':employee_id', $employee_id);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':middle_name', $middle_name);
            $stmt->bindParam(':department', $department_id);
            $stmt->bindParam(':position', $position);
            $stmt->execute();

            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}

?>