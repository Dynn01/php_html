<?php include "data.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/all.css">
</head>
<body>
    <div class="container">
        <div class="row">

            <?php foreach($data_siswa as $key => $value): ?>

            <div class="col-3">
             <div class="card <?php if($value[3]==true){echo "bg-primary";}?>" style="width: 18rem;">
               <img src="assets/images/marshmello.jpg" class="card-img-top bg-transparent" alt="...">
                 <div class="card-body">
                   <h5 class="card-title"><?php echo $value[0];?></h5>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   <a href="#" class="btn btn-dark">Go somewhere</a>
                 </div>
             </div>
            </div>

            <?php endforeach; ?>

        </div>
    </div>

    <!-- <script src="assets/JS/jquery-3.5.1.slim.min.js"></script> -->
    <script src="assets/JS/jquery-3.5.1.slim.full.js"></script>
    <script src="assets/JS/popper.min.js"></script>
    <script src="assets/JS/bootstrap.min.js"></script>
    <script src="assets/JS/data.js"></script>
</body>
</html>