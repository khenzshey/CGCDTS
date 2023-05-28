<?php
if (isset($_POST['admin_id'])) {
    $admin_id = $_POST['admin_id'];
    $last_name = $_POST['admin_lname'];
    $first_name = $_POST['admin_fname'];
    $middle_name = $_POST['admin_mname'];
    $department_id = $_POST['department_id'];
    $position = $_POST['admin_position'];

    require_once '../config/connection.php';


    $addAdmin = $admins->addAdmin($admin_id, $last_name, $first_name, $middle_name, $department_id, $position);

    if ($addAdmin) {
        header('location: ../superadmin/admin_user_management.php?add=success');
    } else {
        header('location: ../superadmin/admin_user_management.php?add=failed');
    }
}