<?php require_once('init.php'); ?>
<?php 

class Db {
    public $conn;

    public function connect(){

            $dsn = 'mysql:host=' . DB_HOST .';dbname=' . DB_NAME;
            $conn = new PDO($dsn, DB_USER, DB_PASS);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $conn;
         
    }   

}
