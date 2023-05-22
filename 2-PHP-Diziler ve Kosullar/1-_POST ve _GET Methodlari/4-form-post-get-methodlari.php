<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>_POST ve _GET Methodları ve Pratik Kullanım Örnekleri</title>
</head>
<body>
    <?php
        // _POST ve _GET Methodları:
        // _POST ve _GET İşlemlerini form aracılığı ile gerçekleştiriyoruz. _GET methodunu button aracılığı ile de gerçekleştirebiliriz.
        // Form etiketleri içerisinde 2 tane değer giriyoruz:
        // POST ve GET methodlarının farkı: POST methodu verileri gizli olarak gönderir. Fakat GET değerleri adres satırında gözükür.
        /*
            action=""    => Nereye Gideceği
            method=""    => Gönderim Tipi
        */
        $KullaniciId = 1622;
    ?>
    <form action="5-islem-post-get-methodlari.php" method="GET">
        Adınız <input type="text" name="ad" placeholder="Ad">
        Soyadınız <input type="text" name="soyad" placeholder="Soyad">
        <input type="submit" value="Formu Gönder" name="">
    </form>
    <a href="5-islem-post-get-methodlari.php?KullaniciId=<?php echo $KullaniciId ?>">
        <button>
            Kullanıcıyı Sil
        </button>
    </a>
</body>
</html>