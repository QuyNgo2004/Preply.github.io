<?php  
            define('LIBRARIES','libraries/');
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


            
            
        ?>