<?php require_once '../includes/sidebar_header.php';

if (isset($_GET['id'])) {
    $emp_id = $_GET['id'];
    $employeeData = $employee->getEmployeeById($emp_id);
}
?>

<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Edit Employee Information</h1>
        <form action="../controller/employee_user_edit.php" method="POST">
            <div class="ofc-card d-flex justify-content-start flex p-2 gap-3">
                <div class="ofc-item w-50">
                    <div class="card">
                        <div class="card-body">
                            <input type="hidden" name="id" value="<?php echo $employeeData['emp_id']; ?>">
                            <div class="form-group m-0 m-2">
                                <input type="text" name="employee_id" class="form-control"
                                    value="<?php echo $employeeData['employee_id']; ?>" readonly>
                            </div>
                            <div class="form-group m-0 m-2">
                                <input type="text" name="emp_lname" class="form-control"
                                    value="<?php echo $employeeData['last_name']; ?>">
                            </div>
                            <div class="form-group m-0 m-2">
                                <input type="text" name="emp_fname" class="form-control"
                                    value="<?php echo $employeeData['first_name']; ?>">
                            </div>
                            <div class="form-group m-0 m-2">
                                <input type="text" name="emp_mname" class="form-control"
                                    value="<?php echo $employeeData['middle_name']; ?>">
                            </div>
                            <div class="form-group m-0 m-2">
                                <input type="text" name="emp_department" class="form-control"
                                    value="<?php echo $employeeData['department_name']; ?>" readonly>
                            </div>
                            <div class="form-group m-0 m-2">
                                <input type="text" name="emp_position" class="form-control"
                                    value="<?php echo $employeeData['position']; ?>">
                            </div>
                            <button type="submit" name="edit_emp"
                                class="btn btn-outline-success m-0 m-2 d-rounded py-2 px-3">Update</button>
                            <button type="button" class="btn btn-outline-danger m-0 m-2 d-rounded py-2 px-3"
                                onclick="goBack()">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>


<script>
    function goBack() {
        var confirmation = confirm("Are you sure you want to cancel? Any unsaved changes will be lost.");
        if (confirmation) {
            window.location.href = document.referrer;
        }
    }
</script>

<?php require_once '../includes/sidebar_footer.php' ?>