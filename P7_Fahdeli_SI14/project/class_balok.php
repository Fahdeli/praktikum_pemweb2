<?php
class balok
{
    public $panjang;
    public $lebar;
    public $tinggi;

    function __construct($panjang, $lebar, $tinggi) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }
    public function hitungVolume() {
    return $this->panjang * $this->lebar * $this->tinggi;
    }
}
$balok = new balok(18, 8, 9);
$volumeBalok = $balok->hitungVolume();
echo "volumeBalok: " . $volumeBalok . "<br>";