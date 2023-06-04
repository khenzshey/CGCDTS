<?php require_once '../includes/sidebar_header.php';

$departments = $office->getOffices();
$roles = $office->getUserRole();

?>
<main class="content">
    <div class="container-fluid p-0">
        <!-- <h1 class="h3 mb-3">Dashboard</h1> -->
        <!-- <div class="container py-5 h-100"> -->
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 12px;">
                    <div class="card-body p-4 p-md-5 ">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Department Head Account</h3>
                        <form method="POST" action="../controller/admin_user_add.php">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="admin_id" class="form-control form-control-lg"
                                            required />
                                        <label class="form-label">Employee Id</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="admin_lname" class="form-control form-control-lg"
                                            required />
                                        <label class="form-label">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="admin_fname" class="form-control form-control-lg"
                                            required />
                                        <label class="form-label">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="admin_mname" class="form-control form-control-lg"
                                            required />
                                        <label class="form-label">Middle Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <select class="select form-control-lg w-100" name="department_id" required>
                                        <option value="" selected disabled>Select Department</option>
                                        <?php
                                        foreach ($departments as $department) {
                                            echo "<option value='" . $department['id'] . "'>" . $department['department_name'] . "</option>";

                                        }
                                        ?>
                                    </select>
                                    <label class="form-label select-label">Choose option</label>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="admin_position" class="form-control form-control-lg"
                                            required />
                                        <label class="form-label">Position</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <input type="text" name="admin_status" class="form-control form-control-lg"
                                            required />
                                        <label class="form-label">Status</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <select class="select form-control-lg w-100" name="role_id" required>
                                        <option value="" selected disabled>Select User Role</option>
                                        <?php
                                        foreach ($roles as $role) {
                                            echo "<option value='" . $role['role_id'] . "'>" . $role['role_name'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <label class="form-label select-label">User Role</label>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-9 mb-4 ">
                                    <div class="form-outline">
                                        <input type="text" name="admin_uname" class="form-control form-control-lg"
                                            required />
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>
                                <div class="col-9 mb-4 ">
                                    <div class="form-outline">
                                        <input type="password" name="admin_pass" class="form-control form-control-lg"
                                            required />
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-0 pt-0 text-center">
                                <input class="btn btn-outline-success  m-0 m-2 d-rounded py-2 px-3" type="submit"
                                    value="Submit" name="submit" />
                                <input class="btn btn-outline-danger m-0 m-2 d-rounded py-2 px-3" type="button"
                                    value="Cancel" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>
</main>
<div></div>
<?php require_once '../includes/sidebar_footer.php' ?>