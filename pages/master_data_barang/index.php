<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Master Data Barang</title>

    <!-- // link-rel -->
    <?php include '../templates/link-rel.php'; ?>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    
    <!-- // header -->
    <?php include '../templates/header.php'; ?>
    <!-- // side menu -->
    <?php include '../templates/menu.php'; ?>
    
  <!--struktur data detail data-->


    <!-- // content tidak ada -->
    <div class="content-wrapper">
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card my-3">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="card-title">Master Data Barang</h3>
                  </div>
                  <div class="col-md-6">
                    <a href="create.php" class="btn btn-sm btn-primary float-right">
                      <i class="fa fa-plus"></i>&nbsp; Tambah Data
                    </a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Barang</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Deskripsi</th>
                    <th>Jenis Barang</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    $no = 1;
                    $sql = "SELECT * FROM tbl_barang WHERE delete_at='0'";
                    $query = mysqli_query($db, $sql);

                    while ($user = mysqli_fetch_array($query)) {
                  ?>


                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $user['nama_barang']; ?></td>
                    <td><?php echo $user['harga']; ?></td>
                    <td><?php echo $user['qty']; ?></td>
                    <td><?php echo $user['deskripsi']; ?></td>
                    <td><?php echo $user['id_jenis_barang']; ?></td>
                    <td>
                      <a href="edit.php?id=<?php echo $user['id_barang']; ?>" class="btn btn-sm btn-primary">Edit</a>
                      <!-- <a href="detail.php?id=<?php echo $user['id_barang']; ?>" class="btn btn-sm btn-info">Detail</a> -->
                      <a href="controllers/delete.php?id=<?php echo $user['id_barang']; ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    
    <!-- // footer -->
    <?php include '../templates/footer.php'; ?>

    <!-- // script -->
    <?php include '../templates/script.php'; ?>
    
</div>

</body>
</html>