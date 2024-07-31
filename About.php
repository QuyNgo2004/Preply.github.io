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
    <link rel="stylesheet" href="Preply/css/style_about.css">
</head>

<body>

<div class="background_page">
    <div class="page">
        <?php   include LIBRARIES_PREPLY."HeaderFooter.php";
                include SOURCES_PREPLY."check_title.php";
         $about = $conn->query("SELECT * FROM `table_news` WHERE `type` = 'Education' "); 
         $about_seo = $conn->query("SELECT * FROM `table_seopage` WHERE `type` = 'About'");
         $winnin_awards = $conn->query("SELECT * FROM `table_static` WHERE `type` = 'winnin_awards'");
         $finished_projects = $conn->query("SELECT * FROM `table_static` WHERE `type` = 'finished_projects'");
         $satisfied_clients = $conn->query("SELECT * FROM `table_static` WHERE `type` = 'satisfied_clients'");
         $year_of_experience = $conn->query("SELECT * FROM `table_static` WHERE `type` = 'year_of_experience'");
         
         ?>
        <!-- Content -->
        <div class="h-full">
             <div class="h-full">
             <div class="z-100 h-full relative py-32 item-center">
                    <div class="about_container">
                        <div class="about_content">
                            <div class="tile_container">
                                <div class="tile">
                                    <?php foreach($about_seo as $item) 
                                  echo "<h1 class='h1'  style=' color: white;'>";
                                  $array_list = title_check($item['title'.$session_script],$item["keywords".$session_script]);
                                  if(count($array_list) > 1){
                                    echo $array_list[0]."<span class='text-accent'>".$item["keywords".$session_script]."</span>".$array_list[1]."</h1>";
                                  }else{
                                    echo $item['title'.$session_script]."</h1>";
                                  }
                                  echo "<p style='max-width: 500px;;color: white; opacity: 0.5;'>";
                                  echo strip_tags(htmlspecialchars_decode($item["noidung".$session_script]))."</p>";
                                    ?>
                                    <div class="achievements">
                                        <ul class="achievements_detail">
                                            <?php foreach($year_of_experience  as $item){ echo "<li><span>".strip_tags(htmlspecialchars_decode($item["noidungvi"]))."</span><p>"._year_of_experience."</p></li>";}?>
                                            <?php foreach($satisfied_clients  as $item){ echo "<li><span>".strip_tags(htmlspecialchars_decode($item["noidungvi"]))."</span><p>"._satisfied_clients."</p></li>";}?>
                                            <?php foreach($finished_projects  as $item){ echo "<li><span>".strip_tags(htmlspecialchars_decode($item["noidungvi"]))."</span><p>"._finished_project."</p></li>";}?>
                                            <?php foreach($winnin_awards  as $item){ echo "<li><span>".strip_tags(htmlspecialchars_decode($item["noidungvi"]))."</span><p>"._winnin_awards."</p></li>";}?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="about_detail">
                                <div class="about_menu">
                                    <ul class="menu_detail">
                                        <li class="li_active" onclick="activeMenu(this)" id="li_skill"><?= _skills ?></li>
                                        <li onclick="activeMenu(this)" id="li_awards"><?= _awards ?></li>
                                        <li onclick="activeMenu(this)" id="li_experience"><?= _experience ?></li>
                                        <li onclick="activeMenu(this)" id="li_credentials"><?= _credentials ?></li>
                                    </ul>
                                </div>
                                <div class="about_menu_content">
                                            <?php  $list = $conn->query("SELECT * FROM `table_static` WHERE `type` = 'skill'"); ?>
                                    <div class="about_menu_content_detail about_menu_content_detail_active " id="skill">
                                        <div class="text">
                                            <?php
                                                foreach($list as $item){
                                                    echo "<div class='text'>".htmlspecialchars_decode($item['noidung'.$session_script])."</div>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <?php $list = $conn->query("SELECT * FROM `table_static` WHERE `type` = 'awards'"); ?>
                                    <div class="about_menu_content_detail" id="awards">
                                        <div class="text">
                                            <?php 
                                                foreach($list as $item){
                                                    echo "<div class='text'>".htmlspecialchars_decode($item['noidung'.$session_script])."</div>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <?php  $list = $conn->query("SELECT * FROM `table_static` WHERE `type` = 'experience'");?>
                                    <div class="about_menu_content_detail" id="experience">
                                        <div class="text">
                                            <?php 
                                                foreach($list as $item){
                                                    echo "<div class='text'>".htmlspecialchars_decode($item['noidung'.$session_script])."</div>";
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <?php   $list = $conn->query("SELECT * FROM `table_static` WHERE `type` = 'credentials'");?>
                                    <div class="about_menu_content_detail" id="credentials">
                                        <div class="text">
                                            <?php 
                                                foreach($list as $item){
                                                    echo "<div class='text'>".htmlspecialchars_decode($item['noidung'.$session_script])."</div>";
                                                }
                                            ?>
                                        </div>
                                    </div>
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
<script>
    document.querySelector("#About").classList.add("Active");
    function activeMenu(el){
        const listMenu = document.querySelectorAll(".menu_detail li");
        listMenu.forEach(element => {
        element.classList.remove('li_active');
        let str = (element.id).replace('li_',"");
        document.getElementById(str).classList.remove('about_menu_content_detail_active');
    });
       
        el.classList.add('li_active');
        let str = (el.id).replace('li_',"");
        document.getElementById(str).classList.add('about_menu_content_detail_active');
        
    };
</script>
</html>
