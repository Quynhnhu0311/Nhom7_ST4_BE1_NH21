<?php 
  $page = 'viewlist';
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
                      <th style="width: 1%; text-align: center;">
                          STT
                      </th>
                      <th style="width: 9%; text-align: center;">
                          Name List
                      </th>
                      <th style="width: 12%; text-align: center;">
                          Article Title
                      </th>
                      <th style="width: 17%; text-align: center;">
                          Summary
                      </th>
                      <th style="width: 20%; text-align: center;">
                          Content
                      </th>
                      <th style="width: 18%; text-align: center;">
                          Image
                      </th>
                      <th style="width: 20%; text-align: center;">
                          Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                  $i = 1 ;
                  $getContent = $content->getContent();
                  foreach($getContent as $value):
                ?>
                  <tr>
                      <td><a><?php echo $i++; ?></a><br/></td>
                      <td><a><?php echo $value['tendanhmuc_baiviet']; ?></a><br/></td>
                      <td><a><?php echo  $value['ten_baiviet']; ?></a><br/></td>
                      <td><a><?php echo  $value['tomtat']; ?></a><br/></td>
                      <td style="width: 275px; overflow: hidden; text-overflow: ellipsis; line-height: 22px; -webkit-line-clamp: 3; height: 75px; display: -webkit-box; -webkit-box-orient: vertical;"><a><?php echo  $value['noidung']; ?></a><br/></td>
                      <td style="text-align: center;"><img src="../img/<?php echo $value['image_baiviet']; ?>" alt="" style="width: 130px;"></td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="editContent.php?id_detali_category=<?php echo $value['id_detali_category']; ?>">
                              <i class="fas fa-folder">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="delContent.php?id_detali_category=<?php echo $value['id_detali_category'];?>" onclick="return confirm('Are you sure you want to delete this item?');" style="margin-right: 58px;">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
          </table>
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