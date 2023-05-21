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
        // Diziler:
        // Dizi tanımı: Bir değişkenin içerisine birden fazla eleman yer alan değişkenlere "dizi" deriz.
        // Dizi oluşturmak için array() terimini kullanıyoruz.
    
        $OrnekDizi = array("Açelya", "Bazan", 5, 10);

        // Aşağıdaki örnekte sayfamızın çıktısı "Array" olacaktır. Bunun sebebi $OrnekDizi değişkeninin dizi olmasından kaynaklanır:
        echo $OrnekDizi;
        // Sonuç: Array

        echo "<br>";

        // Biz $OrnekDizi içerisindeki tüm elemanları yazdırmak için print_r() terimini kullanıyoruz:
        // Not: print_r terimini kullanırken echo terimini kullanmamız gerekmez!
        // Örneğin:
        // Not #2: Dizi elemanlarını numaralandırırken her zaman 0. index'ten başlarız.
        print_r($OrnekDizi);

        echo "<br>";

        // Dizi içerisindeki elemanlardan hepsini değilde seçmiş olduğunuz elemanı yazdırmak için köşeli parantez([]) kullanıyoruz. Köşeli parantezin içerisine seçmiş olduğumuz index numarasını belirtiyoruz.
        // Örneğin: $OrnekDizi[0];
        echo "0. Index => " . $OrnekDizi[0] . "<br>";
        // Sonuç: Açelya

        echo "1. Index => " . $OrnekDizi[1] . "<br>";
        // Sonuç: Bazan

        echo "2. Index => " . $OrnekDizi[2] . "<br>";
        // Sonuç: 5

        echo "3. Index => " . $OrnekDizi[3] . "<br>";
        // Sonuç: 10

        // print_r sayesinde bütün dizi elemanlarını okuyabiliyoruz. Fakat gerçekten okunur bir halde durmuyor. Okunur bir hale getirmek için echo "<pre>"; echo "</pre>; etiketleri arasında print_r() terimini kullanabiliriz.

        // Örnek:
        echo "<pre>";
        print_r($OrnekDizi);
        echo "</pre>";
        /* Sonuç:
            Array
            (
                [0] => Açelya
                [1] => Bazan
                [2] => 5
                [3] => 10
            )
        */

    ?>
</body>
</html>