<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tek ve Çift Tırnak Arasındaki Fark</title>
</head>
<body>
    <?php
        // " Çift tırnak ve ' tek tırnak arasındaki farklar:
        
        $Ad = "Açelya";
        $Soyad = "Bazan";

        // Çift tırnak içerisinde değişken içerikleri okunurken, tek tırnak içerisindeki değişken içerikleri okunmaz:
        echo "Benim adım $Ad";
        echo "<br>";
        echo 'Benim adım $Ad';
    ?>
</body>
</html>
