<?php
$mahasiswa1 = ['Fahdeli'=>1,'NIM'=>'0110122088','project'=>90,'praktikum'=>100,'ipk'=>3.00];

$ar_nilai = [$mahasiswa1];

?>
<h3>Daftar Nilai Siswa</h3>
<table border="1" width="100%">
<thead>
<tr>
<th>No</th><th>NIM</th><th>project</th>
<th>praktikum</th><th>ipk</th><th>Nilai Akhir</th>
</tr>
</thead>
<tbody>
<?php
$nomor = 1;
foreach($ar_nilai as $ns){
echo '<tr><td>'.$nomor.'</td>';
echo '<td>'.$ns['NIM'].'</td>';
echo '<td>'.$ns['project'].'</td>';
echo '<td>'.$ns['praktikum'].'</td>';
echo '<td>'.$ns['ipk'].'</td>';
$nilai_akhir = ($ns['project'] + $ns['praktikum']+$ns['ipk'])/3;
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
$nomor++;
}
?>
</tbody>
</table>