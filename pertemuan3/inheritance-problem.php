<?php

/*
	Aimar Shacher A. K
	193040114
	https://github.com/aimar25/prakweb2021_oophp_193040114
	pertemuan 3 - 24 september 2021
	mempelajari tentang inheritance yaitu relasi antara kelas parent dan banyak child class

*/
?>

<?php


class Produk{

    public $judul, 
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe; 

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
    $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if( $this->tipe == "Komik" ){
            $str .= " - {$this->jmlHalaman} Halaman.";
        }else{
            $str .= " - {$this->waktuMain} Jam.";
        }

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


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");


echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();