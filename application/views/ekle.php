<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayit Ekleme</title>
</head>
<body>
    
    <h2>Yeni Kayıt Ekle</h2>

    <form action="<?php echo base_url("personel/insert")?>" method="post">
        <label for="username">Username giriniz:</label><br>
        <input type="text" id="username" name="username"><br><br>

        <label for="detail">Detay giriniz:</label><br>
        <textarea name="detail" id="detail" cols="30" rows="10"></textarea><br>

        <button type="submit">Gönder</button>
        
        <a href="<?php echo base_url("personel/index")?>">Listeyi Görüntüle</a>
    </form>

</body>
</html>