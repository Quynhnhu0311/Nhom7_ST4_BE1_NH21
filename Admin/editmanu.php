<?php include "header.php";?>
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
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <form action="editm.php" method="post"roles="form"enctype="multipart/form-data">
                  <h3 class="card-title">General</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>                
                  <div class="card-body">
                    <?php
                    if(isset($_GET['manu_id'])):
                      $id=$_GET['manu_id'];
                      $getProductByID=$manufacture->getProductByID($id);
                      foreach($getProductByID as $value):
                    ?>
                    <div class="form-group">
                      <label for="inputName">ID</label>
                      <input type="text" id="inputName" class="form-control" name="manu_id" value="<?php echo $value['manu_id']?>"readonly>
                    </div>
                    <div class="form-group">
                      <label for="inputName">Name</label>
                      <input type="text" id="inputName" class="form-control" name="manu_name" value="<?php echo $value['manu_name']?>">
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <?php
                      endforeach;
                      endif
                ?>
          <!-- /.card -->
        </div>
      </div>
      
      <div class="row">
        <div class="col-7" style="padding-bottom: 16px;">
          <input name="submit" type="submit" value="Update Manufacture" class="btn btn-success float-right">
        </div>
      </div>
    </form>    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.html";?>