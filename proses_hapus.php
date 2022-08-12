<?php
//koneksi
$database = new PDO('mysql:host=localhost;dbname=ppdb','root',"");
//query 
$query = $database->query('DELETE FROM calon_siswa where id=1');