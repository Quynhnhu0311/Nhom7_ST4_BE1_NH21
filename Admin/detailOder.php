<?php include "header.php"; ?>

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
                          Product Name
                      </th>
                      <th style="width: 20%">
                          Quality
                      </th>
                      <th style="width: 20%">
                          Price
                      </th>
                      <th style="width: 20%">
                          Total Price
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                  $i = 1;
                  $thanhtien = 0;
                  $code = $_GET['code'];
                  $getOder = $CartDetail->getOder($code);
                  $getAllProducts = $product->getAllProducts();
                  foreach($getOder as $value):
                    $tongtien=$value['price']*$value['soluong'];
                    $thanhtien += $tongtien
                ?>
                  <tr>
                      <td><?php echo $i++; ?></td>
                      <td><a><?php echo $value['code_cart']; ?></a><br/></td>
                      <td><a><?php echo $value['name']; ?></a><br/></td>
                      <td><a><?php echo $value['soluong']; ?></a><br/></td>
                      <td><a><?php echo number_format($value['price'],0,',','.').' VND'; ?></a><br/></td>
                      <td><a><?php echo number_format($tongtien,0,',','.').' VND'; ?></a><br/></td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
          <td><a style="padding: 40px;">Total Money : <?php echo number_format($thanhtien,0,',','.').' VND'; ?></a><br/></td>
          <button style="margin-top: 20px; margin-bottom: 20px; margin-left: 550px; border-radius: 8px;"><a href="orderManagement.php" style="color: #2B2D42;">Back</a></button>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.php" ?>