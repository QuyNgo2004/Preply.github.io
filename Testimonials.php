<?php 
define('LIBRARIES_PREPLY','Preply/libraries/');
define('SOURCES_PREPLY','Preply/sources/');
include LIBRARIES_PREPLY."ChangeLang.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Preply/css/style_index.css">
    <link rel="stylesheet" href="Preply/css/style_home.css">
    <link rel="stylesheet" href="Preply/css/style_testtimonials.css">
    <link rel="stylesheet" href="Preply/css/swiper-bundle.min.css">
</head>
<body>

<div class="background_page">
    <div class="page">
        <?php include LIBRARIES_PREPLY."HeaderFooter.php";
        $tes_produce = $conn->query("SELECT * FROM `table_news` WHERE `type` = 'testtimonials' "); 
        ?>
        <!-- Content -->
        <div class="h-full">
             <div class="h-full">
                <div class="z-100 h-full relative">
                    <div class="w-full h-full">
                        <div class=" flex flex-col justify-center xl:pt-40  h-full container mx-auto py-32" style="text-align:center; ">
                            <h1 class="text-black h1 " style="opacity: 1; transform: none;opacity: 0.5;" >
                                <span style="color:white;"><?= _what_clients ?></span><?= _say ?>
                            </h1>
                            <div class="slide_container swiper">
                                <div class="slide_content ">
                                    <div class="card_wrapper swiper-wrapper">
                                    <?php 
                                        foreach($tes_produce as $tes){
                                            echo "<div class=' swiper-slide  ' >
                                                    <div class='card_Allcontent'>
                                                        <div class='image_content'>
                                                            <img src='./../upload/news/".$tes["photo"]."' alt=''>
                                                            <div class='card_name'>
                                                                <div class='name'>".$tes["hoten"]."</div>
                                                                <span>";
                                                                $id_tes = $tes['id_list'];
                                                                $id_list = $conn->query("SELECT * FROM `table_news_list` WHERE `id` = $id_tes ");
                                                                foreach($id_list as $id){
                                                                    echo $id['ten'.$session_script];
                                                                }
                                                                echo "</span>
                                                            </div>
                                                        </div>
                                                        <div class='card_content'>
                                                            <div><svg stroke='currentColor' fill='currentColor' stroke-width='0' viewBox='0 0 512 512' class='text-4xl xl:text-6xl text-white/20 mx-auto md:mx-0' height='2em' width='2em' xmlns='http://www.w3.org/2000/svg'><path d='M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z'></path></svg></div>
                                                            ".strip_tags(htmlspecialchars_decode($tes['noidung'.$session_script]))."
                                                        </div>
                                                    </div>
                                                 </div>";
                                        }
                                     ?>
                                        
                                    </div>
                                        <div class="swiper-button-next btn"></div>
                                        <div class="swiper-button-prev btn"></div>
                                        <div class="swiper-pagination btn"></div>
                                </div>
                                   
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <?php include LIBRARIES_PREPLY."Navigation.php" ?>
        <?php include LIBRARIES_PREPLY."CricleBox.php" ?>
        <?php include LIBRARIES_PREPLY."Lang.php" ?>
        
      
    </div>
</div>
</body>
<script src="Preply/js/swiper-bundle.min.js"></script>
<script>
    document.querySelector("#Testimonials").classList.add("Active");
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
</script>
</html>
