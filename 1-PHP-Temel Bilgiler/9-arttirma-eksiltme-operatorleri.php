<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arttırma ve Eksiltme Operatörleri</title>
</head>
<body>
    <?php
        // Arttırma ve eksiltme operatörleri:

        $Atama = 10;

        // Bir değişkenin değerini 1 arttırmak istiyorsak, $Atama++ işlemini gerçekleştiririz:
        // $Atama değişkenimizin değeri 10'dur. 1 Arttırmak istediğimiz için aşağıdaki işlemi gerçekleştiriyoruz:
        $Atama++;
        echo "Atama değişkenimizin değeri: " . $Atama;
        // Sonuç: 11

        echo "<br>";

        // $Atama değişkenimizin şuanki değeri 11'dir. Ben değişkenimizi 1 azaltamk istiyorum ve değerimizin 10 olmasını istiyorum:
        $Atama--;
        echo "Atama değişkenimizin değeri: " . $Atama;
        // Sonuç: 10

        echo "<br>";

    ?>
</body>
</html>