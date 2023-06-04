<?php

class Offices
{
    private $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getUserRole()
    {
        try {

            $sql = "SELECT * FROM user_role";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function getDeptHeadRole()
    {
        try {

            $sql = "SELECT * FROM user_role where role_id = '2'";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getOffices()
    {
        try {

            $sql = "SELECT * FROM department_offices WHERE status = 'active'";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getOfficeById($id)
    {
        try {

            $sql = "SELECT * FROM department_offices WHERE id = $id AND status = 'active'";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function addOffice($department_name, $department_description)
    {
        try {
            $sql = "INSERT INTO department_offices (department_name, department_description, status) VALUES (:department_name, :department_description, 'active')";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindparam(':department_name', $department_name);
            $stmt->bindparam(':department_description', $department_description);
            $stmt->execute();

            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function editOffice($id, $department_name, $department_description)
    {
        try {
            $sql = "UPDATE department_offices SET department_name = :department_name, department_description = :department_description WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindparam(':department_name', $department_name);
            $stmt->bindparam(':department_description', $department_description);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function deactivateAccount($id)
    {
        try {
            $sql = "UPDATE department_offices SET status = 'inactive' WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function availableTickets()
    {
        try {

            $sql = "SELECT * FROM tickets WHERE payment_status IS NULL";
            $result = $this->conn->query($sql);
            $availableTicket = $result->rowCount();
            return $availableTicket;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function purchasedTickets()
    {
        try {

            $sql = "SELECT * FROM tickets WHERE payment_status = 1";
            $result = $this->conn->query($sql);
            $purchasedTickets = $result->rowCount();
            return $purchasedTickets;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function raffleWinners()
    {
        try {

            $sql = "SELECT * FROM raffle_winner";
            $result = $this->conn->query($sql);
            $raffleWinners = $result->rowCount();
            return $raffleWinners;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function eligibleParticipants()
    {
        try {

            $sql = "SELECT * FROM tickets WHERE ticket_status = 0 AND payment_status IS NOT NULL";
            $result = $this->conn->query($sql);
            $eligibleParticipants = $result->rowCount();
            return $eligibleParticipants;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function recentWinner()
    {
        try {

            $sql = "SELECT * FROM raffle_winner ORDER BY id DESC LIMIT 3";
            $result = $this->conn->query($sql);
            return $result;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}