<html>

<head>
    <meta charset="TTF-8">
    <title>Sampel Link</title>

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
                                            <h3 class="card-title">Data Diagnosa</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="create.php" class="btn btn-sm btn-primary float-right">
                                                <i class="fa fa-plus"></i>&nbsp; Tambah Diagnosa
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
                                                <th>Jenis Penyakit</th>
                                                <th>Kultur Teknis</th>
                                                <th>Fisik Mekanis</th>
                                                <th>Kimiawi</th>
                                                <th>Hayati</th>
                                                <th>Waktu Input</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $no = 1;

                                            $sql = "
                                                                SELECT * FROM tbl_diagnosa AS a 
                                                                LEFT JOIN tbl_jenis_penyakit AS b
                                                                ON a.id_jenis_penyakit = b.id_jenis_penyakit 

                                                                where a.delete_at='0'";

                                            $query = mysqli_query($db, $sql);

                                            while ($data = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $data['jenis_penyakit']; ?></td>
                                                    <td><?php echo $data['kultur_teknis']; ?></td>
                                                    <td><?php echo $data['fisik_mekanis']; ?></td>
                                                    <td><?php echo $data['kimiawi']; ?></td>
                                                    <td><?php echo $data['hayati']; ?></td>
                                                    <td><?php echo $data['created_time']; ?></td>
                                                    <td>
                                                        <a href="edit.php?id=<?php echo $data['id_diagnosa']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="controllers/delete.php?id=<?php echo $data['id_diagnosa']; ?>" class="btn btn-sm btn-danger">Delete</a>
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

        <!--footer-->
        <?php include '../templates/footer.php' ?>
        <!-- // script-->
        <?php include '../templates/script.php'; ?>

    </div>
</body>




</html>