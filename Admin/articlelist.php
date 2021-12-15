<?php 
  $page = 'articlelist';
  include "header.php"; 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 12%">
                          Name List
                      </th>
                      <th style="width: 5%; text-align: center;">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php
                  $getAllCategory = $category->getAllCategory();
                  foreach($getAllCategory as $value):
                ?>
                  <tr>
                      <td><a><?php echo $value['id_baiviet']; ?></a><br/></td>
                      <td><a><?php echo $value['tendanhmuc_baiviet']; ?></a><br/></td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="editList.php?id_baiviet=<?php echo $value['id_baiviet']; ?>">
                              <i class="fas fa-folder">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="delList.php?id_baiviet=<?php echo $value['id_baiviet'];?>" onclick="return confirm('Are you sure you want to delete this item?');">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
                  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
        <div class="row">
          <div class="col-7" style="padding-bottom: 16px;">
            <a href="AddList.php">
              <input name="submit" type="submit" value="Add New Category" class="btn btn-success float-right">
            </a>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.php" ?>