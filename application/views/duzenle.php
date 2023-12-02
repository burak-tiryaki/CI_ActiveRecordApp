<!doctype html>
<html lang="tr">
  <head>
    <title>Düzenle</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h2 class="display-6">Kayıt Düzenle</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <form action="<?php echo base_url("personel/update/$row->id")?>" method="post">
        
                <label for="username" class="form-label">Username giriniz:</label>

                <input class="form-control w-25" type="text" id="username" name="username" value="<?php echo $row->username ?>">
        
                <label for="detail" class="form-label">Detay giriniz:</label>
                <textarea class="form-control w-50" name="detail" id="detail" cols="30" rows="10"><?php echo $row->detail ?></textarea>
        
                <div class="btn-group my-3">
                    <button class="btn btn-primary" type="submit">Düzenle</button>
                    <a class="btn btn-outline-primary" href="<?php echo base_url("personel/index")?>">Listeyi Görüntüle</a>
                </div>
            </form>
        </div>
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  </body>
</html>