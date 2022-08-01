<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/conn/koneksi.php');

$id_laminasi = $_GET["id"];

if (isset($id_laminasi) > 0 ) {
    // query delete data
    $query = ("DELETE FROM laminasi WHERE id = $id_laminasi");
    mysqli_query($conn, $query);

    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'data-produksi.php'
        </script>
    ";
}
