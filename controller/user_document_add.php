<?php 

if(isset($_POST['doc_num'])){
    $doc_num = $_POST['doc_num'];
    $doc_title = $_POST['doc_title'];
    $office_name = $_POST['office_name'];
    $doc_status = $_POST['doc_status'];
    $remarks = $_POST['remarks'];

    require_once '../config/connection.php';

    $insertDocument = $document->addDocument($doc_num, $doc_title, $office_name, $doc_status, $remarks);


    if($insertDocument){
        header('location: ../user/add_document.php?add=success');
    }else {
        header('location: ../user/add_document.php?add=failed');
    }
}
