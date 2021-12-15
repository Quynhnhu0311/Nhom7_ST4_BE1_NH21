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
      <form action="editCt.php" method="post" enctype="multipart/form-data">
      <?php 
        if(isset($_GET['id_detali_category'])):
          $id_detali_category = $_GET['id_detali_category'];
          $getContentById = $content->getContentById($id_detali_category);
						foreach($getContentById as $value1):
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
                  <input type="text" id="inputID" class="form-control" name="id_baiviet" value="<?php echo $value1['id_detali_category']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="inputDescription">Name List</label>
                  <select id="inputStatus" class="form-control custom-select" name="namelist">
                    <?php 
                      $getAllCategory = $category->getAllCategory();
                      foreach($getAllCategory as $value):
                        if($value['id_baiviet'] == $value2['id_baiviet']):
                    ?>
                    <option value=<?php echo $value['id_baiviet'] ?>><?php echo $value['tendanhmuc_baiviet']; ?></option>
                    <?php else: ?>
                      <option value=<?php echo $value['id_baiviet'] ?>><?php echo $value['tendanhmuc_baiviet']; ?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputName">Article Title</label>
                  <input type="text" id="inputContent" class="form-control" name="tenbaiviet" value="<?php echo $value1['ten_baiviet']; ?>">
                </div>
                <div class="form-group">
                  <label for="inputName">Summary</label>
                  <textarea id="inputDescription" class="form-control" rows="4" name="tomtat"><?php echo $value1['tomtat']; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="inputName">Content</label>
                  <textarea id="inputDescription" class="form-control" rows="4" name="noidung"><?php echo $value1['noidung']; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">Image</label>
                  <input type="file" id="imgInp" class="form-control" name="image">
                  <img src="../img/<?php echo $value1['image_baiviet']; ?>" alt="">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-7" style="padding-bottom: 16px;">
            <input name="capnhat" type="submit" value="Update Category" class="btn btn-success float-right">
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
