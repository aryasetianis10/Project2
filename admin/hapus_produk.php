<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_query($conn, "DELETE FROM produk WHERE id='" . $_GET['id'] . "'");
    if (mysqli_affected_rows($conn) > 0) {
        echo "
    <script>
        alert('Data Berhasil Dihapus');
        document.location.href='produk.php';
    </script>
    ";
    } else {
        echo "
    <script>
        alert('Data Gagal Dihapus');
        document.location.href='produk.php';
    </script>
    ";
    }
}
?>