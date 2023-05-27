<?php if (isset($_GET['add']) and $_GET['add'] == "success") {
    echo '<div class="alert alert-success" id="my-alert" role="alert"> Document has been added successfully. </div>';
} ?>
<?php if (isset($_GET['add']) and $_GET['add'] == "failed") {
    echo '<div class="alert alert-danger" id="my-alert" role="alert"> Failed to add document. </div>';
} ?>

<?php if (isset($_GET['edit']) and $_GET['edit'] == "success") {
    echo '<div class="alert alert-success" id="my-alert" role="alert"> Document Information has been edited successfully. </div>';
} ?>
<?php if (isset($_GET['edit']) and $_GET['edit'] == "failed") {
    echo '<div class="alert alert-danger" id="my-alert" role="alert"> Failed to edit Document Information. </div>';
} ?>

