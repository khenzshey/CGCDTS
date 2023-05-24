<?php
require_once '../includes/sidebar_header.php';

$allDocuments = $documents->getDocuments();

?>
<div class="input-group">
    <div class="form-outline">
        <input type="search" id="form1" class="form-control" placeholder="Search" />
    </div>
    <button type="button" class="btn btn-success">
        <i class="fas fa-search"></i>
    </button>
</div>

<div class="ofc-item w-100">
    <table class="table table-hover">
        <th>Document Number</th>
        <th>Document Title</th>
        <th>Office Name</th>
        <th>Document Status</th>
        <th>Remarks</th>
        <th>Date Completed</th>
        <th>Date Requested</th>
        <tbody>

            <?php foreach ($allDocuments as $docs): ?>
                <tr>
                    <td>
                        <?php echo $docs['doc_num'] ?>
                    </td>
                    <td>
                        <?php echo $docs['doc_title'] ?>
                    </td>
                    <td>
                        <?php echo $docs['office_name'] ?>
                    </td>
                    <td>
                        <?php echo $docs['doc_status'] ?>
                    </td>
                    <td>
                        <?php echo $docs['remarks'] ?>
                    </td>
                    <td>
                        <?php echo $docs['date_completed'] ?>
                    </td>
                    <td>
                        <?php echo $docs['date_requested'] ?>
                    </td>
                    <td>
                    <?php endforeach; ?>
</div>
</div>
</form>
</div>
</main>
<?php require_once '../includes/sidebar_footer.php' ?>