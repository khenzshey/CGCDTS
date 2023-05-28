<?php require_once '../includes/sidebar_header.php';

if (isset($_GET['id'])) {
    $ofc_id = $_GET['id'];
    $officeData = $office->getOfficeById($ofc_id);
}
?>

<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Edit Department Information</h1>
        <form action="../controller/admin_office_edit.php" method="POST">
            <div class="ofc-card d-flex justify-content-start flex p-2 gap-3">
                <div class="ofc-item w-50">
                    <div class="card">
                        <div class="card-body">
                            Edit Office Information
                            <input type="hidden" name="office_id" value="<?php echo $officeData['id']; ?>">
                            <div class="form-group m-0 m-2">
                                <input type="text" name="office_name" class="form-control"
                                    value="<?php echo $officeData['department_name'] ?>" required>
                            </div>
                            <div class="form-group m-0 m-2">
                                <label class="form-label m-0">Description</label>
                                <textarea name="office_desc" class="form-control" id="5" cols="3" rows="10"
                                    required><?php echo trim($officeData['department_description']) ?></textarea>
                            </div>
                            <button type="submit" name="edit_office"
                                class="btn btn-outline-success m-0 m-2 d-rounded py-2 px-3">Update
                                Office</button>
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