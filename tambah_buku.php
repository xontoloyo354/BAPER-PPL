<?php
include('./balikkelogin.php');

require_once('db_login.php');
if (isset($_POST['tambah'])) {
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahunterbit = $_POST["tahun-terbit"];
    $jumlahcopy = $_POST["jumlah-copy"];
    // filter_input(INPUT_POST, 'hospital', FILTER_SANITIZE_STRING);
    $kategori = $_POST["kategori"];
    $letakbuku = $_POST["letak-buku"];
    $sinopsis = $_POST["sinopsis"];
    $gambarbuku = $_POST["gambar-buku"];


    $sql = "INSERT INTO buku (penulis,judul,sinopsis,jumlah_copy,kategori,letak_buku,tahun_terbit,gambar_buku) VALUES ('$judul','$penulis','$tahunterbit','$jumlahcopy','$kategori','$letakbuku','$sinopsis','$gambarbuku')";

    //Kondisi apakah berhasil atau tidak
    if (mysqli_query($db, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- FONT AWESOME -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="Front end/style/tambah_buku.css" />
    <title>Baper!</title>
</head>

<body>
    <!-- NAVBAR -->
    <?php
    include('nav_admin.php');
    ?>

    <header>
        <div class="container" style="padding-top: 12%; padding-left: 29%;">
            <div class="bg-tmb">
                <div class="tmb-buku">
                    <div class="row">
                        <form action="" method="POST">
                            <div class="hd-tmb">
                                <div class="col">
                                    <h1>Tambah Buku</h1>
                                </div>
                            </div>
                            <div class="tmb" style="padding-left: 10%; padding-right: 10%;">
                                <div class="col">
                                    <input type="text" placeholder="Judul Buku" name="judul">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Penulis" name="penulis">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Tahun Terbit" name="tahun-terbit">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Jumlah Copy" name="jumlah-copy">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Kategori" name="kategori">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Letak Buku" name="letak-buku">
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Sinopsis" name="sinopsis">
                                </div>
                                <div class="col">
                                    <p>Upload Cover Buku</p>
                                    <input type="file" name="gambar-buku">
                                </div>
                                <div class="col" style="padding-left: 120px;">
                                    <button type="submit" class="btn btn-dark" name="tambah">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <footer class="Footer-menu mt-5 border-top" id="Section-footer">
        <div class="container" style="background-color: #2c2c2c;">
            <div class="footers pt-4 pb-4 pt-lg-5 pb-lg-5">
                <div class="row justify-content-center">
                    <div class="col-12 pt-3">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3 mb-3">
                                <ul class="list-unstyled footer-link-list">
                                    <li><img class="mb-2 imglogobrand" src="Front end/image/Group 103.png" alt="imgLogo" /></li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3 gradi">
                                <h5 class="mb-3 border-bottom pb-2">Information</h5>
                                <ul class="list-unstyled footer-link-list">
                                    <li><a class="text-decoration-none" href="#">Home</a></li>
                                    <li><a class="text-decoration-none" href="#">User</a></li>
                                    <li><a class="text-decoration-none" href="#">Perpustakaan</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-3 get-connected">
                                <h5 class="mb-3 pb-2 border-bottom">Contact</h5>
                                <ul class="list-unstyled footer-link-list">
                                    <li>
                                        1234 Sample Street <br />
                                        Austin Texas 78704
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-2 get-connected">
                                <h5 class="mb-3 pb-2 border-bottom">Social Media</h5>
                                <div class="icon">
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 pt-3 pb-3 copyright border-top" id="footer-copyright">
            <div class="container text-white" style="background-color: #2c2c2c;">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-center my-1">&copy; 2021 | Perpustakann Baper</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9f1690ea.js" crossorigin="anonymous"></script>

</body>

</html>