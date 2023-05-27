<?php

class History
{
    private $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getHistory()
    {
        try {

            $sql = "SELECT * FROM history";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getHistoryId($id)
    {
        try {

            $sql = "SELECT * FROM history WHERE id = $id";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}