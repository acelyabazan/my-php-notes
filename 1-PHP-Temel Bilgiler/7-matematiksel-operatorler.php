<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematiksel Operatörler</title>
</head>
<body>
    <?php

        /*  Matematiksel İşlemler:
            Toplama     +
            Çıkarma     -
            Bölme       /
            Çarpma      *
        */

        $Numara1 = 50;
        $Numara2 = 10;

        // Toplama İşlemi:
        // İki yöntem ile yapılabilinir:

        echo "<h3> Toplama İşlemi </h3>";

        // Çizgi görünümünü sağlıyoruz <hr>:
        echo "<hr>";

        // 1. yöntem:
        echo "<h4> 1. Yöntem: </h4>";

        echo $Numara1 . " + " . $Numara2 . " = ";
        echo $Numara1 + $Numara2;
        // Sonuç: 60

        // Alt satıra geçiş yapıyoruz <br>:
        echo "<br>";

        // 2. yöntem:
        echo "<h4> 2. Yöntem: </h4>";
        
        $Toplam = $Numara1 + $Numara2;
        echo $Numara1 . " + " . $Numara2 . " = " . $Toplam;

        // Alt satıra geçiş yapıyoruz (2 tane <br> etiketi kullandım):
        echo "<br>";
        echo "<br>";

        // Çıkarma İşlemi:
        // Not: Toplama işlemindeki gibi her dört işlemde iki seçenek vardır. Ben sadece toplama işlemi bölümünde gösterdim. Diğer kalan işlemlerde sadece 1 tanesini uygulayacağım.
        
        echo "<h3> Çıkarma İşlemi </h3>";

        // Çizgi görünümünü sağlıyoruz <hr>:
        echo "<hr>";
        
        $Cikarma = $Numara1 - $Numara2;
        echo $Numara1 . " - " . $Numara2 . " = " . $Cikarma;

        // Alt satıra geçiş yapıyoruz (2 tane <br> etiketi kullandım):
        echo "<br>";
        echo "<br>";

        // Bölme İşlemi:
        echo "<h3> Bölme İşlemi </h3>";

        // Çizgi görünümünü sağlıyoruz <hr>:
        echo "<hr>";

        $Bolme = $Numara1 / $Numara2;
        echo $Numara1 . " / " . $Numara2 . " = " . $Bolme;

        // Alt satıra geçiş yapıyoruz (2 tane <br> etiketi kullandım):
        echo "<br>";
        echo "<br>";

        // Çarpma İşlemi:
        echo "<h3> Çarpma İşlemi </h3>";

        // Çizgi görünümünü sağlıyoruz <hr>:
        echo "<hr>";

        $Carpma = $Numara1 * $Numara2;
        echo $Numara1 . " x " . $Numara2 . " = " . $Carpma;
    ?>
</body>
</html>