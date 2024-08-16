<?php

include "config/koneksi.php"
  ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Portofolio | Dion Febrizon</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">

</head>

<body id="home">
  <!-- Navbar -->
  <nav id="navbarku" class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Dion Febrizon</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacs">Contact</a>
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
  <section class="jumbotron text-center">
    <img src="img/gambar.JPG" alt="Dion Febrizon" width="200" srcset=""
      class="rounded-circle img-thumbnail bg-secondary shadow" />
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">Teknologi Enthusias || Network.</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,96L30,112C60,128,120,160,180,154.7C240,149,300,107,360,96C420,85,480,107,540,101.3C600,96,660,64,720,69.3C780,75,840,117,900,122.7C960,128,1020,96,1080,106.7C1140,117,1200,171,1260,165.3C1320,160,1380,96,1410,64L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Jumbo Tron -->
  <!-- about -->
  <section class="about" id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2> about me</h2>
        </div>
      </div>

      <div class="row justify-content-center fs-5 text-center">
        <?php
        $sqlku = "SELECT * FROM about order by id asc";
        $hasilku = mysqli_query($koneksi, $sqlku);

        while ($datasaya = mysqli_fetch_array($hasilku)):
          ?>
          <div class="col-md-4">
            <p><?= $datasaya['detail']; ?></p>
            <a class="btn btn-primary" href="ubahabout.php?idabout=<?= $datasaya['id']; ?>">Edit</a>
          </div>
        <?php endwhile; ?>
      </div>


    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#e2edff" fill-opacity="1"
        d="M0,192L48,176C96,160,192,128,288,133.3C384,139,480,181,576,208C672,235,768,245,864,218.7C960,192,1056,128,1152,106.7C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- akhir aboutme  -->
  <!-- project -->
  <?php



  ?>
  <section id="projects">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>My Project</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <?php
        // Membuat koneksi ke database akademik
        // Pastikan Anda sudah melakukan koneksi ke database dengan variabel $koneksi
        // Perintah sql untuk menampilkan semua data pada tabel jurusan
        $sql = "SELECT * FROM myproject order by id asc";
        $hasil = mysqli_query($koneksi, $sql);

        while ($data = mysqli_fetch_array($hasil)):
          ?>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="asset/<?= $data['gambar'] ?>" class="card-img-top" height="200px" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $data['id'] . ")." . $data['tittle']; ?></h5>
                <p class="card-text"><?= $data['text'] ?></p>

                <a class="btn btn-primary" href="ubah.php?idproject=<?= $data['id']; ?>">Edit</a>
                <a class="btn btn-danger" href="hapus.php?idproject=<?= $data['id']; ?>">Hapus</a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>

        <!-- <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk
                of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,224L30,234.7C60,245,120,267,180,234.7C240,203,300,117,360,112C420,107,480,181,540,186.7C600,192,660,128,720,101.3C780,75,840,85,900,128C960,171,1020,245,1080,240C1140,235,1200,149,1260,106.7C1320,64,1380,64,1410,64L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- akhirproject -->
  <!-- Contacs -->
  <section id="contacs">
    <div class="row text-center">
      <div class="col">
        <h1>contacs me</h1>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" aria-describedby="mame">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">pesan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#0d6efd" fill-opacity="1"
        d="M0,224L48,202.7C96,181,192,139,288,122.7C384,107,480,117,576,128C672,139,768,149,864,160C960,171,1056,181,1152,176C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- Akhir Contacs -->

  <!-- footer -->
  <footer class="bg-primary text-white text-center pb-5">
    <p class="fw-bold fs-4">Create Me Love Desain <a href="#" class="text-white fw-bold"> Dion Febrizon</a> </p>

  </footer>
  <!-- akhir Foter -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!-- modall!! -->

</body>

</html>