<?php
require 'koneksi.php';
$user = $_POST['username'];
$pass = $_POST['password'];
$sql = mysql_query ("SELECT *  FROM masyarakat WHERE username='$user' and password='$pass'");
$cek = mysql_num_rows($row);
if($cek>0){
    $data=mysql_fetch_array($sql);
    session_start();
    $_SESSION['nama']=$user;
    $_SESSION['nik']=$data ['nik'];
    header('localtion:masyarakat.php');
}else{
    ?>
    <script type="text/javascript">
        alert('Data berhasil disimpan, silahkan untuk login');
        window.location="index.php";
    </script>
    <?php
}
?>