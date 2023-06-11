<?php 
    $npm = 51;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas 1b</title>
</head>
<body>
    <p>
        Aku adalah angka <b> <?php echo $npm; ?> </b> <br>
        Jika aku dikali 5, maka aku sekarang menjadi <b> <?php echo $npm = 5 * $npm; ?> </b> <br>
        Jika aku dibagi 2, maka aku sekarang menjadi <b> <?php echo $npm = $npm / 2;  ?> </b> <br>
        Jika aku ditambah 75, maka aku sekarang menjadi <b> <?php echo $npm = $npm + 75; ?> </b> <br>
        Jika aku dikurangi 20, maka aku sekarang menjadi <b> <?php echo $npm = $npm - 20; ?> </b>
    </p>
</body>
</html>