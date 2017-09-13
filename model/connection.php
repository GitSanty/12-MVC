<?php
 
class Db {

private static $instance = NULL;

//database credentials
const DBHOST = 'localhost';
const DBUSER = 'root';
const DBPASS = 'user';
const DBNAME = 'webdev';
 

    private function __construct() {}
    
    private function __clone() {}
    
    
    public static function getInstance() {    
    
    if (!isset(self::$instance)) {
        
     $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
     self::$instance = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS, $pdo_options);
     /*self::$instance = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
     self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
    }
    
    return self::$instance;
    
    
/*try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error

    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}*/

}
    
}

?>