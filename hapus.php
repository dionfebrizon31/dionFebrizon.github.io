<?php
include "config/koneksi.php";

if (isset($_GET['idproject'])) {
    $idproject = $_GET['idproject'];
    if (isset($_GET['idproject'])) {
        $idproject = $_GET['idproject'];
        $query = mysqli_query($koneksi, "SELECT * FROM myproject WHERE id='$idproject'");
        $data = mysqli_fetch_array($query);
    }

    $hapus = mysqli_query($koneksi, "DELETE FROM myproject WHERE id='$idproject'");
    unlink('asset/' . $data['gambar']);
    if ($hapus) {
        echo "<script>
            alert('Data berhasil dihapus');
            window.location.href='index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal dihapus');
            window.location.href='index.php';
        </script>";
    }
}
?>