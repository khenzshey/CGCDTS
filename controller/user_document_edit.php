<?php
if (isset($_POST['edit_document'])) {
    $document_id = $_POST['document_id'];
    $doc_num = $_POST['doc_num'];
    $doc_title = $_POST['doc_title'];
    $office_name = $_POST['office_name'];
    $doc_status = $_POST['doc_status'];
    $remarks = $_POST['remarks'];

    require_once '../config/connection.php';
    $updateDocument = $document->editDocument($document_id, $doc_num, $doc_title, $office_name, $doc_status, $remarks);

    if ($updateDocument) {
        header('location: ../user/add_document.php?edit=success');
    } else {
        header('location: ../user/add_document.php?edit=failed');
    }
}