<?php 

if(isset($_POST['office_name'])){
    $office_name = $_POST['office_name'];
    $office_desc = $_POST['office_desc'];

    require_once '../config/connection.php';

    $insertOffice = $office->addOffice($office_name, $office_desc);

    if($insertOffice){
        header('location: ../superadmin/office_management.php?add=success');
    }else {
        header('location: ../superadmin/office_management.php?add=failed');
    }
}