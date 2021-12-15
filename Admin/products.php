<?php 
  $page = 'products';
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
                          Name
                      </th>
                      <th style="width: 20%">
                          Image
                      </th>
                      <th>
                          Price
                      </th>
                      <th style="width: 8%">
                         Manufacture
                      </th>
                      <th style="width: 8%">
                         Protype
                      </th>
                      <th style="width: 10%; text-align: center;">
                         Description
                      </th>
                      <th style="width: 15%; text-align: center;">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                  $getAllProducts = $product->getAllProducts();
                  // hiển thị 5 sản phẩm trên 1 trang
                  $perPage = 5; 				
                  // Lấy số trang trên thanh địa chỉ
                  $page = isset($_GET['page'])?$_GET['page']:1;		
                  // Tính tổng số dòng, ví dụ kết quả là 18
                  $total = count($getAllProducts);					
                  // lấy đường dẫn đến file hiện hành
                  $url = $_SERVER['PHP_SELF'];
                  $get5AllProducts = $product->get5AllProducts($page,$perPage);
                  foreach($get5AllProducts as $value):
                ?>
                  <tr>
                      <td><?php echo $value['id']; ?></td>
                      <td><a><?php echo $value['name']; ?></a><br/></td>
                      <td><img src="../img/<?php echo $value['pro_image']; ?>" alt="" style="width: 130px;"></td>
                      <td class="project_progress"><?php echo number_format($value['price']); ?>VND</td>
                      <td class="project-state"><?php echo $value['manu_name']; ?></td>
                      <td class="project-state"><?php echo $value['type_name']; ?></td>
                      <td class="project-state" style="width: 432px; overflow: hidden; text-overflow: ellipsis; line-height: 22px; -webkit-line-clamp: 3; height: 75px; display: -webkit-box; -webkit-box-orient: vertical;"><?php echo $value['description']; ?></td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="editProduct.php?id=<?php echo $value['id']; ?>">
                              <i class="fas fa-folder">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="delProduct.php?id=<?php echo $value['id'];?>" style="margin-top: 10px;" onclick="return confirm('Are you sure you want to delete this item?');">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
          <div class="row" style="margin-left: 405px; margin-top: 20px; margin-bottom: 20px;">
            <?php 
              echo $product->paginate($url,$total,$perPage); 
            ?>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include "footer.php" ?>