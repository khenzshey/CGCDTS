<?php
require_once '../includes/sidebar_header.php';

$addDocument = $document->getDocument();

?>
<main class="content">
  <div class="container-fluid p-0">
    <h1 class="h3 mb-3">Document</h1>
    <form action="../controller/user_document_add.php" method="POST">
      <div class="ofc-card d-flex justify-content-start flex p-2 gap-3">
        <div class="ofc-item w-50">
          <div class="card">
            <div class="card-body">
              <h4>Add Document</h4>
              <div class="form-group m-3 m-2">
                <input type="text" name="doc_num" class="form-control" placeholder="Document Number" required>
              </div>
              <div class="form-group m-3 m-2">
                <input type="text" name="doc_title" class="form-control" placeholder="Document Title" required>
              </div>
              <div class="form-group m-3 m-2">
                <input type="text" name="office_name" class="form-control" placeholder="Office Name" required>
              </div>
              <div class="form-group m-3 m-2">
                <input type="text" name="doc_status" class="form-control" placeholder="Document Status" required>
              </div>
              <div class="form-group m-3 m-2">
                <textarea name="remarks" class="form-control" id="5" cols="3" rows="5" placeholder="Remarks" required>
                    </textarea>
              </div>
              <button type="submit" class="btn btn-outline-success m-0 m-2 d-rounded py-2 px-3">Add Document</button>
            </div>
          </div>
        </div>
        <div class="ofc-item w-50">
        <table class="table table-hover">
                <th>Document Number</th>
                <th>Document Title</th>
                <th>Office Name</th>
                <th>Document Status</th>
                <th>Remarks</th>
                <tbody>

                    <?php foreach ($addDocument as $document): ?>
                        <tr>
                            <td>
                                <?php echo $document['doc_num'] ?>
                            </td>
                            <td>
                                <?php echo $document['doc_title'] ?>
                            </td>
                            <td>
                                <?php echo $document['office_name'] ?>
                            </td>
                            <td>
                                <?php echo $document['doc_status'] ?>
                            </td>
                            <td>
                                <?php echo $document['remarks'] ?>
                            </td>
                            <td>
                    <a href="add_document_action.php?id=<?php echo $document['id']; ?>" class="btn btn-sm btn-success "><i
                        class="fal fa-edit"></i></a>
                    <a href="add_document.php?id=<?php echo $document['id']; ?>" class="btn btn-sm btn-warning"><i
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