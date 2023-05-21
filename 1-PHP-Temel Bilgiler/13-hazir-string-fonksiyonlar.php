<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sık Kullanılan Hazır String Fonksiyonları ve Pratik Uygulamaları</title>
</head>
<body>
    <?php
        // Hazır string fonksiyonlar:
        /*
            - strtolower      => Büyük harfleri küçük harfe çevirmek için kullanılan bir fonksiyondur.
            - strtoupper      => Küçük harfleri büyük harfe çevirmek için kullanılan bir fonksiyondur.
            - ucwords         => Metnin ilk harflerini büyük yazmak için kullanılan bir fonksiyondur.
            - ucfirst         => Metnin ilk kelimesinin ilk harfini büyük yazmak için kullanılan bir fonksiyondur.
            - strlen          => Metin içerisindeki karakter sayısını(boşlukta bir karakter olduğu için boşlukları da saymaktadır) görmemiz için kullanılan bir fonsiyondur.
            - substr          => Metnin belirttiğimiz parametre değerleri arasında karakterleri yazmak için kullanılan bir fonksiyondur.
        */
        $OrnekYazi = "Ben udemy ileri seviye Php kursuna kayıtlıyım";

        // - strtolower: 
        echo "<h2> Strtolower Fonksiyonu </h2>";

        echo "Yazının orijinal hali: " . $OrnekYazi . "<br>";
        echo "Yazı üzerinde \"strtolower\" fonksiyonunun etkisi: " . strtolower($OrnekYazi);

        echo "<br>";

        // - strtoupper:
        echo "<h2> Strtoupper Fonksiyonu </h2>";

        echo "Yazının orijinal hali: " . $OrnekYazi . "<br>";
        echo "Yazı üzerinde \"strtoupper\" fonksiyonunun etkisi: " . strtoupper($OrnekYazi);

        echo "<br>";

        // - ucwords:
        echo "<h2> Ucwords Fonksiyonu </h2>";

        echo "Yazının orijinal hali: " . $OrnekYazi . "<br>";
        echo "Yazı üzerinde \"ucwords\" fonksiyonunun etkisi: " . ucwords($OrnekYazi);

        echo "<br>";

         // - ucfirst:
         echo "<h2> Ucfirst Fonksiyonu </h2>";

         echo "Yazının orijinal hali: " . $OrnekYazi . "<br>";
         echo "Yazı üzerinde \"ucfirst\" fonksiyonunun etkisi: " . ucfirst($OrnekYazi);
 
         echo "<br>";

        // - strlen:
        echo "<h2> Strlen Fonksiyonu </h2>";

        echo "Yazının orijinal hali: " . $OrnekYazi . "<br>";
        echo "Yazı üzerinde \"strlen\" fonksiyonunun etkisi(kaç karakter olduğunu gösteriyor): " . strlen($OrnekYazi);
        
        echo "<br>";

         // - substr:
         echo "<h2> Substr Fonksiyonu </h2>";

         echo "Yazının orijinal hali: " . $OrnekYazi . "<br>";
         echo "Yazı üzerinde \"substr\" fonksiyonunun etkisi: " . substr($OrnekYazi, 0, 10);
 
         echo "<br>";

        //  Devamını oku uygulaması:
        $OrnekMetin = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque doloribus hic sequi. Culpa praesentium repudiandae sit quidem rerum nesciunt quod labore impedit et delectus maxime maiores dolor consequuntur facere, dolores reprehenderit voluptates ipsa eligendi inventore facilis dignissimos aliquid veniam. Voluptatum totam, quae doloribus reiciendis numquam et similique quia nobis expedita! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque doloribus hic sequi. Culpa praesentium repudiandae sit quidem rerum nesciunt quod labore impedit et delectus maxime maiores dolor consequuntur facere, dolores reprehenderit voluptates ipsa eligendi inventore facilis dignissimos aliquid veniam. Voluptatum totam, quae doloribus reiciendis numquam et similique quia nobis expedita!";

        echo "<h2> Devamını Oku Uygulaması: Haber Başlığı </h2>";

        $KisitliMetin = substr($OrnekMetin, 0, 248);

        echo "<p> $KisitliMetin </p>";
        echo "<a href=\"#\">Devamını Oku</a>";
    ?>
</body>
</html>