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
    <link rel="stylesheet" href="Preply/css/style_works.css">
    <link rel="stylesheet" href="Preply/css/swiper-bundle.min.css">
</head>
<body>
<div class="background_page">
    <div class="page">
        <?php   include LIBRARIES_PREPLY."HeaderFooter.php";
                include SOURCES_PREPLY."check_title.php";
        $Works = $conn->query("SELECT * FROM `table_news` WHERE `type` = 'Works' "); 
        $Works_seo = $conn->query("SELECT * FROM `table_seopage` WHERE `type` = 'Works'");
        ?>
        <!-- Content -->
        <div class="h-full">
             <div class="h-full">
                <div class="z-100 h-full relative py-32 item-center">
                    <div class="work_container">
                        <div class="work_content">
                        <div class="tile">
                                <?php foreach($Works_seo as $item){ 
                                    $array_list = title_check($item['title'.$session_script],$item["keywords".$session_script]); 
                                ?>
                                <h1  class=" h1 "  style=" color: white;">
                                <?php 
                                 if(count($array_list) > 1){
                                     echo  $array_list[0]."<span class='text-accent'>".$item['keywords'.$session_script]."</span>".$array_list[1];
                                 }
                                 else{
                                   echo $item['title'.$session_script];
                                 } 
                                ?></h2>
                                <p style="max-width: 400px;font-size: 20px;color: white; opacity: 0.5;"><?php echo strip_tags(htmlspecialchars_decode($item["noidung".$session_script]));}?></p>
                            </div>
                           <div class="project_container swiper">
                                        <div class="h_project_content swiper-wrapper">
                                            <?php 
                                                $dem = 0; 
                                                foreach($Works as $pro){
                                                    $dem++;
                                                    if($dem == 1){
                                                         echo "<div class='project_c swiper-slide'>
                                                            <div class='work_container_project '>";
                                                    }
                                                    echo "<a href='./Article.php?active=Works&id=".$pro["id"]."' class='work_project'>
                                                            <img alt='' loading='lazy'  decoding='async' data-nimg='1'  src='./../upload/news/".$pro["photo"]."' style='color: transparent;'>
                                                            <div class='background'></div>
                                                            <div class='tile_project'>
                                                                <span>".$pro['ten'.$session_script]."<span>
                                                                <svg stroke='currentColor' fill='currentColor' stroke-width='0' viewBox='0 0 16 16' height='1em' width='1em' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z'></path></svg>                                                      
                                                            </div>
                                                        </a>";

                                                    if($dem == 4 ){
                                                        echo "</div></div>";
                                                        $dem =0;
                                                    }
                                                }
                                                if($dem != 0 ){
                                                    echo "</div></div>";
                                                    $dem =0;
                                                }
                                            ?> 
                                          
                                        </div>
                                        <div class="swiper-pagination " style="--swiper-theme-color: #ffc107;"></div>
                                    
                            </div>
                        </div>
                    </div>
                    <div class="image img_active" style="margin:0;">
                        <img width="200" height="200"src="Preply/image/circles.png" alt="">
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
<script>
    document.querySelector("#Works").classList.add("Active");
</script>
<script src="Preply/js/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".project_container", {
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
</script>
</html>