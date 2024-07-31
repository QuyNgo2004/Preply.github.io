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
    <link rel="stylesheet" href="Preply/css/animation.css">
</head>
<body>
<?php 
                
                if(isset($_GET['id']) && !empty($_GET['id'])){
                    $_SESSION['id'] = $_GET['id'];}
                if(isset($_GET['active']) && !empty($_GET['active'])){
                    $_SESSION['active'] = $_GET['active'];}
                    include LIBRARIES_PREPLY."HeaderFooter.php";
                $id =   $_SESSION['id'];
                $article = $conn->query("SELECT * FROM `table_news` WHERE `id` = $id "); 
              
?>
<div class="background_page">
    <div class="page">
        
        <!-- Content -->
         <div class="article_container">
            <div class="article">
                <h1 class="text-black h1 " style="opacity: 1; transform: none;text-align: center;">
                                <?php  foreach($article as $i){ 
                                    echo $i['ten'.$session_script]."</h1>";
                                    echo "<p class='text_article'>".strip_tags(htmlspecialchars_decode($i["noidung".$session_script])).strip_tags(htmlspecialchars_decode($i["noidung".$session_script]))."</p>";
                                }?>
                            </p>
            </div>
         </div>
        <?php include LIBRARIES_PREPLY."Navigation.php" ?>
        <?php include LIBRARIES_PREPLY."CricleBox.php" ?>
        <?php include LIBRARIES_PREPLY."Lang.php" ?>
        
      
    </div>
</div>
</body>
<script>
    document.querySelector("#<?php echo $_SESSION['active'] ?>").classList.add("Active");
</script>
</html>
