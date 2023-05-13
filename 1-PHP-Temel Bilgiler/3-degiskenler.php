<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Değişkenler</title>
</head>
<body>
    <?php

        // Değişkenlere giriş:
        // Değişken isimlendirirken önüne dolar($) işareti koyuyoruz:

        // Aşağıdaki değişkenler string(metinsel ifade) ifadelerdir:
        $Ad = "Açelya";
        $SoyAd = " Bazan";
        $EgitimPlatformu = " Udemy";

        echo $Ad.$SoyAd.$EgitimPlatformu; // => Değişkenlerde birleştirme operatörü kullanabiliyoruz.

        // Aşağıdaki değişken integer(tam sayı) ifadesidir:
        $Sayi1 = 100;

        echo $Sayi1;
        
        /*
            - Değişkenler $ işareti ile başlar.
            - Değişkene değer ataması yapılırken "=" işareti kullanılır.
            - Değişkene metinsel ifadeler aktarılırken " " veya ' ' kullanılabilir.
            - Değişkene integer sayısal değer aktarılırken direkt olarak yazabiliriz.
            - Değişkenlerde ufak büyük harf ayrımı vardır.
            - Değişkenlerde rakam ile başlayamıyoruz fakat rakam ile bitirebiliyoruz. özel karakterlerde dahildir.
            - Değişkenlerde boşluk bırakmıyoruz.
            - Değişkenler _(alt çizgi) kullanabiliriz.
            - Değişkenlerde Türkçe karakter kullanmıyoruz.
        */
    ?>
</body>
</html>