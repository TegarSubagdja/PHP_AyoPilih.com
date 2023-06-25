<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan RT 5 RW 15</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .card-img-top {
            width: 150px;
            object-fit: cover;
        }
    </style>
    <!-- Google Fonts - Poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand text-white" href="#">AyoPilih.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#candidates">Kandidat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="D_voting.php">Voting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contact">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-warning" href="D_login.php">Admin</a>
                </li>
            </ul>
        </div>
    </nav>


    <header class="bg-warning py-5 d-flex align-items-center" style="height: 400px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="text-white font-weight-bold">PEMILIHAN KETUA RT 05</h1>
                    <p class="text-white">Ayo pilih pemimpin yang terbaik untuk RT kita!</p>
                    <a href="D_voting.php" class="btn btn-primary btn-lg">Mulai Memilih</a>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img src="Assets/rt.jpg" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </header>

    <section id="about" class="py-5">
        <div class="container ">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <h2>Tentang</h2>
                    <p>Pemilihan ketua RT sering kali dilakukan dengan cara manual yang tidak efisieun,
                        oleh karena itu dibuatlah website ini untuk membantu proses pemilihan menjadi lebih mudah dan efisien</p>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="Assets/vote.jpg" class="img-fluid rounded-lg" width="300px">
                </div>
            </div>
        </div>
    </section>

    <section id="candidates" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Kandidat</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="d-flex justify-content-center p-5">
                            <img src="Assets/kandidat1.jpg" class="card-img-top" alt="Kandidat 1">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Rocky Gerung</h5>
                            <p class="card-text">Deskripsi kandidat 1. <span id="toggleDesc1" class="collapse">Rocky Gerung adalah seorang intelektual, filsuf, dan tokoh publik Indonesia. Ia dikenal karena pandangannya yang tajam dan sering kontroversial mengenai berbagai isu sosial dan politik di Indonesia. Lahir pada 14 Februari 1959 di Tanjung, Kalimantan Selatan, Rocky Gerung memiliki latar belakang dalam bidang filsafat dan pernah mengajar di beberapa universitas di Indonesia, termasuk Universitas Indonesia dan Institut Kesenian Jakarta.</span></p>
                            <div class="d-flex flex-column">
                                <a href="#" data-toggle="collapse" data-target="#toggleDesc1" class="btn-link text-secondary">Lihat Selengkapnya</a>
                                <a href="D_voting.php" class="btn btn-warning mt-2">Pilih</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="d-flex justify-content-center p-5">
                            <img src="Assets/kandidat2.jpg" class="card-img-top" alt="Kandidat 2">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mahfud MD</h5>
                            <p class="card-text">Deskripsi kandidat 2. <span id="toggleDesc2" class="collapse">Mahfud MD, yang nama lengkapnya Mahfud Mahmodin, adalah seorang politikus, ahli hukum, dan mantan Ketua Mahkamah Konstitusi Republik Indonesia. Ia lahir pada tanggal 13 Mei 1957 di Sampang, Jawa Timur, Indonesia.</span></p>
                            <div class="d-flex flex-column">
                                <a href="#" data-toggle="collapse" data-target="#toggleDesc2" class="btn-link text-secondary">Lihat Selengkapnya</a>
                                <a href="D_voting.php" class="btn btn-warning mt-2">Pilih</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="d-flex justify-content-center p-5">
                            <img src="Assets/kandidat3.jpg" class="card-img-top" alt="Kandidat 3">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Fahri Hamzah</h5>
                            <p class="card-text">Deskripsi kandidat 3. <span id="toggleDesc3" class="collapse">Fahri Hamzah adalah seorang politikus dan tokoh publik Indonesia. Ia lahir pada tanggal 11 Agustus 1971 di Medan, Sumatera Utara, Indonesia. Fahri Hamzah dikenal sebagai anggota Dewan Perwakilan Rakyat (DPR) Indonesia yang mewakili Partai Keadilan Sejahtera (PKS). Ia aktif dalam berbagai kegiatan politik dan telah menduduki posisi di partainya, termasuk Wakil Sekretaris Jenderal dan Wakil Ketua.</span></p>
                            <div class="d-flex flex-column">
                                <a href="#" data-toggle="collapse" data-target="#toggleDesc3" class="btn-link text-secondary">Lihat Selengkapnya</a>
                                <a href="D_voting.php" class="btn btn-warning mt-2">Pilih</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="voting" class="py-5">
        <div class="container">
            <div class="voting text-center">
                <h2>Voting</h2>
                <p>Anda dapat memberikan suara Anda untuk memilih RT dengan mengisi formulir di bawah ini.</p>
            </div>
            <form hrep="D_voting.php" method="POST">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
                </div>
                <div class="form-group">
                    <label for="candidate">Pilih Kandidat</label>
                    <select class="form-control" id="candidate">
                        <option value="kandidat1">Kandidat 1</option>
                        <option value="kandidat2">Kandidat 2</option>
                        <option value="kandidat3">Kandidat 3</option>
                    </select>
                </div>
                <a type="submit" href="D_voting.php" class="btn btn-warning" name="voting">Kirim</a>
            </form>
        </div>
    </section>

    <section id="masukan" class="py-5 bg-light">
        <div class="container">
            <div class="masukan text-center">
                <h2>Masukan</h2>
                <p>Anda dapat memberikan masukan Anda dengan mengisi formulir di bawah ini.</p>
            </div>
            <form action="E_input_masukan.php" method="POST">
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat email Anda" required>
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="nama" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="form-group">
                    <label for="masukan">Masukan Anda</label>
                    <textarea class="form-control" id="masukan" rows="5" name="masukan" placeholder="Masukkan masukan Anda" required></textarea>
                </div>
                <input class="btn btn-warning" type="submit" value="Kirim">
            </form>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container d-flex flex-column align-items-center">
            <h2 class="text-center mb-5">Kontak</h2>
            <div class="row">
                <div class="col-md-6">
                    <h4>Alamat</h4>
                    <p>Jl. Contoh Alamat, Kota, Negara</p>
                </div>
                <div class="col-md-6">
                    <h4>Email</h4>
                    <p>info@pemilihankampung.com</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-3 bg-dark">
        <p class="text-white">Hak Cipta &copy; 2023 Pemilihan RT</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
