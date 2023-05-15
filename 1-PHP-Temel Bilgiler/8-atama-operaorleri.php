<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atama Operatörleri</title>
</head>
<body>
    <?php
        /*
            Atama İşlemleri:

            Toplama     +=
            Çıkarma     -=
            Bölme       /=
            Çarpma      *=
        */

        $Atama = 400;
        echo "Atama değişkenin değeri: " . $Atama;

        echo "<br>";

        // Toplama:

        // $Atama değişkenine 500 ekledik. $Atama değişkeni içerisinde zaten 400 vardı, 500 daha eklemek için iki yöntemimiz var:
        // 1. yöntem: $Atama += 500;
        // 2. yöntem: $Atama = $Atama + 500;

        // Not: 2 yöntemde aynı işlevselliğe sahiptir.

        $Atama += 500;
        echo "Atama değişkenin değeri: " . $Atama;
        // Sonuç: 900;

        echo "<br>";

        // Çıkarma:
    
        // $Atama değişkeni 900 değerine sahipti. 500 çıkardık. Yeni sonucumuzun değeri 400'tür:
        
        $Atama -= 500;
        echo "Atama değişkenin değeri: " . $Atama;
        // Sonuç: 400

        echo "<br>";

        // Bölme:
    
        // $Atama değişkeni 400 değerine sahipti. 2 ile böldük. Yeni sonucumuzun değeri 200'dür:
        
        $Atama /= 2;
        echo "Atama değişkenin değeri: " . $Atama;
        // Sonuç: 200

        echo "<br>";

        // Çarpma:
    
        // $Atama değişkeni 200 değerine sahipti. 4 ile çarptık. Yeni sonucumuzun değeri 800'dür:
        
        $Atama *= 4;
        echo "Atama değişkenin değeri: " . $Atama;
        // Sonuç: 800
    ?>
</body>
</html>