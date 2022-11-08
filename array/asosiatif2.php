<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Besti Kelas 11 RPL 1</title>
</head>

<body>

    <h1 style="text-align: center;">Besti Kelas 11 RPL 1</h1>
    <?php

    $siswa = [
        // [
        //     "nama" => "M. Atthar Malika Putra",
        //     "tanggalLahir" => "6 Mei 2005",
        //     "kelas" => "XI RPL 1",
        //     "hobi" => ["Main Game", "Memasak"],
        //     "cita" => "Programmer"
        // ],
        // [
        //     "nama" => "Devin Ferdinand",
        //     "tanggalLahir" => "2 Desember 2005",
        //     "kelas" => "XI RPL 1",
        //     "hobi" => ["Main Bola"],
        //     "cita" => "Jadi orang sukses"
        // ],
        // [
        //     "nama" => "M. Daffa Fauzan",
        //     "tanggalLahir" => "4 Desember 2005",
        //     "kelas" => "XI RPL 1",
        //     "hobi" => ["Tidur","menulis"],
        //     "cita" => "Jadi orang kaya"
        // ],
        [
            "nama" => "M. Andhika Rustandi",
            "tanggalLahir" => "6 Mei 2006",
            "kelas" => "XI RPL 1",
            "hobi" => [
                      ["detail_hobi"=>"Mengaji"],
                      ["detail_hobi"=>"Tidur"]
                    ],
            "cita" => "Tukang Servis"
        ],
        // [
        //     "nama" => "Ikbal MiftahUdin",
        //     "tanggalLahir" => "15 November 2005",
        //     "kelas" => "XI RPL 1",
        //     "hobi" => ["Main Bola", "tidur", "Mengaji"],
        //     "cita" => "TNI"
        // ],
    ];

    foreach ($siswa as $data) {
        echo "Nama : " . $data["nama"] . "<br>";
        echo "Tanggal Lahir : " . $data["tanggalLahir"] . "<br>";
        echo "kelas : " . $data["kelas"] . "<br>";
        echo "Hobi : ";
        echo "<ul>";
        foreach ($data["hobi"] as $hobi) {
            echo "<li>" . $hobi["detail_hobi"] . "</li>";
        }
        echo "</ul>";
        echo "<hr>";
    }

    ?>
</body>

</html>