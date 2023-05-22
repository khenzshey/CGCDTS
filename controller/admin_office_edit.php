<?php
if (isset($_POST['edit_office'])) {
    $office_id = $_POST['office_id'];
    $office_name = $_POST['office_name'];
    $office_desc = $_POST['office_desc'];

    require_once '../config/connection.php';
    $updateOffice = $office->editOffice($office_id, $office_name, $office_desc);

    if ($updateOffice) {
        header('location: ../superadmin/office_management.php?edit=success');
    } else {
        header('location: ../superadmin/office_management.php?edit=failed');
    }
}