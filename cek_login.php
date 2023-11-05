<?php
require 'koneksi.php';
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = mysqli_query ($koneksi, "SELECT *  FROM masyarakat WHERE username='$user' and password='$pass'");
$cek = mysqli_num_rows($sql);
if($cek>0){
    $data=mysqli_fetch_array($sql);
    session_start();
    $_SESSION['username']=$user;
    $_SESSION['nik']=$data ['nik'];
    header('localtion:masyarakat.php');
}else{
    ?>
    <script type="text/javascript">
        alert('Data berhasil disimpan, silahkan untuk login');
        window.location="masyarakat.php";
    </script>
    <?php
}
?>