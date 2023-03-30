
<html>
    <head>
        <meta charset="TTF-8"> 
        <title>Dashboard</title>

        <!--link-rel-->
        <?php include '../templates/link-rel.php'; ?>

    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

             <!-- // header -->
            <?php include '../templates/header.php'; ?>
            <!-- // side menu -->
            <?php include '../templates/menu.php'; ?>
       
            <!-- // content -->
            <!-- Content Wrapper. Contains page content -->
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
                                    <h3 class="card-title">Dashboard</h3>
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
                                <th>Nomor</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Umur</th>
                                <th>Status</th>
                                <th>Tanggal lahir</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                                $no = 1;
                                $sql ="SELECT * FROM tbl_users where delete_at='0'";
                                $query = mysqli_query($db, $sql);

                                while ($users = mysqli_fetch_array($query)){
                            
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $users['nama']; ?></td>
                                <td><?php echo $users['alamat']; ?></td>
                                <td><?php echo $users['umur']; ?></td>
                                <td><?php echo $users['status'];?></td>
                                <td><?php echo $users['tgl_lahir']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $users['id_users']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="detail.php?id=<?php echo $users['id_users']?>" class="btn btn-sm btn-info">Detail</a>
                                    <a href="controllers/delete.php?id=<?php echo $users['id_users']; ?>"class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php }?>
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

            <!-- modal create data / Tambah Data-->
            <div class="modal fade" id="modal-create">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Umur</label>
                                            <input type="number" name="umur" class="form-control">
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="text" name="status" id="" class="form-control">
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" id="" class="form-control">
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Alamat</label>
                                    <textarea name="Alamat" id="" cols="30" rows="6" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

           
              <!-- modal edit data / Mengubah Data-->
              <div class="modal fade" id="modal-edit">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Umur</label>
                                            <input type="number" name="umur" class="form-control">
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="text" name="status" id="" class="form-control">
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" id="" class="form-control">
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Alamat</label>
                                    <textarea name="Alamat" id="" cols="30" rows="6" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

             <!-- modal detail data / Spesifikasi-->
             <div class="modal fade" id="modal-detail">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <p>boy lase</p>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Umur</label>
                                            <p>23 Tahun</p>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <p></p>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <label for="">Tanggal Lahir</label>
                                        <p>01 Januari 2000</p>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Alamat</label>
                                    <p>
                                        Desa : Hiliganoita, Kec. Bawolato, Kab. NIAS
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

      
            <!--footer-->
            <?php include '../templates/footer.php' ?>
            <!-- // script-->
            <?php include '../templates/script.php'; ?>

        </div>
    </body>
</html>