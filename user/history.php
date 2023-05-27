<?php
require_once '../includes/sidebar_header.php';

$allHistory = $history->getHistory();

?>
<br>
<div class="ofc-card d-flex justify-content-start flex p-3 gap-3">
    <div class="input-group">
        <div class="form-outline">
            <input type="search" id="form1" class="form-control" placeholder="Search" />
        </div>
        <button type="button" class="btn btn-success">
            <i class="fas fa-search"></i>
        </button>
        <div class="d-flex justify-content-end flex gap-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Sort by :
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Modified - Newest First</a></li>
                <li><a class="dropdown-item" href="#">Modified - Oldest First</a></li>
                <li><a class="dropdown-item" href="#">Document Name - A-Z</a></li>
                <li><a class="dropdown-item" href="#">Document Name -A</a></li>
            </ul>
        </div>
        <br>

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

                    <?php foreach ($allHistory as $history): ?>
                        <tr>
                            <td>
                                <?php echo $history['doc_num'] ?>
                            </td>
                            <td>
                                <?php echo $history['doc_title'] ?>
                            </td>
                            <td>
                                <?php echo $history['office_name'] ?>
                            </td>
                            <td>
                                <?php echo $history['doc_status'] ?>
                            </td>
                            <td>
                                <?php echo $history['remarks'] ?>
                            </td>
                            <td>
                                <?php echo $history['date_completed'] ?>
                            </td>
                            <td>
                                <?php echo $history['date_requested'] ?>
                            </td>
                            <td>
                            <?php endforeach; ?>
        </div>
    </div>
    </form>
</div>
</main>
<?php require_once '../includes/sidebar_footer.php' ?>