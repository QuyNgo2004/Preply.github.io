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
    <link rel="stylesheet" href="Preply/css/style_contact.css">
</head>
<body>

<div class="background_page">
    <div class="page">
        <?php include LIBRARIES_PREPLY."HeaderFooter.php"; ?>
        <!-- Content -->
        <div class="h-full">
             <div class="h-full">
                
                <div class="z-100 h-full relative">
                    <div class="w-full h-full">
                        <div class=" flex flex-col justify-center xl:pt-40  h-full container mx-auto py-32" style="text-align:center; ">
                            <h1 class="text-black h1 " style="opacity: 1; transform: none;opacity: 0.5;" >
                                <span style="color:white;"><?= _let ?></span><?= _connect ?>
                            </h1>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post" enctype="multipart/form-data">
                                <div>
                                    <input type="text" name="name" placeholder="<?= _name ?>:" required>
                                    <input type="text" name="gmail" placeholder="Email:" required>
                                </div>
                                <input type="text" name="title" placeholder="<?= _title ?>:" style="width:100%" required>
                                <textarea  name="content" placeholder="<?= _content ?>:" required></textarea>
                                <div>
                                <button type="submit" class="design_btn_contact btn" >
                                    <span><?= _let ?><?= _talk ?></span>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        aria-hidden="true" class="svg_btn_work" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </a>
                                </div>
                            </form>
                           
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
    document.querySelector("#Contact").classList.add("Active");
    
</script>
<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $gmail = $_POST["gmail"];
        $title = $_POST["title"];
        $content = $_POST["content"];
        if($name == null || $gmail == null || $title == null || $content == null){
            echo "<script>alert('Nhập đầy đủ thông tin');</script>";
        }else{
            $sql = ("INSERT INTO `table_news`(`tenkhongdauvi`,`noidungvi`, `tenvi`, `stt`, `hienthi`, `type`,  `hoten`, `gmail`) VALUES ('$title','$content','$title',1,1,'contact','$name','$gmail')");
            if($conn->query($sql) == true){
                echo "<script>alert('Thêm thành công!');</script>";
            }else{
                echo "<script>alert('Thêm không thành công!');</script>";
            }
        }
    }

?>
</html>
