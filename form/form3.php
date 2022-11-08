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
        <h1>KKM</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nilai</td>
                    <td>:</td>
                    <td><input type="number" name="bilangan1" id="bilangan1" min="0" max="100"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="hitung" id="hitung"></td>
                </tr>
            </table>
            <hr>
        </form>
        <?php

        if(isset($_POST["hitung"])){
            $angka1 = $_POST["bilangan1"];

            if($angka1 >= 75){
                $status = "Lulus";
            }
            else{
                $status = "Tidak Lulus";
            }

            echo $status;
        }

        ?>
    </center>
</body>
</html>