<?php
session_start();
    $nama = $_SESSION['name'];
?>

<div>
    <h1>Selamat datang <?php $nama ?> di aplikasi Peduli diri</h1>
</div>