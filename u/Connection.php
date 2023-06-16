<?php 

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'db_data');
    
    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }
        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM db_gm ORDER BY id ");
            return $result;
        }
        public function employee_fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM employee");
            return $result;
        }
                
        public function details ($db_Ttpe, $id_Shelf, $P_Price, ) {
            $result = mysqli_query($this->dbcon, "UPDATE db_gm SET 
                db_Ttpe = '$db_Ttpe',
                id_Shelf = '$id_Shelf',
                P_Price = '$P_Price',
                WHERE id = '$id '
            ");
            return $result;
        }
      
      
      


    }
    ?>