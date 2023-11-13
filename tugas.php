<?php
$bintang = 14; //jumlah baris bintang

//loop untuk setiap baris bintang
for ($i = 1; $i <= $bintang; $i++) {
    //loop untuk setiap kolom pada baris bintang
    for ($j = 1; $j <= $i; $j++){
        echo '*';
    }
    echo '<br>';
}
?>