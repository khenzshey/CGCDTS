<?php

class Add_Document
{
    private $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getDocument()
    {
        try {

            $sql = "SELECT * FROM document";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getDocumentById($id)
    {
        try {

            $sql = "SELECT * FROM document WHERE id = $id";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function addDocument($doc_num, $doc_title, $office_name, $doc_status, $remarks)
    {
        try {
            $sql = "INSERT INTO document(doc_num, doc_title, office_name, doc_status, remarks) VALUES (:doc_num, :doc_title, :office_name, :doc_status, :remarks)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindparam(':doc_num', $doc_num);
            $stmt->bindparam(':doc_title', $doc_title);
            $stmt->bindparam(':office_name', $office_name);
            $stmt->bindparam(':doc_status', $doc_status);
            $stmt->bindparam(':remarks', $remarks);
            $stmt->execute();

            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function editDocument($id, $doc_num, $doc_title, $office_name, $doc_status, $remarks)
    {
        try {
            $sql = "UPDATE document SET doc_num = :doc_num, doc_title = :doc_title, office_name = :office_name, doc_status = :doc_status, remarks = :remarks WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindparam(':doc_num', $doc_num);
            $stmt->bindparam(':doc_title', $doc_title);
            $stmt->bindparam(':office_name', $office_name);
            $stmt->bindparam(':doc_status', $doc_status);
            $stmt->bindparam(':remarks', $remarks);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    /*
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
*/

}
