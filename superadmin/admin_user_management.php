<?php
require_once '../includes/sidebar_header.php';

$departments = $office->getOffices();
$users = $admins->getAdmins();
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
        <form action="../controller/admin_user_add.php" method="POST">
            <div class="user$user-card d-flex justify-content-start flex p-2 gap-3">
                <div class="user$user-item w-50">
                    <div class="card">
                        <div class="card-body">
                            <h4>Add User</h4>
                            <div class="form-group m-0 m-2">
                                <input type="text" name="admin_id" class="form-control" placeholder="admin Id" required>
                            </div>
                            <div class="form-group m-0 m-2">
                                <input type="text" name="admin_lname" class="form-control" placeholder="Last Name"
                                    required>
                            </div>
                            <div class="form-group m-0 m-2">
                                <input type="text" name="admin_fname" class="form-control" placeholder="First Name"
                                    required>
                            </div>
                            <div class="form-group m-0 m-2">
                                <input type="text" name="admin_mname" class="form-control" placeholder="Middle Name"
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
                                <input type="text" name="admin_position" class="form-control" placeholder="Position"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-outline-success m-0 m-2 d-rounded py-2 px-3">Create
                                Admin</button>
                        </div>
                    </div>
                </div>
                <div class="user$user-item w-50">
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
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td>
                                        <?php echo $user['admin_id'] ?>
                                    </td>
                                    <td>
                                        <?php echo $user['last_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $user['first_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $user['middle_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $user['department_name'] ?>
                                    </td>
                                    <td>
                                        <?php echo $user['position'] ?>
                                    </td>
                                    <td>
                                        <?php echo $user['status'] ?>
                                    </td>
                                    <td>
                                        <a href="?id=<?php echo $user['id']; ?>" class="btn btn-sm btn-success "><i
                                                class="fal fa-edit"></i></a>
                                        <a href="admin_user_management.php?id=<?php echo $user['id']; ?>"
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