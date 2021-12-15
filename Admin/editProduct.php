<?php include "header.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="edit.php" method="post" enctype="multipart/form-data">
      <?php 
        if(isset($_GET['id'])):
          $id = $_GET['id'];
          $getProductById = $product->getProductById($id);
						foreach($getProductById as $value1):
      ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">General</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">ID </label>
                  <input type="text" id="inputName" class="form-control" name="id" value="<?php echo $value1['id']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="inputName">Name</label>
                  <input type="text" id="inputName" class="form-control" name="name" value="<?php echo $value1['name']; ?>">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Manufacture</label>
                  <select id="inputStatus" class="form-control custom-select" name="manu">
                    <?php 
                      $getAllManu = $manufacture->getAllManufactures();
                      foreach($getAllManu as $value):
                        if($value['manu_id'] == $value2['manu_id']):
                    ?>
                    <option value=<?php echo $value['manu_id'] ?>><?php echo $value['manu_name']; ?></option>
                    <?php else: ?>
                      <option value=<?php echo $value['manu_id'] ?>><?php echo $value['manu_name']; ?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputStatus">Protype</label>
                  <select id="inputStatus" class="form-control custom-select" name="type">
                    <?php 
                      $getAllType = $protype->getAllProtypes();
                      foreach($getAllType as $value):
                        if($value['type_id'] == $value2['type_id']):
                    ?>
                    <option value=<?php echo $value['type_id'] ?>><?php echo $value['type_name']; ?></option>
                    <?php else: ?>
                    <option value=<?php echo $value['type_id'] ?>><?php echo $value['type_name']; ?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputClientCompany">Price</label>
                  <input type="text" id="inputProjectLeader" class="form-control" name="price" value="<?php echo number_format($value1['price'],0,',','.'). ' VND'; ?>">
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">Project Description</label>
                  <textarea id="inputDescription" class="form-control" rows="4" name="discrip"><?php echo $value1['description']; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">Image</label>
                  <input type="file" id="imgInp" class="form-control" name="image">
                  <img src="../img/<?php echo $value1['pro_image']; ?>" alt="">
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">Feature</label>
                  <input type="text" id="inputProjectLeader" class="form-control" name="feature">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-7" style="padding-bottom: 16px;">
            <input name="capnhat" type="submit" value="Update Product" class="btn btn-success float-right">
          </div>
        </div>
        <?php 
            endforeach;
          endif;
        ?>
      </form>
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "footer.php"; ?>
