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
    <link rel="stylesheet" href="Preply/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="Preply/css/style_Video.css">
    
</head>
<body>

<div class="background_page">
    <div class="page">
        <?php   include LIBRARIES_PREPLY."HeaderFooter.php";
                $video = $conn->query("select * from table_news where type = 'video' "); 
                ?>
        <!-- Content -->
        <div class="h-full">
             <div class=" h-swiper swiper">
                <div class="z-100 h-full relative item-center  swiper-wrapper">
                <?php $num = 1;
                         foreach($video as $item){
                    echo "<div class='video_container_body swiper-slide '>";
                        echo "<div class='content_container '>";
                             echo   "<div class='content_detail_video '>";
                                   
                                        echo "<div class='content_detail_tile '>";
                                        echo "<div class='stt_video'>".$num."</div>";
                                        echo "<h2 class='tile_video'>".$item["ten".$session_script]."</h2>";
                                        echo "<div class='content_video'>".$item["noidung".$session_script]."</div>";
                                        echo "<div class='other_content_video'>".$item["nghenghiep"]."</div>";
                            echo "</div>" ;
                                     ?>
                                    
                                    
                                </div>
                        </div>
                        <div class="video_container">
                            <div class="video_content " style="height: none;">
                                <?php
                                    $videoId;
                                    $i = $item["video"];
                                    // Kiểm tra nếu URL là dạng watch?v=
                                    if (strpos($i,"youtube.com/watch?v=")) {
                                        $param = '/v=/';
                                        $videoId =  preg_split($param,$i)[1];
                                    }
                                    // Kiểm tra nếu URL là dạng youtu.be/
                                    else if (strpos($i,'youtu.be/')) {
                                        $videoId =  preg_split($i,'youtu.be/')[1];
                                    }
                                    // Kiểm tra nếu URL là dạng embed/
                                    else if (strpos($i,'embed/')) {
                                        $videoId = preg_split($i,'embed/')[1];
                                    }
                                    if (strpos($videoId ,"&")) {
                                        $param = '/&/';
                                        $videoId =  preg_split($param,$videoId)[0];
                                    }
                                    
                                    echo "<div class='swiper-slide' >";
                                    echo "<iframe  src='https://www.youtube.com/embed/".$videoId."'></iframe>";
                                    echo "</div>";
                                
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                    $num++;
                }
                ?>
                </div>
                <div class="btn_video">
                                <button class="button-prev" ><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M168.49,199.51a12,12,0,0,1-17,17l-80-80a12,12,0,0,1,0-17l80-80a12,12,0,0,1,17,17L97,128Z"></path></svg></button>
                                <button class="button-next" ><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg></button>
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

    document.querySelector("#Video").classList.add("Active");
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
   
</script>
</html>