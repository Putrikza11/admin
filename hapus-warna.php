<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/conn/koneksi.php');

$id_warna = $_GET["id"];

if (isset($id_warna) > 0 ) {
    // query delete data
    $query = ("DELETE FROM warna WHERE id = $id_warna");
    mysqli_query($conn, $query);

    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'data-produksi.php'
        </script>
    ";
}
