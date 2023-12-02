<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listeleme</title>
</head>
<body>
    
    <h3>Kayıtlar</h3>
    <a href="#">Kayıt Ekle</a> <br> <br>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Username</th>
            <th>Detail</th>
            <th>İşlem</th>
        </thead>
        <tbody>
            <?php foreach($rows as $row) { ?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->username ?></td>
                    <td><?php echo $row->detail ?></td>
                    <td>
                        <a href="#">Düzenle</a>
                        <a href="#">Sil</a>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>

</body>
</html>