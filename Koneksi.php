<?php
$dbh = new PDO('mysql:host=localhost;dbname=sekolaha', 'root', '');
$query = $dbh->query("select * from siswa");

?>

<h1>data siswa</h1>
<?php while ($result = $query->fetch()) { ?>
    <p><?= $result['nama']; ?>
    <?php } ?>