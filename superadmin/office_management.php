<?php
   require_once '../includes/sidebar_header.php';

   $allOffice = $office->getOffices();
  

   if(isset($_GET['id'])){
      $ofc_id = $_GET['id'];
      $officeData = $office->getOfficeById($ofc_id);
   }


?> 
<main class="content">
    <div class="container-fluid p-0">
        <?php if(isset($_GET['add']) AND $_GET['add']  == "success"){ echo '<div class="alert alert-success" id="my-alert" role="alert"> Office has been added successfully. </div>'; } ?>
        <?php if(isset($_GET['add']) AND $_GET['add']  == "failed"){ echo '<div class="alert alert-danger" id="my-alert" role="alert"> Failed to add office. </div>'; } ?>
        <h1 class="h3 mb-3">Office Management</h1>
        <form action="../controller/admin_office_add.php" method="POST">
          <div class="ofc-card d-flex justify-content-start flex p-2 gap-3">
            <div class="ofc-item w-50">
              <div class="card">
                <div class="card-body">
                  Add Office
                  <div class="form-group m-0 m-2">
                    <input type="text"  name="office_name" class="form-control" placeholder="Office Name" required>
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
                <th>Edit</th>
                <tbody>
                  <?php foreach($allOffice as $ofc): ?>
                    <tr>
                      <td><?php echo $ofc['department_name'] ?></td>
                      <td><?php echo $ofc['department_description'] ?></td>
                      <td><?php echo $ofc['status'] ?></td>
                      <td>
                        <a href="office_management.php?id=<?php echo $ofc['id']; ?>" class="btn btn-sm btn-primary"><i class="fal fa-edit"></i></a>
                        <a href="office_management.php?id=<?php echo $ofc['id']; ?>" class="btn btn-sm btn-primary"><i class="fas fa-minus-hexagon"></i></a>
                      
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


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


<div></div>
<?php require_once '../includes/sidebar_footer.php' ?> 