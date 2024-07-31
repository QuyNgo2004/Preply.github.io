<?php
    session_start();
    // Đặt biến ngôn ngữ
    if(isset($_GET['lang']) && !empty($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
    if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
    echo "<script type='text/javascript'> location.reload(); </script>";
    }
    }
    $session_script ="";
    // Chèn vào tệp tin ngôn ngữ, ngôn ngữ mặc định là tiếng Anh
    if(isset($_SESSION['lang'])){
    include "Preply/lang/".$_SESSION['lang'].".php";
    $session_script = $_SESSION['lang'];
    }else{
    include "Preply/lang/en.php";
    $session_script = "en";
    }
    
?>
