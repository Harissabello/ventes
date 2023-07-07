<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<?php

$i = 0;
for ($i=1; $i <=10 ; $i++) { 
    $re = '
    <div class="container-fluid">
        <div class="row d-flex flex-wrap">
                <div class="card">
                    
                    <div class="gallery">
                        <a href="">
                            <img src="image/images (19).jpeg" class="card-img-top img-fluid max-height-im" width="150" height="150">
                            <div class="contenant">
                                <div class="overlay">300 x 250 - jpg<br> maximumwall.com</div>
                                <img class="img_plus" style="height: 40px;width: 40px;float: right;" src="image/img_plus.png">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="no-gutters align-items-center">
                                <div class="mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        <p class="text-dark" style="width:150px;">À la base de l’alimentation de plus de 500 millions de personnes et originaire d’Afrique de l’Ouest, l igname est le tubercule d une plante grimpante de forme allongée ou arrondie. Son diamètre avoisine les 50 cm et il peut peser jusqu’à près de 20 kg ! La couleur de sa peau varie entre le brun-noir, le blanc, et le rose.</p>
                                        <p class="para1">Prix: <strong>15000 FCFA </strong></p>
                                    </div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>';

?>
<div id="gallery" style="display: inline-flex;justify-content: space-around;margin-left: 10px;margin-bottom:10px">
    <?php
    echo $re;
    ?>
</div>

<?php
 }
?>
</body>
</html>