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

        public function insert($id_Shelf, $C_Color, $db_Ttpe, $db_4,$S_Size,$W_Weight,$P_Price,$q_t) {
            $result = mysqli_query($this->dbcon, "INSERT INTO db_gm (id_Shelf, C_Color, db_Ttpe, db_4, S_Size , W_Weight, P_Price,q_t)
             VALUES('$id_Shelf', '$C_Color', '$db_Ttpe', '$db_4', '$S_Size' , '$W_Weight' , '$P_Price', '$q_t')");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM db_gm");
            return $result;
        }

        public function fetchonerecord ($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM db_gm WHERE id = '$userid'");
            return $result;
        }

        public function update($id_Shelf, $C_Color, $db_Ttpe, $db_4,$S_Size,$W_Weight,$P_Price, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE db_gm SET 
                id_Shelf = '$id_Shelf',
                C_Color = '$C_Color',
                db_Ttpe = '$db_Ttpe',
                db_4 = '$db_4',
                S_Size = '$S_Size',
                W_Weight = '$W_Weight',
                P_Price = '$P_Price'
                WHERE id = '$userid'
            ");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM db_gm WHERE id = '$userid'");
            return $deleterecord;
        }

    }
    

?>

