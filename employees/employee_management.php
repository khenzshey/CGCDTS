<?php
require_once '../includes/sidebar_header.php';

$departments = $office->getOffices();
$employees = $employee->getEmployees();
?>
<main class="content">
    <div class="container-fluid p-0">
        <?php if (isset($_GET['add']) and $_GET['add'] == "success") {
            echo '<div class="alert alert-success" id="my-alert" role="alert"> Account has been added successfully. </div>';
        } ?>
        <?php if (isset($_GET['add']) and $_GET['add'] == "failed") {
            echo '<div class="alert alert-danger" id="my-alert" role="alert"> Failed to add Account. </div>';
        } ?>
        <h1 class="h3 mb-3">User Management</h1>
        <form action="../controller/employee_user_add.php" method="POST">
            <div class="user$user-card d-flex justify-content-start flex p-2 gap-3">
                <div class="user$user-item w-50">
                    <div class="card">
                        <div class="card-body">
                            <h4>Add User</h4>
                            <div class="form-group m-0 m-2">
                                <input type="text" name="emp_id" class="form-control" placeholder="Id Number" required>
                            </div>
                            <div class="form-group m-0 m-2">
                                <input type="text" name="emp_lname" class="form-control" placeholder="Last Name"
                                    required>
                            </div>
                            <div class="form-group m-0 m-2">
                                <input type="text" name="emp_fname" class="form-control" placeholder="First Name"
                                    required>
                            </div>
                            <div class="form-group m-0 m-2">
                                <input type="text" name="emp_mname" class="form-control" placeholder="Middle Name"
                                    required>
                            </div>
                            <div class="form-group m-0 m-2">
                                <select class="form-select" name="department_id" required>
                                    <option value="" selected disabled>Select Department</option>
                                    <?php
                                    foreach ($departments as $department) {
                                        echo "<option value='" . $department['id'] . "'>" . $department['department_name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group m-0 m-2">
                                <input type="text" name="emp_position" class="form-control" placeholder="Position"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-outline-success m-0 m-2 d-rounded py-2 px-3">Add
                                Employee</button>
                        </div>
                    </div>
                </div>
                <div class="user user-item w-50">
                    <table class="table table-hover">
                        <th>ID Number</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Action</th>
                        <tbody>
                            <?php foreach ($employees as $emp): ?>
                                <tr>
                                    <td>
                                        <?php echo $emp['employee_id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $emp['last_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $emp['first_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $emp['middle_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $emp['department_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $emp['position'] ?>
                                    </td>
                                    <td>
                                        <?php echo $emp['status'] ?>
                                    </td>
                                    <td>
                                        <a href="?id=<?php echo $emp['id']; ?>" class="btn btn-sm btn-success "><i
                                                class="fal fa-edit"></i></a>
                                        <a href="employee_management.php?id=<?php echo $emp['id']; ?>"
                                            class="btn btn-sm btn-warning"><i class="fas fa-minus-hexagon"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
</main>
<?php require_once '../includes/sidebar_footer.php' ?>