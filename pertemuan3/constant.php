<?php

/*
	Aimar Shacher A. K
	193040114
	https://github.com/aimar25/prakweb2021_oophp_193040114
	pertemuan 3 - 24 september 2021
	mempelajari tentang constact ada 2 cara yaitu dengan const atau define.

*/
?>

<?php


// define('NAMA', 'Aimar');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;


// class Coba {
//     const NAMA = 'Aimar';
// }

// echo Coba::NAMA;

//echo __FILE__;

class Coba {
    public $kelas = __CLASS__;

}

$obj = new Coba;
echo $obj->kelas;





?>