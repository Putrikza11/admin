<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/conn/koneksi.php');

$id_bahan = $_GET["id"];

if (isset($id_bahan) > 0 ) {
    // query delete data
    $query = ("DELETE FROM bahan WHERE id = $id_bahan");
    mysqli_query($conn, $query);

    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'data-produksi.php'
        </script>
    ";
}


?>