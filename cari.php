<?php
include 'sambung.php';
/**
 * @var $connection PDO

*/

$nama_mahasiswa = $_GET['nama_mahasiswa'];

$statement = $connection->query("select * from detail_mahasiswa WHERE nama_mahasiswa='$nama_mahasiswa'");
//hasilnya berupa array
$statement->setFetchMode(PDO::FETCH_ASSOC);
//JALAN KAN QUERY
$result = $statement->fetchAll();
//output 
header('Content-Type: application/json');
// echo json_encode($result);
if ($result) {
	echo json_encode($result);
}else{
	echo "Data Mahasiswa Ini tidak ada";
}