<?php
if (isset($_POST['submit'])) {
    $admin_id = $_POST['admin_id'];
    $lname = $_POST["admin_lname"];
    $fname = $_POST["admin_fname"];
    $mname = $_POST["admin_mname"];
    $department = $_POST["department_id"];
    $position = $_POST["admin_position"];
    $status = $_POST["admin_status"];
    $role_id = $_POST["role_id"];
    $username = $_POST["admin_uname"];
    $password = $_POST["admin_pass"];

    require_once '../config/connection.php';

    // Add admin information to the admin table
    $result = $admins->addAdmin($admin_id, $lname, $fname, $mname, $department, $position, $status);

    if ($result) {
        // Get the inserted admin's information
        $admin_info = $admins->getAdminInfo($admin_id);

        // Create a user account for login
        $accounts->makeUserAccount($admin_id, $username, $password, $role_id, $position, $status);

        // Redirect to a success page or perform other actions
        header('location: ../superadmin/admin_user_management.php?add=success');
    } else {
        // Handle the case when adding admin information fails
        header('location: ../superadmin/admin_user_management.php?add=failed');
    }
}