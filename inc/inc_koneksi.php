<?php 
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "healtcare";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Gagal terkoneksi");
}