<?php require_once '../includes/sidebar_header.php';

if (isset($_GET['id'])) {
    $doc_id = $_GET['id'];
    $documentData = $document->getDocumentById($doc_id);
}
?>

<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Edit Document Information</h1>
        <form action="../controller/user_document_edit.php" method="POST">
            <div class="ofc-card d-flex justify-content-start flex p-2 gap-3">
                <div class="ofc-item w-50">
                    <div class="card">
                        <div class="card-body">
                            Document Information
                            <input type="hidden" name="document_id" value="<?php echo $documentData['id']; ?>">
                            <div class="form-group m-0 m-2">
                                <input type="text" name="doc_num" class="form-control"
                                    value="<?php echo $documentData['doc_num'] ?>" required>
                            </div>
                            <div class="form-group m-0 m-2">
                                <label class="form-label m-0">Document Title</label>
                                <input type="text" name="doc_title" class="form-control"
                                    value="<?php echo $documentData['doc_title'] ?>" required>
                            </div>
                            <div class="form-group m-0 m-2">
                                <label class="form-label m-0">Office Name</label>
                                <input type="text" name="office_name" class="form-control"
                                    value="<?php echo $documentData['office_name'] ?>" required>
                            </div>
                            <div class="form-group m-0 m-2">
                                <label class="form-label m-0">Document Status</label>
                                <input type="text" name="doc_status" class="form-control"
                                    value="<?php echo $documentData['doc_status'] ?>" required>
                            </div>
                            <div class="form-group m-0 m-2">
                                <label class="form-label m-0">Remarks</label>
                                <textarea type="text" name="remarks" class="form-control" id="5" cols="3" rows="10"
                                    required><?php echo $documentData['remarks'] ?></textarea>
                            </div>                  
                            <button type="submit" name="edit_document"
                                class="btn btn-outline-success m-0 m-2 d-rounded py-2 px-3">Update
                                Document</button>
                            <button type="button" class="btn btn-outline-danger m-0 m-2 d-rounded py-2 px-3"
                                onclick="goBack()">Cancel</button>
                        </div>
                    </div>
                </div>

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