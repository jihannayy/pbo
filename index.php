<?php

require_once './database.php';

$usebb=new Database();
echo $usebb->insertData();
echo '<br>';
echo $usebb->bb;
echo '<br>';
echo $usebb->ambil();
echo '<br>';
echo $usebb->selectData();
echo Database::selectData();
echo '<br>';
 $usepenjualan= new Penjualan();
 echo $usepenjualan->barang();
echo Penjualan ::pelanggan();




?>