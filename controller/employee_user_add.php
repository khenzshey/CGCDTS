<?php
if (isset($_POST['emp_id'])) {
    $employee_id = $_POST['emp_id'];
    $last_name = $_POST['emp_lname'];
    $first_name = $_POST['emp_fname'];
    $middle_name = $_POST['emp_mname'];
    $department_id = $_POST['department_id'];
    $position = $_POST['emp_position'];

    require_once '../config/connection.php';


    $addEmployee = $employee->addEmployee($employee_id, $last_name, $first_name, $middle_name, $department_id, $position);

    if ($addEmployee) {
        header('location: ../employees/employee_management.php?add=success');
    } else {
        header('location: ../employees/employee_management.php?add=failed');
    }
}