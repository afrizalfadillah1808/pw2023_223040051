<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        td{
            width: 20px;
            height: 20px;
            background-color: blue;
            border: 1px solid black;
        }
    </style>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <table cellpadding="10" cellspacing="0">
        <?php 

        $baris = 1;

        for ($angka = 10; $angka >= $baris; $angka--) {
            echo "<tr>";
            for ($kolom = 1; $kolom <= $angka; $kolom++) {
                echo "<td>$kolom</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>