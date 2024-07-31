<?php 
include LIBRARIES_PREPLY."ChangeLang.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="Preply/js/swiper-bundle.min.js"></script> 
    <link rel="stylesheet" href="Preply/css/style_index.css">
    <link rel="stylesheet" href="Preply/css/style_home.css">
    <link rel="stylesheet" href="Preply/css/animation.css">
</head>
<body>
<?php 
             
                include LIBRARIES_PREPLY."HeaderFooter.php";
                include SOURCES_PREPLY."check_title.php";
                $intro = $conn->query("select * from table_seopage limit 0,1"); 
                
?>
<div class="background_page">
    <div class="page">
        <?php include "About.php"; ?>
        <?php include LIBRARIES_PREPLY."Navigation.php" ?>
        <?php include LIBRARIES_PREPLY."CricleBox.php" ?>
        <?php include LIBRARIES_PREPLY."Lang.php" ?>
        
    </div>
</div>
</body>

<script>
    
    var swiper = new Swiper(".slide_content", {
      cssMode: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      mousewheel: true,
      keyboard: true,
    });

    
    var swiper = new Swiper(".h-swiper", {
      grabCursor: true,
      cssMode: true,
      navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
      },
      mousewheel: true,
      keyboard: true,
    });
   
    var swiper = new Swiper(".project_container", {
      pagination: {
        el: ".swiper-pagination",
      },
    });
</script>
</script> 
</html>
