<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tambah Data Pengguna</title>

    <!-- // link-rel -->
    <?php include '../templates/link-rel.php'; ?>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    
    <!-- // header -->
    <?php include '../templates/header.php'; ?>
    <!-- // side menu -->
    <?php include '../templates/menu.php'; ?>
    
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
                    <h3 class="card-title">Create Data Pengguna</h3>
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
               
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">username</label>
                      <input type="text" name="nama" class="form-control">
                  </div>
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="text" name="password" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Nama Lengkap</label>
                      <input type="text" name="nama_lengkap" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">No Handpone</label>
                      <input type="text" name="no_handpone" class="form-control">
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Level</label>
                      <select name="id_jenis_barang" class="form-control">
                        <option value="">--Pilih salah satu--</option>
                      </select>
                  </div>
                <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Supplier</label>
                    <select name="id_jenis_barang" class="form-control">
                      <option value="">--Pilih salah satu--</option>
                      <?php while ($jenis_barang = mysqli_fetch_array($query_jenis_barang)) { ?>
                        <option value="<?php echo $jenis_barang['id_jenis_barang']?>"><?php echo $jenis_barang['id_jenis_barang'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default">Tutup</button>
                  <button type="button" class="btn btn-primary">Submit</button>
                  </div>
                </div>
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