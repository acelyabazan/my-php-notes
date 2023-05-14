<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Değişkenler ile Uygulama</title>
</head>
<body>
    <?php
        // Ad, soyad, no değişkenlerini tanımlayalım. İçeriğine bilgileri girelim. Ad ve soyad ayrı alınıp birleşkeler yazılsın. Altına no değeri yazılsın ve arada çizgi kullanalım.

        $Ad = "Açelya";
        $Soyad = " Bazan";
        $No = 1500;

        echo "<h1> Bilgilerin </h1>";
        echo "<hr>";

        echo "Hoş geldin " . $Ad . $Soyad . "!";

        echo "<br>";
        echo "Numaranız: " . $No;
    ?>
</body>
</html>