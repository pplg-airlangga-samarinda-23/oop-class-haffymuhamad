<?php
class Siswa
{
    // Deklarasikan atribut-atribut kelas Siswa
    private $nama;
    private $nis;
    private $alamat;
    private $jurusan;
    private $tanggal_lahir;

    // Definisikan metode konstruktor
    public function __construct($nama, $nis, $alamat, $jurusan, $tanggal_lahir)
    {
        $this->nama = $nama;
        $this->nis = $nis;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
        $this->tanggal_lahir = $tanggal_lahir;
    }

    // Definisikan metode setter
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setNis($nis)
    {
        $this->nis = $nis;
    }

    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function setTanggalLahir($tanggal_lahir)
    {
        $this->tanggal_lahir = $tanggal_lahir;
    }

    // Definisikan metode getter
    public function getNama()
    {
        return $this->nama;
    }

    public function getNis()
    {
        return $this->nis;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function getTanggalLahir()
    {
        return $this->tanggal_lahir;
    }

    // Buat metode untuk menghitung umur siswa
    public function hitungUmur()
    {
        $tanggal_lahir = explode("-", $this->tanggal_lahir);
        $tahun_lahir = $tanggal_lahir[2];
        $tahun_sekarang = date("Y");
        $umur = $tahun_sekarang - $tahun_lahir;
        return $umur;
    }
}

// Buat dua buah objek siswa
$siswa_1 = new Siswa("Bambang", "1234", "Loa Bakung", "PPLG", "27-11-2006");
$siswa_2 = new Siswa("Bahrun", "1235", "Air Putih", "PPLG", "13-01-2007");

// Contoh output:
if ($siswa_1->hitungUmur() > $siswa_2->hitungUmur()) {
    echo $siswa_1->getNama() . " lebih tua dibandingkan " . $siswa_2->getNama() . ".";
} elseif ($siswa_1->hitungUmur() < $siswa_2->hitungUmur()) {
    echo $siswa_2->getNama() . " lebih tua dibandingkan " . $siswa_1->getNama() . ".";
} else {
    echo $siswa_1->getNama() . " dan " . $siswa_2->getNama() . " sama tua.";
}