<?php


$nama = $_GET['nama'];
$kelas = $_GET['id_kelas'];
//echo ini proses tambah
$koneksi = new PDO ('mysql:host=localhost;dbname=sekolah','root','');
$query =$koneksi->query('insert into siswa values("teb","WAYAN",8888)');

