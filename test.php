<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
    <style>

.card-img-top {
  object-fit: cover;
  height: 100%;
}
.max-height-im{
    max-height: 200px;
}

  </style>
</head>
<body>
    <?php

    $i = 0;
    for ($i=1; $i <=10 ; $i++) { 
        $re = '
        <div class="container-fluid;" >
        <div class="row d-flex flex-wrap">
            <?php
            $i = 0;
            for ($i = 1; $i <= 10; $i++) {
                ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mt-4">
                    <div class="card border-left-primary shadow h-100 taille">
                        <img src="image/images (19).jpeg" class="card-img-top img-fluid max-height-im" width="10" height="10">
                        <div class="card-body">
                            <div class="no-gutters align-items-center">
                                <div class="mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <p class="text-primary"></p>
                                        <h6 class="text-dark"></h6>
                                    </div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">
                                        <a href="info_formation.php" class="btn btn-primary">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>';
   
    ?>
    <div style="display: inline-flex;justify-content: space-around">
        <?php
        echo $re;
        ?>
    </div>
    <?php
     }
    ?>


<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js1/sb-admin-2.min.js"></script>
</body>
</html>