<?php

require_once($_SERVER['DOCUMENT_ROOT'] . './koneksi.php');

if (isset($_POST['konfirmasi'])) {

    $id_transaksi = $_GET['id'];

    $dp = $_POST['dp'];

    if ($dp) {
        $conn->query("UPDATE transaksi SET lunas = true WHERE id_transaksi = '$id_transaksi'");
        header('Location: ./index.php');
    } else {
        $conn->query("UPDATE transaksi SET dp = true WHERE id_transaksi = '$id_transaksi'");
        header('Location: ./index.php');
       
    }
}
