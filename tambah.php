<?php
    $result = null;
   if (isset($_POST['hasil'])) {
    $x = $_POST['angka1'];
    $y = $_POST['angka2'];

    $result = $x + $y;
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PROGRAM PENAMBAHAN ANGKA</h1>
    <form action="tambah.php" method="POST">
        <input type="number" placeholder="masukan angka pertama" name="angka1">
        <input type="number" placeholder="masukan angka kedua" name="angka2" require>
        <button type="submit" name="hasil">Hasil</button>
    </form>
    <?php if ($result !== null): ?>
        <h2>Hasil: <?= htmlspecialchars($result) ?></h2>
    <?php endif; ?>

    <button><a href="index.php">Keluar</a></button>

</body>
</html>