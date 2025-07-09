<?php include('data.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mockup Webpage</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./style.scss">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
</head>
<body>

  <header class="text-center py-0 bg-dark">
    <?PHP include('./components/navbar.php'); ?>
  <?php include('./components/slidersection.php') ?>
  </header>

 <?PHP include('./components/counter.php'); 
 include('./components/middle.php');
 
 
 include('./components/courses.php');
 include('./components/about.php');

 include('./components/footer.php');
 
 ?>

 

  <script src="data.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>