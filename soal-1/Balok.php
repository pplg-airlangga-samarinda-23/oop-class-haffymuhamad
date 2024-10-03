<?php
class Balok
{
    // Deklarasikan atribut-atribut kelas Balok
    private $panjang;
    private $lebar;
    private $tinggi;

    // Definisikan metode konstruktor
    public function __construct($panjang, $lebar, $tinggi)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }

    // Definisikan metode setter
    public function setPanjang($panjang)
    {
        $this->panjang = $panjang;
    }

    public function setLebar($lebar)
    {
        $this->lebar = $lebar;
    }

    public function setTinggi($tinggi)
    {
        $this->tinggi = $tinggi;
    }

    // Definisikan metode getter
    public function getPanjang()
    {
        return $this->panjang;
    }

    public function getLebar()
    {
        return $this->lebar;
    }

    public function getTinggi()
    {
        return $this->tinggi;
    }

    // Definisikan metode menghitung volume
    public function hitungVolume()
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }

    // Definisikan metode menghitung luas permukaan
    public function hitungLuasPermukaan()
    {
        return 2 * ($this->panjang * $this->lebar + $this->lebar * $this->tinggi + $this->tinggi * $this->panjang);
    }
}

$balok_1 = new Balok(4, 8, 5);
$balok_2 = new Balok(3, 10, 12);

// Contoh output:
echo "Balok\n";
echo "Balok 1\n";
echo "Volume: " . $balok_1->hitungVolume() . "\n";
echo "Luas Permukaan: " . $balok_1->hitungLuasPermukaan() . "\n\n";

echo "Balok 2\n";
echo "Volume: " . $balok_2->hitungVolume() . "\n";
echo "Luas Permukaan: " . $balok_2->hitungLuasPermukaan() . "\n";