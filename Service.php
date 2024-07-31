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
        
    <link rel="stylesheet" href="Preply/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="Preply/css/style_index.css">
    <link rel="stylesheet" href="Preply/css/style_home.css">
    <link rel="stylesheet" href="Preply/css/animation.css">
    <link rel="stylesheet" href="Preply/css/style_service.css">
</head>

<body>

<div class="background_page">
    <div class="page">
    <?php include LIBRARIES_PREPLY."HeaderFooter.php";
          include SOURCES_PREPLY."check_title.php";
         $Ser_produce = $conn->query("SELECT * FROM `table_news` WHERE `type` = 'Services' "); 
         $Ser_seo = $conn->query("SELECT * FROM `table_seopage` WHERE `type` = 'Services'");
         ?>
        <!-- Content -->
        <div class="h-full">
             <div class="h-full">
                <div class="z-100 h-full relative py-32 item-center">
                    <div class="service_container">
                        <div class="service_content">
                        <div class="tile">
                                <?php foreach($Ser_seo as $item){
                                  $array_list = title_check($item['title'.$session_script],$item["keywords".$session_script]);
                                ?>                                                                      
                                <h1  class="h1 "  style="color: white;">
                                <?php 
                                   if(count($array_list) > 1){
                                       echo  $array_list[0]."<span class='text-accent'>".$item['keywords'.$session_script]."</span>".$array_list[1];
                                   }
                                   else{
                                     echo $item['title'.$session_script];
                                   } 
                                ?></h1>
                                <p style="max-width: 400px;font-size: 20px;color: white; opacity: 0.5;"><?php echo strip_tags(htmlspecialchars_decode($item["noidung".$session_script]));}?></p>
                            </div>
                            <div class="container_ser swiper">
                                <div class="content_ser swiper-wrapper">
                                    <?php 
                                        foreach($Ser_produce as $pro){
                                           echo  "<a href='./Article.php?active=Services&id=".$pro["id"]."' class='content_details_ser swiper-slide'>";
                                           echo  "<div class='icon_ser' >";
                                           echo  "<img src='./../upload/news/".$pro["photo"]."' alt=''srcset=''></div>";
                                           echo  "<div class='tile_ser'>".$pro["ten".$session_script]."</div>";
                                           echo  "<div class='tile_content_ser'>".strip_tags(htmlspecialchars_decode($pro['mota'.$session_script]))."</div>";
                                           echo  "<div class='svg'>
                                            <svg stroke='currentColor'  stroke-width='0' viewBox='0 0 15 15'  height='1em' width='1em' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' clip-rule='evenodd' d='M3.64645 11.3536C3.45118 11.1583 3.45118 10.8417 3.64645 10.6465L10.2929 4L6 4C5.72386 4 5.5 3.77614 5.5 3.5C5.5 3.22386 5.72386 3 6 3L11.5 3C11.6326 3 11.7598 3.05268 11.8536 3.14645C11.9473 3.24022 12 3.36739 12 3.5L12 9.00001C12 9.27615 11.7761 9.50001 11.5 9.50001C11.2239 9.50001 11 9.27615 11 9.00001V4.70711L4.35355 11.3536C4.15829 11.5488 3.84171 11.5488 3.64645 11.3536Z' fill='currentColor'></path></svg>
                                            </div></a>";
                                        }
                                     ?>
                                </div>
                                <div class="swiper-pagination " style="--swiper-theme-color: #ffc107;"></div>
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
<script>
    document.querySelector("#Services").classList.add("Active");
</script>
<script src="Preply/js/swiper-bundle.min.js"></script>
  <script>
    function myFunction(x) {
  if (x.matches) { // If media query matches
    var swiper = new Swiper(".container_ser", {
        slidesPerView: 3,
        spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  } else {
    var swiper = new Swiper(".container_ser", {
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  }
}

// Create a MediaQueryList object
var x = window.matchMedia("(min-width: 700px)")

// Call listener function at run time
myFunction(x);

// Attach listener function on state changes
x.addEventListener("change", function() {
  myFunction(x);
});
   
  </script>
</script>
</html>
