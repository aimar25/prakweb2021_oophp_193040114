<?php

/*
	Aimar Shacher A. K
	193040114
	https://github.com/aimar25/prakweb2021_oophp_193040114
	pertemuan 3 - 24 september 2021
	mempelajari tentang static keyword untuk mengakses method pada suatu kelas

*/
?>

<?php


// class ContohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo." . self::$angka++ . " kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
