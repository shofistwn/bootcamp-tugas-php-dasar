<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP Dasar</title>
</head>

<body>
    <?php

    function luasLingkaran($i)
    {
        $r = $i / 3;
        $hasil = 3.14 * $r * $r;
        return number_format((float)$hasil, 2, '.', '');
    }

    function kelilingLingkaran($i)
    {
        $r = $i / 5;
        $hasil = 2 * 3.14 * $r;
        return number_format((float)$hasil, 2, '.', '');
    }

    function luasPersegi($i)
    {
        $p = $i / 3;
        $l = $i / 5;
        $hasil = $p * $l;
        return "Luas persegi dengan Panjang = " . $p . " dan Lebar = " . $l . " adalah " .number_format((float)$hasil, 2, '.', '');
    }

    for ($i = 1; $i <= 100; $i++) {
        echo $i . "<br>";

        if ($i % 3 == 0) {
            echo "Luas lingkaran dengan r = " . $i . " adalah " . luasLingkaran($i) . "<br>";
        }
        if ($i % 5 == 0) {
            echo "Keliling lingkaran dengan r = " . $i . " adalah " . kelilingLingkaran($i) . "<br>";
        }
        if ($i % 3 == 0  && $i % 5 == 0) {
            echo luasPersegi($i) . "<br>";
        }
    }

    ?>
</body>

</html>