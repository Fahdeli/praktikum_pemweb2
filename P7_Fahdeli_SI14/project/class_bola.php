<?php
class Bola {
    private $jari;

    function __construct($jari) {
        $this->jari - $jari;
    }
    public function hitungVolume() {
        return (4/3) * 3.14 * pow($this->jari, 3);
    }
}
$bola = new Bola (8);
$volumeBola = $bola->hitungVolume();
echo "volume Bola:" . $volumeBola;