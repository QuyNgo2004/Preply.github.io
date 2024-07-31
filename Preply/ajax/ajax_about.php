<?php 
 define('LIBRARIES','../../libraries/');
 require_once LIBRARIES."config.php";
 require_once LIBRARIES.'autoload.php';
 $servername = $config['database']["host"];
 $database = $config['database']["dbname"];
 $username = $config['database']["username"];
 $password = $config['database']["password"];
 
 // Create connection
 
 $conn = mysqli_connect($servername, $username, $password, $database);
 
 // Check connection
 
 if (!$conn) {
 
     die("Connection failed: " . mysqli_connect_error());
 
 }

$item = $_REQUEST["p"];
$hint="";
switch($hint){
    case "Skills":
        $hint = "skill";
        break;
    case "Awards":
        $hint = $conn->query("SELECT * FROM `table_static` WHERE `type` = 'awards' ");
        break;
        
}
// $hint = strtolower($hint);
 $list = $conn->query("SELECT * FROM `table_static` WHERE `type` = $hint");
foreach($list as $item){
    echo "<div class='text'>".strip_tags(htmlspecialchars_decode($item["noidungvi"]))."</div>";
}
echo "hello every one";
?>