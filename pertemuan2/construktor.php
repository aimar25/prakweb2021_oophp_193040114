<? php

class Produk {
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct ( $judul = "judul", $penulis = "penulis",
	 $penerbit = "penerit", $harga = 0 ) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}	   

	public function getLabel () {
		return "$this->penulis, $this->penerbit";
	}




}



$Produk1 = new Produk ("Naruto", "Manashi Kisimoti", "Shonen Jjump", 30000);

$Produk2 = new Produk ("Uncharted", "Neil Druckmann", "Sony Computer", 25000);

$Produk3 = new Produk ("DdragonBall");

echo "Komik : " . $Produk3->getLabel();
echo "<br>";
echo "Game : " . $Produk4->getLabel();