<?php
include "config/koneksi.php";
$idproject = $_GET['idproject'];
$query = mysqli_query($koneksi, "SELECT * FROM myproject WHERE id='$idproject'");
$data = mysqli_fetch_array($query);
if (isset($_POST['ubah'])) {

    $tittle = $_POST['tittle'];
    $deskripsi = $_POST['deskripsi'];
    // unlink('asset/' . $data['gambar']);


    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $nama_file = $_FILES['gambar']['name'];
    $x = explode('.', $nama_file);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            $target_dir = 'asset/';
            $target_file = $target_dir . basename($nama_file);

            if (move_uploaded_file($file_tmp, $target_file)) {


                $simpan = mysqli_query($koneksi, "UPDATE `myproject` SET `tittle`='$tittle',`text`='$deskripsi',`gambar`='$nama_file' WHERE id='$idproject'");

                if ($simpan) {
                    echo "<script>
                                alert('Data berhasil disimpan');
                                window.location.href='index.php';
                            </script>";
                } else {
                    echo "<script>
                                alert('Data gagal disimpan');
                                window.location.href='index.php';
                            </script>";
                }


            } else {
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }


}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Navbar -->
    <nav id="navbarku" class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Dion Febrizon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="index.php" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#projects">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contacs">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inputproject.php">Input Project</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->
    <!-- Jumbo Tron -->

    <!-- Form Input -->
    <form action="" method="post" enctype="multipart/form-data">

        <div class="container" style="margin-top:4rem">
            <div class="row">
                <div class="mb-3">
                    <label for="tittle" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="tittle" name="tittle" value="<?= $data['tittle'] ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="tittle" name="deskripsi" value="<?= $data['text'] ?>">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Upload Gambar</label>
                </div>
                <div class="mb-3">

                    <img src="asset/<?= $data['gambar'] ?>" width="200px" alt="..." />
                </div>
                <div class="mb-3">

                    <input class="form-control" type="file" id="gambar" name="gambar">
                </div>
                <button class="btn btn-primary" type="submit" name="ubah">Simpan</button>
            </div>
        </div>

    </form>


    <!-- akhir form input -->


    <section>

    </section>
</body>



</html>