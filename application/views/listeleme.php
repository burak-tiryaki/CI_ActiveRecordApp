<!doctype html>
<html lang="tr">
  <head>
    <title>Kayıtlar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container my-2">

        <div class="row">

            <div class="col-12">
                <h1 class="display-6 text-center">Kayıtlar</h1>
            </div>
        </div><!-- row end -->
        
        <div class="row">

            <div class="col">
                
                <a class="btn btn-success" href="<?php echo base_url("personel/insertPage")?>">Kayıt Ekle</a> <br> <br>
                <span>
                    Sıralanama:
                </span>
                <div class="btn-group ms-1">
                    <a class="btn btn-sm btn-outline-primary" href="<?php echo base_url("personel/index/desc") ?>">ID B->K</a>
                    <a class="btn btn-sm btn-outline-success" href="<?php echo base_url("personel/index/asc") ?>">ID K->B</a>
                    <a class="btn btn-sm btn-outline-warning" href="<?php echo base_url("personel/index/user-asc") ?>">Username A->Z</a>
                    <a class="btn btn-sm btn-outline-danger" href="<?php echo base_url("personel/index/user-desc") ?>">Username Z->A</a>
                </div>
                
                <table class="table table-striped table-hover mt-2">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Detail</th>
                            <th scope="col">İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rows as $row) { ?>
                            <tr>
                                <td><?php echo $row->id ?></td>
                                <td><?php echo $row->username ?></td>
                                <td><?php echo $row->detail ?></td>
                                <td>
                                    <a class="btn btn-sm btn-outline-primary" href="<?php echo base_url("personel/updatePage/$row->id")?>">Düzenle</a>
                                    <a class="btn btn-sm btn-danger" href="<?php echo base_url("personel/delete/$row->id")?>">Sil</a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
            </div>
                
        </div><!-- 2. row end -->
    </div><!-- container end -->
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>