<?php
require_once '../includes/sidebar_header.php';

$allOffice = $office->getOffices();

?>
<main class="content">
  <div class="container-fluid p-0">
    <?php require_once '../superadmin/office_management_message.php'; ?>
    <h1 class="h3 mb-3">Office Management</h1>
    <form action="../controller/admin_office_add.php" method="POST">
      <div class="ofc-card d-flex justify-content-start flex p-2 gap-3">
        <div class="ofc-item w-50">
          <div class="card">
            <div class="card-body">
              <h4>Add Office</h4>
              <div class="form-group m-0 m-2">
                <input type="text" name="office_name" class="form-control" placeholder="Office Name" required>
              </div>
              <div class="form-group m-0 m-2">
                <label class="form-label m-0">Description</label>
                <textarea name="office_desc" class="form-control" id="5" cols="3" rows="10" required>

                    </textarea>
              </div>
              <button type="submit" class="btn btn-outline-success m-0 m-2 d-rounded py-2 px-3">Create Office</button>
            </div>
          </div>
        </div>
        <div class="ofc-item w-50">
          <table class="table table-hover">
            <th>Office Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
            <tbody>
              <?php foreach ($allOffice as $ofc): ?>
                <tr>
                  <td>
                    <?php echo $ofc['department_name'] ?>
                  </td>
                  <td>
                    <?php echo $ofc['department_description'] ?>
                  </td>
                  <td>
                    <?php echo $ofc['status'] ?>
                  </td>
                  <td>
                    <a href="office_management_action.php?id=<?php echo $ofc['id']; ?>" class="btn btn-sm btn-success "><i
                        class="fal fa-edit"></i></a>
                    <a href="office_management.php?id=<?php echo $ofc['id']; ?>" class="btn btn-sm btn-warning"><i
                        class="fas fa-minus-hexagon"></i></a>
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