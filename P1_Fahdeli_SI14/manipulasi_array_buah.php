<?php
$arrayBuah = ["strawberry","leci","melon","semangka","belimbing"];

//mengurutkan value dari array
sort($arrayBuah);

//menghapus value array yang paling terakhir
array_pop($arrayBuah);

//menghapus spesifik value pada array
unset($arrayBuah[3]);

//menambahkan value array dipaling belakang
array_push($arrayBuah, "durian");

//menghapus value array yang paling depan
array_shift($arrayBuah);

//menambahkan value array yang paling depan
array_unshift($arrayBuah, "Buah Naga");

//mengubah value array tertentu
$arrayBuah[2] = "pisang";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
 }
