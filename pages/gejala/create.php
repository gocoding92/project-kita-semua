<html>

<head>
    <meta charset="TTF-8">
    <title>Sampel Link create</title>

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
                                            <h3 class="card-title">Data Sampel Link Create</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="index.php" class="btn btn-sm btn-primary float-right">
                                                <i class="fa fa-arrow-left"></i>&nbsp; Kembali Ke List Data
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <?php
                                $no = 1;
                                $sql = "SELECT * FROM tbl_jenis_tanaman where delete_at='0'";
                                $query = mysqli_query($db, $sql);

                                $sql_penyakit = "SELECT * FROM tbl_jenis_penyakit where delete_at='0'";
                                $query_penyakit = mysqli_query($db, $sql_penyakit);

                                ?>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="controllers/create.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Jenis Tanaman</label>
                                                    <select name="id_jenis_tanaman" id="" class="form-control">
                                                        <option value="0">[Silahkan Pilih]</option>
                                                        <?php while ($data = mysqli_fetch_array($query)) { ?>
                                                            <option value="<?php echo $data['id_jenis_tanaman'] ?>"><?php echo $data['jenis_tanaman']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Jenis Penyakit</label>
                                                    <select name="id_jenis_penyakit" id="" class="form-control">
                                                        <option value="0">[Silahkan Pilih]</option>
                                                        <?php while ($data = mysqli_fetch_array($query_penyakit)) { ?>
                                                            <option value="<?php echo $data['id_jenis_penyakit'] ?>"><?php echo $data['jenis_penyakit']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="">Gejala</label>
                                                    <input type="text" class="form-control" name="gejala" placeholder="Masukkan Gejala Anda" required>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="reset" class="btn btn-default" data-dismiss="modal">Tutup</button>
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


        <!--footer-->
        <?php include '../templates/footer.php' ?>
        <!-- // script-->
        <?php include '../templates/script.php'; ?>

    </div>
</body>

</html>