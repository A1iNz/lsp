<?php
session_start();
    $nama = $_SESSION['name'];
    // while(! feof($file)) {
    //     $line = fgets($file);
    //     echo $line. "<br>";
    //   }
?>

<div>
    <h1>PEDULI DIRI</h1>
    <h4>CATATAN PERJALANAN</h4>
    <bold> <span style="color:blue">Home</span>
        | <span style="color:red">Catatan Perjalanan</span> | <span style="color:green">Isi Data</span></bold>
      <div>

      </div>
    <h1>Selamat datang <?php echo $_SESSION['name'] ?> di aplikasi Peduli diri</h1>
</div>