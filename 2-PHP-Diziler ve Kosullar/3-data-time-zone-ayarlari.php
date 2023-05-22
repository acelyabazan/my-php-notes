<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time Zone Ayarları ve Explode Fonksiyonuyla Pratik Bir Örnek</title>
</head>
<body>
    <?php
        // Anlık Zaman Verilerini PHP ile Görüntülemek:
        // İlk önce veriyi çekebilmek için en başta yazmış olduğum kodu yazıyoruz: date_default_timezone_set('Tarih ve zaman olarak çekmek istediğimiz verinin konumunu yazıyoruz');
        date_default_timezone_set('Europe/Istanbul');

        /* Harflerin Anlamları:
            d   => Gün
            m   => Ay
            y   => Yıl
            h   => Saat
            i   => Dakika
            s   => Saniye
        */
        $GuncelZaman = date("d-m-y h:i:s");

        echo "Şu anki zaman dilimi: " . $GuncelZaman;
        // Sonuç: Şu anki zaman dilimi: 22-05-23 03:25:34
    ?>
</body>
</html>