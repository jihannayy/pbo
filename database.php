<?php

class Database{
    public $bb='bbtoko';
    public $host='localhost';
    private $user='root';
    private $password='';

 public function insertData (){
   return 'INSERT DATA';
 }
 
 
 public static function selectData(){
   return 'SELECT DATA';
 }


 public function deleteData(){
  return 'DELETE DATA';
 }

 public function updateData(){
 return 'UPDATE DATA';

 }

 public function ambil(){
return  $this->host;
 }
}

class Psenjualan {
    public function barang(){
        return 'barang';
    }
    public static function pelanggan(){
        return 'pelanggan';
    }

}

// $usebb=new Database();
// echo $usebb->insertData();
// echo '<br>';
// echo $usebb->bb;
// echo '<br>';
// echo $usebb->ambil();
// echo '<br>';
// echo $usebb->selectData();
// echo Database::selectData();

?>