<?php  
$binatang = ['kucing', 'kelinci', 'monyet', 'panda', 'koala', 'sapi'];
$warna = ['putih', 'hitam','abu-abu','hitam-putih','coklat', 'hitam'];
// mencetak array untuk user
// var_dump dan print_r digunakan untuk developer

// mengurutkan array
// sort() dan rsort()

sort($warna)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hope Farm</title>
</head>
<body>
    <h2>Daftar binatang</h2>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
        <li><?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2>Daftar warna</h2>
    <ul>
        <?php for ($I = 0; $I < count($warna); $I++) { ?>
        <li><?php echo $warna[$I]; ?></li>
        <?php } ?>
    </ul>

    <hr>

    <h2>Daftar binatang</h2>
    <ol>
        <?php foreach ($binatang as $sato) { ?>
        <li> <?php echo $sato; ?> </li>
        <?php } ?>
    </ol>

    <h2>Daftar warna</h2>
    <ol>
        <?php foreach ($warna as $w) { ?>
        <li> <?php echo $w; ?> </li>
        <?php } ?>
    </ol>
    
</body>
</html>
