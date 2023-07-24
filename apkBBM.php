<?php 

//..........

function valid(){
while(true){
$validasi = readline("Beli BBM? ( Ya / No ) = ");
switch($validasi){
    case "Ya":
       $bbm = [
                "1" => [
                    "name" => "Pertamax",
                    "harga" => "12500"
                ],
                "2" => [
                    "name" => "Pertalite",
                    "harga" => "10000"
                ],
                "3" => [
                    "name" => "Dexlite",
                    "harga" => "13000",
                ],
                "4" => [
                    "name" => "Solar",
                    "harga" => "6000",
                ],
            ];
		$indexBbm  = menu($bbm);
		math($bbm,$indexBbm);
		break;
	case "No":
		exit("Ditunggu Belanja Lagi!");
};         
}
}
//..........................
function menu(&$bbm){
echo "
________________________________
| No | Jensi     | Harga/Liter |
| -- |---------- | ----------- |
| 1  |Pertamax   | 12.500      |
| 2  |Pertalite  | 10.000      |
| 3  |Dexlite    | 13.000      |
| 4  |Solar      | 6.000       |
|______________________________|
 ";
 // Jenis BBM

 $namaHarga = readline("No Jenis BBM : ");
 return $namaHarga;
}




//..........

function math(&$bbm,$indexBbm){
// Bayar BBM 
$bayarBbm = readline("Nominal Belanja : Rp.");
// Liter BBM
$h = $bbm[$indexBbm]["harga"];

$liter = $bayarBbm / $h;
// Tunai Rupiah
$tunai = readline("Nominal Rupiah : Rp.");
// Nama Barang
$n = $bbm[$indexBbm]["name"];
$namaBbm = $n;
// Time
$time = date('l, d-m-Y');
// Tunai
$kembalian = $tunai-$bayarBbm;
echo "
_____________________________________
| Nota                              |
|-----------------------------------|
| Nama Bbm  : $namaBbm              |
| BBM       : $liter Liter             |
| Tunai     : Rp.$tunai              |
| Bayar     : Rp.$bayarBbm              |
| Kembalian : Rp.$kembalian	            |
| Tanggal   : $time  |
|___________________________________|
";

};
//....................


valid();



?>
