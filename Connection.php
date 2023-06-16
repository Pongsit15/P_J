
<?php 

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'db_calculator');
    
    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insert($Thai, $China, $number1, $ttype,$number2,$number3,$number4,$number5,$number6,$ttime) {
            $result = mysqli_query($this->dbcon, "INSERT INTO db_c (Thai, China,number1,ttype,number2,number3,number4,number5,number6,ttime) 
            VALUES('$Thai', '$China', '$number1','$ttype', '$number2', '$number3', '$number4', '$number5', '$number6', '$ttime')");
            return $result;
        }

  public function fetchdata() {
       $result = mysqli_query($this->dbcon, "SELECT Thai, China
       FROM db_c; ");
       return $result;
   }
  }
?>









