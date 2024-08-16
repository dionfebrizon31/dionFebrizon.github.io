<?php
include "../config/koneksi.php";

if (isset($_POST['simpan'])) {
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    // INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES ('', '');
    $simpan = mysqli_query($koneksi, "INSERT INTO kategori (`id_kategori`, `nama_kategori`) VALUES ('$id_kategori', '$nama_kategori')");

    if ($simpan) {
        echo "<script>
								alert('Data berhasil disimpan');
								window.location.href='../index.php';
							</script>";
    } else {
        echo "<script>
								alert('Data gagal disimpan');
								window.location.href='../index.php';
							</script>";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berita Hari Ini</title>
</head>

<link rel="stylesheet" href="style.css">

<body>
    
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="forminput">

            <table class="table-primary">
                <tr>
                    <td><label for="id_kategori">ID Kategori</label></td>
                    <td><input type="text" name="id_kategori" id="id_kategori"></td>
                </tr>
                <tr>
                    <td><label for="nama_kategori">nama kategori</label></td>
                    <td><input type="text" name="nama_kategori" id="nama_kategori"></td>
                </tr>
                <tr>
                    <td>
                    <td colspan="1"><button class="button-primary" type="submit" name="simpan">Simpan</button>
                        <a class="button-primary" href="../index.php">Home</a>
                    </td>

                </tr>

            </table>
    </form>
    


</body>

</html>