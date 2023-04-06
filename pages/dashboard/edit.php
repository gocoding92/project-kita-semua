<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample Link Edit</title>

    <!-- // link-rel -->
    <?php include '../templates/link-rel.php'; ?>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    
    <!-- // header -->
    <?php include '../templates/header.php'; ?>
    <!-- // side menu -->
    <?php include '../templates/menu.php'; ?>

    <!-- struktur data detail data -->
    <?php
      if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql   = "SELECT * FROM tbl_users WHERE id_users=$id ";
        $query = mysqli_query($db, $sql);
        $users = mysqli_fetch_assoc($query);
      }
    ?>
    
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
                    <h3 class="card-title">Data Sample Link Edit</h3>
                  </div>
                  <div class="col-md-6">
                    <a href="index.php" class="btn btn-sm btn-primary float-right">
                      <i class="fa fa-arrow-left"></i>&nbsp; Kembali ke list data
                    </a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="controllers/edit.php" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Nama</label>
                        <!-- hidden id -->
                        <input type="hidden" name="id" value="<?php echo $users['id_users']; ?>">

                        <input type="text" name="nama" value="<?php echo $users['nama']; ?>" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Umur</label>
                        <input type="text" name="umur" class="form-control" value="<?php echo $users['umur']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" name="status" id="" class="form-control" value="<?php echo $users['status']; ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="">Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" value="<?php echo $users['tgl_lahir']; ?>" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label for="">Alamat</label>
                      <textarea name="alamat" cols="20" rows="6" class="form-control"><?php echo $users['alamat']; ?></textarea>
                    </div>
                  </div>
                  <div class="justify-content-between my-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
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