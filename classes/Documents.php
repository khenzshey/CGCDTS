<?php

class Documents
{
    private $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getDocuments()
    {
        try {

            $sql = "SELECT * FROM document_list";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getDocumentById($id)
    {
        try {

            $sql = "SELECT * FROM document_list WHERE id = $id";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}