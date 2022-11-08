<!-- form.php -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Form Biodata</title>

    <style>
        .load-panel{
            animation: anim 1.5s;
            visibility: hidden;
        }
        .loading{
            width: 5.5em;
            height: 5.5em;
        }
        @keyframes anim {
            0%{
                visibility: visible;
                opacity: 1;
            }
            65%{
                opacity: 1;
            }
            100%{
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Loading panel -->
    <div class="bg-light position-fixed fixed-top w-100 h-100 d-flex justify-item-center justify-content-center load-panel">
        <div class="spinner-border text-primary align-self-center justify-self-center h4 loading" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- /Loading panel -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow position-sticky sticky-top">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- /Navbar -->

    <!-- Content -->
    <br>
    <div class="container col-md-8">
        <div class="card shadow">
            <div class="card-header">
                <center>
                    <h3>Biodata</h3>
                </center>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="nama">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Anda">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="tempatL">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tempatL" id="tempatL" placeholder="Masukkan Tempat Lahir Anda">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="tanggalL">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="tanggalL" id="tanggalL">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="jk" id="lk" value="Laki-laki" checked>
                                <label class="custom-control-label" for="lk">Laki-laki</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="jk" id="pr" value="Perempuan">
                                <label class="custom-control-label" for="pr">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="alamat">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="alamat" id="alamat" rows="4" placeholder="Masukkan Alamat Anda"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="agama">Agama</label>
                        <div class="col-sm-8">
                            <select id="agama" name="agama" class="form-control">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="pendidikan">Pendidikan Terakhir</label>
                        <div class="col-sm-8">
                            <select id="pendidikan" name="pendidikan" class="form-control">
                                <option value="Tidak ada">Tidak ada</option>
                                <option value="TK">TK</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMK">SMK</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="status">Status</label>
                        <div class="col-sm-8">
                            <select id="status" name="status" class="form-control">
                                <option value="Sudah Menikah">Sudah Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Duda">Duda</option>
                                <option value="Janda">Janda</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="cita">Cita-cita</label>
                        <div class="col-sm-8">
                            <select id="cita" name="cita" class="form-control">
                                <option value="Programer">Programer</option>
                                <option value="Pilot">Pilot</option>
                                <option value="Petani">Petani</option>
                                <option value="Presiden">Presiden</option>
                                <option value="Orang kaya">Orang kaya</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="kata">Kata-kata Bijak</label>
                        <div class="col-sm-8">
                            <textarea name="kata" id="kata" class="form-control"></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group row">
                        <div class="col-sm-5">
                            <input type="submit" class="btn btn-primary" name="simpan" value="SIMPAN">
                            <input type="reset" class="btn btn-warning" value="RESET">
                        </div>
                    </div>
                    <!-- /Submit Button -->
                </form>
            </div>
        </div>
    </div>
    <!-- /Content -->

    <!-- Pembatas -->
    <div class="container">
        <hr>
    </div>
    <!-- /Pembatas -->

    <!-- Program PHP -->
    <div class="container col-md-8">
        <?php

        if (isset($_POST['simpan'])) {
            $nama = $_POST["nama"];
            $tempatL = $_POST["tempatL"];
            $tanggalL = $_POST["tanggalL"];
            $jk = $_POST["jk"];
            $alamat = $_POST["alamat"];
            $agama = $_POST["agama"];
            $pendidikan = $_POST["pendidikan"];
            $status = $_POST["status"];
            $cita = $_POST["cita"];
            $kata = $_POST["kata"];

            class Biodata
            {
                public function data($bioNama, $bioTempatL, $bioTanggalL, $bioJk, $bioAlamat, $bioAgama, $bioPendidikan, $bioStatus, $bioCita, $bioKata)
                {
                    echo "<h2 class='text-center'>Biodata Anda</h2>";
                    echo "<table class='table'>";
                    echo "<tr> <td>Nama Anda</td> <td>:</td> <td>" . $bioNama . "</td> </tr>";
                    echo "<tr> <td>Tempat Lahir</td> <td>:</td> <td>" . $bioTempatL . "</td> </tr>";
                    echo "<tr> <td>Tanggal Lahir</td> <td>:</td> <td>" . $bioTanggalL . "</td> </tr>";
                    echo "<tr> <td>Jenis Kelamin</td> <td>:</td> <td>" . $bioJk . "</td> </tr>";
                    echo "<tr> <td>Alamat</td> <td>:</td> <td>" . $bioAlamat . "</td> </tr>";
                    echo "<tr> <td>Agama</td> <td>:</td> <td>" . $bioAgama . "</td> </tr>";
                    echo "<tr> <td>Pendidikan Terakhir</td> <td>:</td> <td>" . $bioPendidikan . "</td> </tr>";
                    echo "<tr> <td>Status</td> <td>:</td> <td>" . $bioStatus . "</td> </tr>";
                    echo "<tr> <td>Cita-cita</td> <td>:</td> <td>" . $bioCita . "</td> </tr>";
                    echo "<tr> <td>Kata-kata Bijak</td> <td>:</td> <td>" . $bioKata . "</td> </tr>";
                    echo "</table>";
                }
            }
            $cetak = new Biodata;

            $cetak->data($nama, $tempatL, $tanggalL, $jk, $alamat, $agama, $pendidikan, $status, $cita, $kata);
        }

        ?>
    </div>
    <!-- /Program PHP -->

    <!-- Footer -->
    <div class="m-0 px-4 py-3 bg-light shadow shadow-lg border mt-4 w-100 text-secondary">
        <div class="container d-flex justify-content-between flex-wrap">
            <div class="py-1">
                Copyright &copy; 2022
                <a href="https://www.instagram.com/kkrdwn_" target="_blank">@kkrdwn_</a>.
            </div>
            <div class="py-1">
                Made with
                <i class="bi bi-heart-fill text-danger"></i>
            </div>
        </div>
    </div>
    <!-- /Footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

</body>

</html>