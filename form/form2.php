<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Aritmatika</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Bilangan ke-1</td>
                    <td>:</td>
                    <td><input type="number" name="bilangan1" id="bilangan1"></td>
                </tr>
                <tr>
                    <td>Bilangan ke-2</td>
                    <td>:</td>
                    <td><input type="number" name="bilangan2" id="bilangan2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="hitung" value="HITUNG"></td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST["hitung"])) {
            $angka1 = $_POST["bilangan1"];
            $angka2 = $_POST["bilangan2"];

            $hasil = $angka1 + $angka2;

            echo "Hasilnya adalah $hasil";
        }
        ?>
    </center>
</body>

</html>