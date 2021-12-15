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
      <form action="editCategory.php" method="post" enctype="multipart/form-data">
      <?php 
        if(isset($_GET['id_baiviet'])):
          $id_baiviet = $_GET['id_baiviet'];
          $getCategoryById = $category->getCategoryById($id_baiviet);
						foreach($getCategoryById as $value):
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
                  <input type="text" id="inputName" class="form-control" name="id_baiviet" value="<?php echo $value['id_baiviet']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="inputName">Name List</label>
                  <input type="text" id="inputName" class="form-control" name="namelist" value="<?php echo $value['tendanhmuc_baiviet']; ?>">
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
