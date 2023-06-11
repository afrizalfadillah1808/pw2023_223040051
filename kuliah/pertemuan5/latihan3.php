<?php
// array multidimensi  
$binatang = [['Kucing','Hitam'], ['Kelinci', 'Putih'], ['Monyet', 'Abu-abu']];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Farm 2.0</title>
</head>
<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for($i = 0; $i < count($binatang); $i++) { ?>
        <li>
            <?= $binatang[$i][0]; ?> - <?= $binatang[$i][1]; ?>            
        </li>
        <?php } ?>
    </ul>    


</body>
</html>