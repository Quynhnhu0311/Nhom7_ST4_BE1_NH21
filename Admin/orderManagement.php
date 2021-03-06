<?php 
  $page = 'orderManagement';
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
                      <th style="width: 20%">
                          Code Orders
                      </th>
                      <th style="width: 20%">
                          Customer Name
                      </th>
                      <th style="width: 15%; text-align: center;">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                  $i = 1;
                  $getManagement = $addcart->getManagement();
                  foreach($getManagement as $value):
                ?>
                  <tr>
                      <td><?php echo $i++; ?></td>
                      <td><a><?php echo $value['code_cart']; ?></a><br/></td>
                      <td><a><?php echo $value['username']; ?></a><br/></td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="detailOder.php?code=<?php echo $value['code_cart']; ?>" style="margin-right: 87px;">
                              <i class="fas fa-folder">
                              </i>
                              View Orders
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

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.php" ?>