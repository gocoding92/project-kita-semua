<?php

include '../../../config/koneksi/koneksi.php';

if (isset($_POST)){
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $umur       = $_POST['umur'];
    $status     = $_POST['status'];
    $tgl_lahir  = $_POST['tgl_lahir'];
    $alamat     = $_POST['alamat'];

    $sql = "UPDATE tbl_user 
                            SET nama        = '$nama',
                                umur        = '$umur',
                                status      = '$status',
                                tgl_lahir   = '$tgl_lahir',
                                alamat      = '$alamat'

                            WHERE id_user   = '$id' ";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header('location: ../index.php');
    }
    

}else{
    header('location: ../index.php');
}


?>