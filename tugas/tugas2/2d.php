<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for ($baris= 1; $baris <= 5 ; $baris++) {
                echo "<tr>";
                for ($kolom = 1; $kolom <= 5 ; $kolom++) {
                  $kotak = $baris + $kolom;
                  if ($kotak % 2 == 0) {
                    echo "<td height='100px' width='100px' style='background:#000'></td>";
                  } else {
                    echo "<td height='100px' width='100px' style='background:#fff'></td>";
                  }
                }
                echo "</tr>";
              }
        ?>
    </table>
</body>
</html>