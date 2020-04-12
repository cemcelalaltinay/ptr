<?php

include'header.php';
include 'bar.php';
include'admin_pan.php';


if ($_GET) {
      $durum = $_GET['durum'];
}
else {
  $durum="hidden";
}




 ?>
 <!-- DataTables -->
 <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
 <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Admin Panele Hoş geldin tatlı şey</h1>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Yazılarınızı buradan düzenleyebilirsiniz</h3>

            </div>
            <div class="col-sm-3">
              <!-- text input -->
              <div class="form-group">
                <input type="<?php echo $durum ?>" class="form-control" name="page_numara" value="<?php echo "Yükleme Başaralı" ?>" disabled>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Page_id</th>
                  <th>Page_title</th>
                  <th>Page_info</th>
                  <th>tablo_adi</th>
                  <th>page_text</th>


                </tr>
                </thead>
                <tbody>
                  <?php for ($page_id=1; $page_id <= $en; $page_id++) {

                    $sql = "SELECT * FROM $tablo_adi
                    WHERE page_id=$page_id" ;
                    $oku = mysqli_query($conn, $sql);

                    $result = mysqli_fetch_assoc($oku);

                    $page_title = $result['page_title'];
                    $page_img = $result['page_img'];
                    $page_kategori = $result['page_kategori'];
                    $page_info = $result['page_info'];
                    $page_id = $result['page_id'];
                    $page_text = $result['page_text'];

                   ?>

                <tr>
                  <td><a href="yazi_duzenle.php?page_id=<?php echo $page_id; ?>"><?php echo $page_id; ?></a></td>
                  <td><?php echo $page_title; ?></td>
                  <td><?php echo $page_info; ?></td>
                  <td><?php echo $tablo_adi; ?></td>
                  <td><?php echo $page_text; ?></td>

                    </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
      </div>
      </div>
      </div>
  <!-- /.content-wrapper -->
<?php include 'footer.php' ?>
