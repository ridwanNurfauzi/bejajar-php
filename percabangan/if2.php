<?php 

$nilai = 880;

if($nilai >= 0 && $nilai <= 50){
    echo "Grade D";
}
else if($nilai >= 51 && $nilai <= 70){
    echo "Grade C";
}
else if($nilai >= 71 && $nilai <= 80){
    echo "Grade B";
}
else if($nilai >= 81 && $nilai <= 100){
    echo "Grade A";
}
else {
    echo "Nilai tidak valid";
}

?>