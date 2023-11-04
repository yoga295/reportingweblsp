<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Detail Pengaduan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">
    <div class = "card-shadow">
        <div class = "card-header">
            Detail Pengaduan
        </div>
        <div class = "card-body">
        <div class="form-group cols-sm-6">
            <a href="?url = lihat_pengaduan" class = "btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class = "fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
        </div>
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                
                <?php
                require 'koneksi.php';
                $sql = mysql_query ("select * from pengaduan, tanggapan where tanggapan.id_tanggapan='$_GET[id]' and tanggapan.id_pengaduan=pengaduan.id_pengaduan");
                $cek = mysql_nums_rows($sql);
                if ($cek <1){
                    echo "<font color='red'> Mohon bersabar, pengaduan belum ditanggapi </font>";
                }else{
                    if($data = mysqli_fetch_array($sql)){

                ?>

                <div class="form-group cols-sm-6">
                    <label>Tanggal Tanggapan</label>
                    <input type="text" name="tgl_pengaduan" value=" <?php echo $data['tgl_tanggapan']; ?> " class="form-control" readonly>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Tulis Laporan</label>
                    <textarea class="form-control" cols="7" name="isi_laporan" readonly> <?php echo $data['isi_laporan']; ?> </textarea>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Tulis Tanggapan</label>
                    <textarea class="form-control" cols="7" name="isi_laporan" readonly> <?php echo $data['tanggapan']; ?> </textarea>
                </div>
                
                <?php
                } }
                ?>
            </form>
        </div>
    </div>
        <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>