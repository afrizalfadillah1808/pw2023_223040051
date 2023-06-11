<?php  
$perangkat_keras = ['Motherboard', 'Processor', 'Hard Disk', 'PC Coller', 'VGA Card', 'SSD'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
    <?php foreach ($perangkat_keras as $pk) { ?>
        <li>
            <?= $pk ?>            
        </li>
        <?php } ?>
    </ol>

    <?php array_unshift($perangkat_keras, 'Card Reader', 'Modem') ?>
            <?php sort($perangkat_keras) ?>
            
    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ol>
        <?php foreach ($perangkat_keras as $pk) { ?>
        <li>
            <?= $pk ?>            
        </li>
        <?php } ?>
    </ol>
    
</body>
</html>