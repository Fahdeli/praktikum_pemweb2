<?php
//membuat array assosiatif
$profileArray = [
    "nama" => "FAHDELI NUGROHO", 
    "kelas" => "SI14"
];

print_r($profileArray);

$profileMultiArray = [
    [
        'nama' => 'siti',
        'kelas' => 'XTKJ2'
    ], [
        'nama' => 'Ahmad',
        'kelas' => 'XIRPL3'
    ], [
        'nama' => 'sri',
        'kelas' => 'XITKR3'
    ]
];

foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
}

// foreach($profileArray as $profile) {
//     echo $profile['nama'];
// }