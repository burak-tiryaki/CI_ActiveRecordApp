<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listeleme</title>
</head>
<body>
    
    <h2>Kayıtlar</h2>
    <a href="<?php echo base_url("personel/insertPage")?>">Kayıt Ekle</a> <br> <br>
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
                        <a href="<?php echo base_url("personel/updatePage/$row->id")?>">Düzenle</a>
                        <a href="<?php echo base_url("personel/delete/$row->id")?>">Sil</a>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>

</body>
</html>