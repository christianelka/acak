<?php
function garis($jum) {
	for ($i=0; $i<= $jum; $i++) {
		echo "=";
		}
}
echo '####################################';
echo "\r\n";
echo "\r# Copyright : @systkha - Abdul Khafid#";
echo "\r\n#       Recode by : Christo        #";
echo "\r\n";
echo '####################################';
echo "\r\n";
echo "\r\n#       Pendidikan TIK 2019        #";
echo "\r\n";
echo "\r\n####################################";
echo " \n[x]        PILIH DATA KELAS        [x]"; 
echo "\n\r            A. Kelas Ganjil     ";
echo "\n\r            B. Kelas Genap     ";
echo "\n [?] Ganjil / Genap ? (A / B) : "; 
$tipe = trim(fgets(STDIN)); 
echo "\n [?] Masukkan Total Mahasiswa : "; 
$pilih = trim(fgets(STDIN)); 
echo '####################################';
echo "\nWait for load data...\n";
sleep(2);
garis(40);
echo "\nmasukkan jumlah anggota per kelompok : ";
$jumlah = trim(fgets(STDIN)); 
echo "\nprocessing data... \n";
sleep(3);
flush();
$totalkel = $pilih / $jumlah; 
$tot = $totalkel;
if($pilih % $jumlah == 1 ) { 
	echo "\n anggota kelompok akan ada yang ganjil, sesuai kesepatakan yang ganjil akan ikut kelompok terakhir\n";
	}
	sleep(2);
garis(30);
echo "\ntotal kelompok = $tot\n";

if ($tipe == "A") {
$data = array("Abella", "Afif", "Ahmad", "Alta", "Alvin", "Amallia", "Anandito", "Arafik", "Arkan", "Azib", "Dimas", "Christian", "Dicky", "Efa", "Evarista", "Faizal", "Fayusri", "Hamid", "Hasna", "Ibrahim", "Jannah", "Jerry", "Kharisma", "Krisna", "Irji", "Azmi", "Rafi", "Rizky", "Nabila", "Ni Putu", "Otniel", "Pratiwi", "Putranto", "Ricky", "Putu", "Salik", "Wildan", "Jevon"); }// Data Kelas Ganjil
elseif ($tipe == "B") {
	$data = array("Abiyyu", "Afifu", "Alfarkhan", "Alviana", "Alwan", "Amanatuusa", "Bagas", "Auliya", "Bara", "Daryl", "Diki", "Dinda", "Eric", "Faatihah", "Farhan Syarifur", "Ditio", "Hanif", "Hijrah", "Ilham", "Armi", "Mahasiswa", "Jefferson", "Aldi", "Kirana", "Lestari", "Moh. Farhan", "Muh. Dani", "Ilyas", "Naufal", "Zain", "Nadiya", "Nur'Aini", "Philip", "Alif", "Fahmi", "Royan", "Steven", "Yenni"); // Data Kelas Genap
}
		
for ($i = 0; $i<$tot; $i++){
	garis(30);
	echo "\nkelompok ke $i\n";
	garis(30);
	for ( $ii = 0; $ii<$jumlah; $ii++) {
shuffle($data);
$hasil = array_shift($data);
sleep(1);
flush();
echo "\n$ii > $hasil\n";
}
}
?>
