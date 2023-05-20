<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hazır Fonksiyonlara Bakış</title>
</head>
<body>
    <?php
        // Hazır fonksiyonlara bakış:

        // rand() fonksiyonumuza merhaba diyelim! rand() fonksiyonumuz belirlenen aralıkta sayı üretir:
        // Not: Örneğin aşağıdaki rand() fonksiyonumzda 0 ile 10 arasında bir sayı üretir. rand() fonksiyonumuzda her sayfa yenilendiğinde farklı bir sayı üretir:  
        echo rand(0, 10);

        echo "<br>";

        // Şimdi yapacağımız uygulamada if koşulunu kullanacağız. Daha bu koşulu öğrenmedik fakat hocamız bize sadece göztermek amaçlı öğretiyor. İlerideki zamanlarda bu koşulu en detaylı şekilde öğreneceğiz:
        
        // Oyunumuzun amacı: rand fonksiyonu sayesinde 0 ile 10 arasında rastgele bir sayı değeri gelecektir. 5'ten aşağı bir sayı çıkarsa kaybediyoruz, 5 ile 10 arasında bir sayı gelirse kazanıyoruz:
        
        $TahminiSayi = rand(0, 10);

        if ($TahminiSayi < 5) {
            echo "Maalesef kaybettiniz." . "<br>";
            echo "Değeriniz: " . $TahminiSayi . "<br>";
            echo "Tekrar şansınızı denemek için lütfen sayfayı yenileyin." . "<br>";
        } else {
            echo "Tebrikler kazandınız." . "<br>";
            echo "Değeriniz: " . $TahminiSayi;
        }
    ?>
</body>
</html>