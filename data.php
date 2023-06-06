<?php
include 'sambung.php';
/**
 * @var $connection PDO
*/
$statement = $connection->query("select * from detail_mahasiswa");
//atur supaya hasilnya berupa array
$statement->setFetchMode(PDO::FETCH_ASSOC);
//JALAN KAN QUERY
$result = $statement->fetchAll();
//output json
header('Content-Type: application/json');
echo json_encode($result);
