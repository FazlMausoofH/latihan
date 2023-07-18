<?php 

// $barang = [
// 	"pertamax" => "10000",
// 	"pertalit" => "7000",
// 	"solar" => "12000",
// 	"dexalite" => "15000"
// ];
// var_dump($barang);

// $jenis = readline("Masukan Jenis : ");
// var_dump("Nama Barang : $jenis " . $barang["$jenis"]);


// $liter = readline("Berapa Liter? : ");
// var_dump("Total : Rp." . $barang["$jenis"] * $liter);

// $bayar = readline("Uang : " );
// var_dump("Kembalian : Rp." . $bayar - $barang["$jenis"] * $liter);


//------------------------------------//

// echo "
// ________________________________
// | No | Jensi     | Harga/Liter |
// | -- |---------- | ----------- |
// | 1  |Pertamax   | 12.500      |
// | 2  |Pertalite  | 10.000      |
// | 3  |Dexlite    | 13.000      |
// | 4  |Solar      | 6.000       |
// |______________________________|
// ";


// $validasi = readline("Beli BBM? ( ketik Ya jika beli ) = ");
// switch($validasi){
//     case "Ya":
//         while(true){
// $namaBarang = [
// 	"1" => "Pertamax",
// 	"2" => "Pertalite",
// 	"3" => "Dexlite",
// 	"4" => "Solar"
// ];
// $hargaBarang = [
// 	"1" => 12_500,
// 	"2" => 10_000,
// 	"3" => 13_000,
// 	"4" => 15_000
// ];

// echo "
// ________________________________
// | No | Jensi     | Harga/Liter |
// | -- |---------- | ----------- |
// | 1  |Pertamax   | 12.500      |
// | 2  |Pertalite  | 10.000      |
// | 3  |Dexlite    | 13.000      |
// | 4  |Solar      | 6.000       |
// |______________________________|
//  ";
// // Jenis BBM
// $jenisBbm = readline("Jenis BBM : ");
// // Bayar BBM 
// $bayarBbm = readline("Berapa Rupiah? : ");
// // Liter BBM
// $bbm = $bayarBbm / $hargaBarang[$jenisBbm];
// // Tunai Rupiah
// $tunai = readline("Rupiah : ");
// // Nama Barang
// $namaBbm = $namaBarang[$jenisBbm];
// // Time
// $time = date('l, d-m-Y');
// // Tunai
// $kembalian = $tunai-$bayarBbm;
// echo "
// _____________________________________
// | Nota                              |
// |-----------------------------------|
// | Nama Bbm  : $namaBbm              |
// | BBM       : $bbm Liter             |
// | Tunai     : Rp.$tunai              |
// | Bayar     : Rp.$bayarBbm              |
// | Kembalian : Rp.$kembalian	            |
// | Tanggal   : $time  |
// |___________________________________|
// ";
// 	break;
// };
//     default:
//     while(false){
// 		echo ",,,,,,,,,,,,,,,";
// 		break;
// 	};            
// }


while(true){
$validasi = readline("Beli BBM? ( ketik Ya jika beli ) = ");
switch($validasi){
    case "Ya":
$namaBarang = [
	"1" => "Pertamax",
	"2" => "Pertalite",
	"3" => "Dexlite",
	"4" => "Solar"
];
$hargaBarang = [
	"1" => 12_500,
	"2" => 10_000,
	"3" => 13_000,
	"4" => 6_000
];

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
$jenisBbm = readline("No Jenis BBM : ");
// Bayar BBM 
$bayarBbm = readline("Nominal Belanja : Rp.");
// Liter BBM
$bbm = $bayarBbm / $hargaBarang[$jenisBbm];
// Tunai Rupiah
$tunai = readline("Nominal Rupiah : Rp.");
// Nama Barang
$namaBbm = $namaBarang[$jenisBbm];
// Time
$time = date('l, d-m-Y');
// Tunai
$kembalian = $tunai-$bayarBbm;
echo "
_____________________________________
| Nota                              |
|-----------------------------------|
| Nama Bbm  : $namaBbm              |
| BBM       : $bbm Liter             |
| Tunai     : Rp.$tunai              |
| Bayar     : Rp.$bayarBbm              |
| Kembalian : Rp.$kembalian	            |
| Tanggal   : $time  |
|___________________________________|
";
break;
default:
	exit("Ditunggu Belanja Lagi!");
};         
}






// $Ya = true;
// $Tidak = false;
// $bbm = readline("Beli BBM? ( Ya / tidak ) = ");
// while ($bbm){
// 	echo "...........";
// 	break;
// }

// echo "
// ___________________________
// | Nota                    |
// |-------------------------|
// | BBM :                   |
// | Bayar                   |
// | Kembalian :             |
// | Tanggal :               |
// |_________________________|
// ";

?>