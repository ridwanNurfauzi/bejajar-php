<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title>
    <style>
        body{
            font-family: Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>

<body>
    <center>
        <h1>
            Hasil Ujian Nasional
        </h1>

        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="mtk" id="mtk"></td>
                </tr>
                <tr>
                    <td>Bahasa Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="indo" id="indo"></td>
                </tr>
                <tr>
                    <td>Bahasa Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="ing" id="ing"></td>
                </tr>
                <tr>
                    <td>Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="prod" id="prod"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" id="proses" value="PROSESSS"></td>
                </tr>
            </table>
        </form>

        <table>
            <?php

            if (isset($_POST["proses"])) {
                $nama = $_POST["nama"];
                $mtk = $_POST["mtk"];
                $indo = $_POST["indo"];
                $ing = $_POST["ing"];
                $prod = $_POST["prod"];

                $nAkhir = ($mtk + $indo + $ing + $prod) / 4;
                if ($nAkhir >= 75) {
                    $status = "Lulus";
                } else {
                    $status = "Tidak Lulus";
                }
                echo "<tr> <td>Nama</td><td>:</td><td>$nama</td></tr>";
                echo "<tr> <td>Nilai Matematika</td><td>:</td><td>$mtk</td></tr>";
                echo "<tr> <td>Nilai Bahasa Indonesia</td><td>:</td><td>$indo</td></tr>";
                echo "<tr> <td>Nilai Bahasa inggris</td><td>:</td><td>$ing</td></tr>";
                echo "<tr> <td>Nilai Produktif</td><td>:</td><td>$prod</td></tr>";
                echo "<tr> <td>Nilai Akhir</td><td>:</td><td>$nAkhir</td></tr>";
                echo "<tr> <td>Status</td><td>:</td><td><i><b>$status</b></i></td></tr>";
            }


            ?>
        </table>
    </center>
</body>

</html>