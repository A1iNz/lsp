<?php
session_start();

$nik = $_POST['nik'];
$nama = $_POST['name'];
$file = "auth/".$nik.".txt";

if (isset($_POST['daftar'])){
    if(empty(file_exists($file))) {
        $fh=fopen($file, "w");
        fwrite($fh, $nik);
        echo "<br>";
        fwrite($fh, $nama);
        fclose($fh);
        $alert="Anda Berhasil Bergabung";
        $_SESSION['nik']=$nik;
        $_SESSION['name']=$nama;
        echo"<meta http-equiv='refresh', content='2; url=index.php'>";
    }
    else {
        $alert="Anda Gagal Bergabung";
    }
} elseif (isset($_POST['masuk'])){
    if(!empty(file_exists($file))) {
        $alert="Anda Berhasil Masuk";
        $_SESSION['nik']=$nik;
        $_SESSION['name']=$nama;
        echo"<meta http-equiv='refresh', content='2; url=index.php'>";
    }
    else {
        $alert="Anda Gagal Masuk";
    }
}
?>