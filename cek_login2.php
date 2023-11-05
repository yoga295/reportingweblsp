<?php
require 'koneksi.php';
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = mysqli_query ($koneksi, "SELECT *  FROM petugas WHERE username='$user' and password='$pass'");
$cek = mysqli_num_rows($sql);
if($cek>0){
    $data=mysqli_fetch_array($sql);
    if ($data['level'] == "admin") {
        session_start();
        $_SESSION['user']=$user;
        $_SESSION['nama']=$data['nama_petugas'];
        $_SESSION['user']=$data['level'];
        header('localtion:/admin/admin.php');
    }else if($data['level'] == "petugas"){
        session_start();
        $_SESSION['user']=$user;
        $_SESSION['nama']=$data['nama_petugas'];
        $_SESSION['user']=$data['level'];
        header('localtion:../petugas/petugas.php');
    }
}else{
    ?>
    <script type="text/javascript">
        alert('Data berhasil disimpan, silahkan untuk login');
        window.location="index2.php";
    </script>
    <?php
}
?>