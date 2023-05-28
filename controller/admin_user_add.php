<?php
if (isset($_POST['admin_lname'])) {
    $last_name = $_POST['admin_lname'];
    $first_name = $_POST['admin_fname'];
    $middle_name = $_POST['admin_mname'];
    $department_id = $_POST['department_id'];
    $position = $_POST['admin_position'];

    require_once '../config/connection.php';


    $addAdmin = $admins->addAdmin($last_name, $first_name, $middle_name, $department_id, $position);

    // if ($addAdmin) {
    //     header('location: ../admin/admin_management.php?add=success');
    // } else {
    //     header('location: ../admin/admin_management.php?add=failed');
    // }
}
?>