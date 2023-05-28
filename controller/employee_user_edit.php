<?php
if (isset($_POST['edit_emp'])) {
    $id = $_POST['id'];
    $employee_id = $_POST['employee_id'];
    $last_name = $_POST['emp_lname'];
    $first_name = $_POST['emp_fname'];
    $middle_name = $_POST['emp_mname'];
    $position = $_POST['emp_position'];

    echo $id . " " . $employee_id . " " . $last_name . " " . $first_name . " " . $middle_name . " " . $position;

    require_once '../config/connection.php';

    $updateEmployee = $employee->editEmployee($id, $employee_id, $last_name, $first_name, $middle_name, $position);

    if ($updateEmployee) {
        header('location: ../employees/employee_management.php?edit=success');
    } else {
        header('location: ../employees/employee_management.php?edit=failed');
    }
}