<?php 
	define('HOST', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'android-store');

	function connection() {
       
        try {
            $link = new PDO("mysql:host=" . HOST . "; dbname=" . DATABASE, USERNAME, PASSWORD);
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $link->exec("SET CHARACTER SET utf8");
            return $link;
        } catch (PDOException $exc) {
            die("Failed to Connect with Database" . $exc->getMessage());
        }
       
    }
    date_default_timezone_set('Asia/Dhaka');

	
?>