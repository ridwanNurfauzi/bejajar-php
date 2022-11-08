<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>

<body>
    <center>
        <h1>Form Biodata Diri</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempatL"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggalL"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="laki-laki">Laki-laki
                        <input type="radio" name="jk" value="perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="Tidak ada">Tidak ada</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="pendidikan" id="pendidikan">
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
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="status">
                            <option value="Sudah Menikah">Sudah Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Duda">Duda</option>
                            <option value="Janda">Janda</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td>
                        <select name="cita" id="cita">
                            <option value="Programer">Programer</option>
                            <option value="Pilot">Pilot</option>
                            <option value="Petani">Petani</option>
                            <option value="Presiden">Presiden</option>
                            <option value="Orang kaya">Orang kaya</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata-kata Bijak</td>
                    <td>:</td>
                    <td>
                        <textarea name="kata" id="kata" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="kirim" value="KIRIMM">
                    </td>
                </tr>
            </table>
        </form>
        <hr>
        <table cellpadding="3">
            <?php
            if (isset($_POST["kirim"])) {
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

                echo "<tr> <td> nama</td><td>:</td><td> $nama </td> </tr>";
                echo "<tr> <td> Tempat Lahir</td><td>:</td><td> $tempatL </td> </tr>";
                echo "<tr> <td> Tanggal Lahir</td><td>:</td><td> $tanggalL </td> </tr>";
                echo "<tr> <td> Jenis Kelamin</td><td>:</td><td> $jk </td> </tr>";
                echo "<tr> <td> Alamat</td><td>:</td><td> $alamat </td> </tr>";
                echo "<tr> <td> Agama</td><td>:</td><td> $agama </td> </tr>";
                echo "<tr> <td> Pendidikan Terakhir</td><td>:</td><td> $pendidikan </td> </tr>";
                echo "<tr> <td> Status</td><td>:</td><td> $status </td> </tr>";
                echo "<tr> <td> Cita-cita</td><td>:</td><td> $cita </td> </tr>";
                echo "<tr> <td> Kata-kata Bijak</td><td>:</td><td> $kata </td> </tr>";
            }
            ?>
        </table>
    </center>
</body>

</html>