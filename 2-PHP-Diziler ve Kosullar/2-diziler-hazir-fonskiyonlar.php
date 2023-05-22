<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizilerde Kullanılan Hazır Fonksiyonlar ve Pratik Kullanım Örnekleri</title>
</head>
<body>
    <?php
        // Dizilerde sık kullanılan hazır fonksiyonlar:

        /*
            -sort        => sort fonksiyonumuz küçükten büyüğe sıralamamız için kullanılır.
            -rsort       => rsort fonksiyonumuz büyükten küçüğe sıralamamız için kullanılır.
            -in_array    => in_array fonksiyonumuz dizi içerisinde belirttiğimiz karakter var mı yok mu bize gösterir. Var ise sayfamızda 1 sonucunu görürüz. Yok ise sayfamızda her hangi bir şey yazmaz.
            -implode     => implode fonksuyonumuz dizi değerlerini tek bir değişken halinde görmemiz için kullanılır.
            -explode     => explode değişkeni parçalayarak dizi haline getirir.
        */

        $OrnekDizi1 = array(10, 9, 8, 7, 6, 12, 5, 4, 3, 2, 1);
        $OrnekDizi2 = array("c", "a", "f", "i", "r");

        echo "<h2> \$OrnekDizi1 Orijinal Hali </h2>";

        echo "<pre>";
        print_r($OrnekDizi1);
        echo "</pre>" . "<br>";
        /* Sonuç:
            Array
            (
                [0] => 10
                [1] => 9
                [2] => 8
                [3] => 7
                [4] => 6
                [5] => 5
                [6] => 4
                [7] => 3
                [8] => 2
                [9] => 1
            )
        */

        // sort fonksiyonunun kullanımı:
        echo "<h3> Sort Fonskiyonu </h3>";
        
        echo "<pre>";
        sort($OrnekDizi1);
        print_r($OrnekDizi1);
        echo "</pre>" . "<br>";
        /* Sonuç:
            Array
            (
                [0] => 1
                [1] => 2
                [2] => 3
                [3] => 4
                [4] => 5
                [5] => 6
                [6] => 7
                [7] => 8
                [8] => 9
                [9] => 10
                [10] => 12
            )
        */
        
        // rsort fonksiyonunun kullanımı:
        echo "<h3> Rsort Fonskiyonu </h3>";
        
        echo "<pre>";
        rsort($OrnekDizi1);
        print_r($OrnekDizi1);
        echo "</pre>" . "<br>";
        /* Sonuç:
            Array
            (
                [0] => 12
                [1] => 10
                [2] => 9
                [3] => 8
                [4] => 7
                [5] => 6
                [6] => 5
                [7] => 4
                [8] => 3
                [9] => 2
                [10] => 1
            )
        */

        echo "<h2> \$OrnekDizi2 Orijinal Hali </h2>";

        echo "<pre>";
        print_r($OrnekDizi2);
        echo "</pre>" . "<br>";
        /* Sonuç:
            Array
            (
                [0] => c
                [1] => a
                [2] => f
                [3] => i
                [4] => r
            )
        */
        
        // in_array fonksiyonunun kullanımı:
        echo "<h3> In_array Fonskiyonu </h3>";
        
        echo "<h4>". "\$OrnekDizi2 dizisinin içerisinde \"a\" karakteri bulunuyor mu?: " . in_array("a", $OrnekDizi2) . "</h4>";
        echo "Eğer sonucunuz \"1\" ise \"a\" karakteri bulunmaktadır." . "<br>";
        /* Sonuç:
            $OrnekDizi2 dizisinin içerisinde "a" karakteri bulunuyor mu?: 1
            Eğer sonucunuz "1" ise "a" karakteri bulunmaktadır.
        */
        
        // In_array kullanımı ile ilgili bir örnek:
        echo "<h2> In_array Fonskiyonu Örnek </h2>";   

        $Sonuc1 = in_array("r", $OrnekDizi2);

        if ($Sonuc1 == 1) {
            echo "<h4>" . $OrnekDizi2[4] . " elemanı \$OrnekDizi2 içerisinde bulunmaktadır." . "</h4>";
        } else {
            echo "<h4>" . $OrnekDizi2[4] . " elemanı \$OrnekDizi2 içerisinde bulunmamaktadır." . "</h4>";
        }

        // implode fonksiyonunun kullanımı:
        echo "<h3> Implode Fonskiyonu </h3>";
        
        echo "\$OrnekDizi2 dizi değerini tek değişken hali: " . "<b>" . implode($OrnekDizi2) . "</b>" . "<br>";
        /* Sonuç:
            $OrnekDizi2 dizi değerini tek değişken hali: cafir
        */

        //  implode fonksiyonunun farklı kullanımı ise şu şekildedir:
        echo "\$OrnekDizi2 dizi değerini tek değişken hali: " . "<b>" . implode(" + ", $OrnekDizi2) . "</b>" . "<br>";
        /* Sonuç:
            $OrnekDizi2 dizi değerini tek değişken hali: c + a + f + i + r
        */

        // explode fonksiyonunun kullanımı:
        echo "<h3> Explode Fonskiyonu </h3>";
        
        $Zaman = "22.05.2023 14:45";
        // Not: explode() fonksiyonunu kullanırken virgülden önceki çift tırnağın içerisine, dizinin içerisinde nereden itibaren kesmek istiyorsanız o karakteri kullanın. Kestikten sonra o değişken birden çok karakterli dizi haline gelecektir:
        // Not #2: Mesela aşağıdaki örnekte $Zaman içerisinden tarih ile zamanı ayrı ayrı bir dizinin içerisinde saklamak istediğim için tarihin bittiği kısım yani boşluk karakterini yazıyorum. Böylece boşluk karakterinden $Zaman ve $ZamanDizi dizi içerisinde iki farklı karakter olarak ayırt ediyorum:
        $ZamanDizi = explode(" ", $Zaman);

        echo "<pre>";
        print_r($ZamanDizi);
        echo "</pre>";

        /* Sonuç:
            Array
            (
                [0] => 22.05.2023
                [1] => 14:45
            )
        */
        echo "<h3> Explode Fonskiyonu Örnek Kullanımı</h3>";

        echo "Tarih: " . $ZamanDizi[0] . " Saat: " . $ZamanDizi[1];
        // Sonuç: Tarih: 22.05.2023 Saat: 14:45
    ?>
</body>
</html>