<?php include "../config/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <table class="table-primary table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Kategori</th>
                            <th scope="col">Judul Berita</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM kategori");

                        while ($tampil = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $tampil['id_kategori']; ?></td>
                                <td><?php echo $tampil['nama_kategori']; ?></td>
                                <td>
                                    <a href="ubah.php?id_kategori=<?php echo $tampil['id_kategori']; ?>"
                                        class="btn btn-primary">Ubah</a>
                                    <a href="hapus.php?id_kategori=<?php echo $tampil['id_kategori']; ?>"
                                        class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>

                <a href="../index.php"  class="btn btn-primary">Home</a>
            </div>
        </div>
    </div>

</body>

</html>