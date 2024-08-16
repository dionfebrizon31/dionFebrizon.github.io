<?php
include "../config/koneksi.php";

if (isset($_GET['id_kategori'])) {
    $id_kategoriget = $_GET['id_kategori'];
    $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$id_kategoriget'");
    $data = mysqli_fetch_array($query);
}

if (isset($_POST['update'])) {
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];


    // $nama_file = $data['gambar']; // default to existing image

    $update = mysqli_query($koneksi, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");

    if ($update) {
        echo "<script>
                alert('Data berhasil diperbarui');
                window.location.href='tampilkategori.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal diperbarui');
                window.location.href='tampilkategori.php';
              </script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Berita</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <form method="POST" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="id_kategori">ID Kategori</label></td>
                <td><input type="text" name="id_kategori" id="id_kategori" value="<?php echo $data['id_kategori']; ?>">
                </td>
            </tr>
            <tr>
                <td><label for="nama_kategori">Nama Kategori</label></td>
                <td><input type="text" name="nama_kategori" id="nama_kategori"
                        value="<?php echo $data['nama_kategori']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="update">Update</button></td>
            </tr>
        </table>
    </form>
</body>

</html>