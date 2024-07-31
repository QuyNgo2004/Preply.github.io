<?php 
define('LIBRARIES_PREPLY','Preply/libraries/');
define('SOURCES_PREPLY','Preply/sources/');
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
        
        <!-- Content -->
        <div class="h-full">
             <div class="h-full">
                <div class="z-100 h-full relative">
                    <div class="w-full h-full">
                        <div class="text flex flex-col justify-center xl:pt-40 xl:text-left h-full container mx-auto">
                            <h1 class="text-black h1 " style="opacity: 1; transform: none;width: 65%;">
                                <?php  foreach($intro as $i){ 
                                    $array_list = title_check($i['title'.$session_script],$i["keywords".$session_script]);
                                    if(count($array_list) > 1){
                                      echo $array_list[0]."<span class='text-accent'>".$i["keywords".$session_script]."</span>".$array_list[1]."</h2>";
                                    }
                                    else{
                                      echo $i['title'.$session_script]."</h2>";
                                    }
                                
                                echo "</h1>";
                                echo "<p class='text_lorem'>".strip_tags(htmlspecialchars_decode($i["noidung".$session_script]))."</p>";
                                }?>
                            </p>
                        </div>
                    <div class="image">
                        <img width="637" height="578"src="./../upload/seopage/avatar-1207.png" alt="">
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
    document.querySelector("#Home").classList.add("Active");
  
</script>
</html>
