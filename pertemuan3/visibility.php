<?php

/*
	Aimar Shacher A. K
	193040114
	https://github.com/aimar25/prakweb2021_oophp_193040114
	pertemuan 3 - 24 september 2021
	mempelajari tentang visibility dimana bisa mengatur akses property dan method, untuk memperlihatkan akses yang dibutuhkan saja, dapat menghindari dari bug.

*/
?>

<?php


class Produk{

    public $judul, 
           $penulis,
           $penerbit;

    protected $diskon = 0;

    private $harga; 

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";


        return $str;

    }

}

class Komik extends Produk {
    public $jmlHalaman;


    public function __construct ( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

        parent::__construct( $judul, $penulis, $penerbit, $harga, $jmlHalaman);

        $this->jmlHalaman = $jmlHalaman;
    }


    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct ( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {

        parent::__construct( $judul, $penulis, $penerbit, $harga, $waktuMain);

        $this->waktuMain = $waktuMain;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }


    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}


class CetakInfoProduk {
    // hanya bisa menerima type produk
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();