<?php
session_start();

$nik = $_POST['nik'];
$name = $_POST['name'];
$file = "auth/".$nik.".txt";

if (isset($_POST['daftar'])){
    if(empty(file_exists($file))) {
        $fh=fopen($file, "w");
        fwrite($fh, $nik ."\n");
        fwrite($fh, $name);
        fclose($fh);
        $alert="Anda Berhasil Bergabung";
        $_SESSION['nik'] = $nik;
        $_SESSION['name'] = $name;
        echo"<meta http-equiv='refresh', content='2; url=login.php'>";
    }
    else {
        $alert="Anda Gagal Bergabung";
        echo"<meta http-equiv='refresh', content='2; url=login.php'>";
    }
} elseif (isset($_POST['masuk'])){
    if(!empty(file_exists($file))) {
        $alert="Anda Berhasil Masuk";
        $_SESSION['nik']=$nik;
        $_SESSION['name']=$name;
        echo"<meta http-equiv='refresh', content='2; url=index.php'>";
    }
    else {
        $alert="Anda Gagal Masuk";
        echo"<meta http-equiv='refresh', content='2; url=login.php'>";
    }
}
?>
<html>
    <body>
        <?php echo $alert ?>
    </body>
</html>