
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body></body>
</html>
 <a href="tambah.php" class="btn btn-danger" > tambah </a>
 <ul class="list-group">
  
<?php
 $db = new PDO("mysql:host=localhost;dbname=ppdbb",'root','');
 $query = $db->query('select * from calon_siswa');

 while ($data = $query->fetch() ) :?>
    <li  class="list-group-item"> 
        <a href="edit.php?id=<?= $data['id']; ?>">
            <?= $data['nama'] ?>
        </a>
        
        <a  href="proses_hapus.php?id=<?= $data['id']; ?>"class="btn btn-warning">
            Hapus
        </a>
 </li>
<?php endwhile ?>
 </ul>