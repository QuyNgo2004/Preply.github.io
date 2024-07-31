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
    <link rel="stylesheet" href="Preply/css/style_education.css">
</head>
<body>
    
<div class="background_page">
    <div class="page">
        <?php   include LIBRARIES_PREPLY."HeaderFooter.php"; ;
                include SOURCES_PREPLY."check_title.php";
                $Edu = $conn->query("SELECT * FROM `table_news` WHERE `type` = 'Education' "); 
                $Edu_seo = $conn->query("SELECT * FROM `table_seopage` WHERE `type` = 'Education'");
        ?>
        <!-- Content -->
        <div class="h-full">
             <div class="h-full">
                <div class="z-100 h-full relative py-32 item-center">
                    <div class="educaton_container">
                        <div class="education_content">
                            <div class="tile">
                                <?php foreach($Edu_seo as $item){ 
                                    $array_list = title_check($item['title'.$session_script],$item["keywords".$session_script]);
                                ?>
                                    
                                <h1  class="h1 " style="color: white;">
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
                            <div class="subject">
                                <div class="subject_scrollbar">
                                    <!-- vòng lập php ->star -->
                                     <?php 
                                        foreach($Edu as $pro){
                                            echo "<a href='./Article.php?active=Education&id=".$pro["id"]."' class='subject_content'>";
                                            echo "<div class='text_year'>2023</div><br>";
                                            echo "<div class='content'>";
                                            echo "<div class='tile_content'>".$pro["ten".$session_script]."</div>";
                                            echo "<p><span class='dotlist'></span>".strip_tags(htmlspecialchars_decode($pro["noidung".$session_script]))."</p></div></a>";
                                        }
                                     ?>
                                   
                                   
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
    document.querySelector("#Education").classList.add("Active");
</script>
</html>