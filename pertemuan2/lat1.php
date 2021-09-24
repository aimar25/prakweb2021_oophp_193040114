<? php

class Produk {
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;

	public function getLabel () {
		return "$this->penulis, $this->penerbit";
	}
}

//$Produk1 = new Produk ();
//$Produk1->judul = "naruto";

//$produk2->penulis = "Aimar";
//$produk2->halaman = 11;


$Produk3 = new Produk ();
$Produk3->judul = "Naruto";
$Produk3->penulis = "Manashi Kisimoti";
$Produk3->penerbit = "Shonen Jjump";
$Produk3->harga = 30000;



$Produk4 = new Produk ();
$Produk4->judul = "Uncharted";
$Produk4->penulis = "Neil Druckmann";
$Produk4->penerbit = "Sony Computer";
$Produk4->harga = 25000;

echo "Komik : " . $Produk3->getLabel();
echo "<br>";
echo "Game : " . $Produk4->getLabel();