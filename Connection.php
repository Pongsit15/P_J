
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
   //LIMIT 1 เอามาบรรทัดเดียว


  //     public function fetchonerecord($userid) {
  //         $result = mysqli_query($this->dbcon, "SELECT * FROM tblusers WHERE id = '$userid'");
  //         return $result;
  //     }

  //     public function update($firstname, $lastname, $email, $phonenumber,	$address, $userid) {
  //         $result = mysqli_query($this->dbcon, "UPDATE tblusers SET 
  //             firstname = '$firstname',
  //             lastname = '$lastname',
  //             email = '$email',
  //             phonenumber = '$phonenumber',
  //             address = '$address'
  //             WHERE id = '$userid'
  //         ");
  //         return $result;
  //     }

  //     public function delete($userid) {
  //         $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tblusers WHERE id = '$userid'");
  //         return $deleterecord;
  //     }

         
        //หาค่าเงิน ระหว่างประเทศ
      //  public function getTotal($Thai,$China) {
      //      $result = mysqli_query($this->dbcon, "INSERT INTO db_c (Thai, China) 
      //      VALUES('$Thai', '$China')");
      //      return $Thai * $China;
      //  }
        //$Thai =  100;
        //$China = 5;
        //        print("- สกุลเงินไทย".$Thai." บาท");
        //        print("<br>");
        //        print("- สกุลเงินจีน" .$China." หยวน");
        //        print("<br>");
        //        $total = getTotal($Thai,$China);
        //        Print("- ราคาสินค้าต่อชิ้น ".$total."บาท");
        //        print("<br>");
                                   
         //หาราคาต่อชิ้น
     //   function getppp( $total,$number3) {
     //     return $total * $number3;
     //       
     //   }
       //  $number1 =  100; //ราคาสินค้าต่อชิ้น*
       //  $number2 = 2000;   //ราคาขาย
       //  $number3 =  3; //จำนวนสินค้า
       //  $number4 = 44;   //ค่านำเข้าสินค้าเข้าโกดังจีน
       //  $number5 = 28;   //ค่านำเข้าสินค้าเข้าโกดังไทย
       //  $number6 = 7;   //ภาษี
       
     //  $ppp = getppp($total,$number3);
     //  print("- จำนวน" .$number3." ชิ้น");
     //  print("<br>");
     //  Print("- ราคารวม ".$ppp."บาท");
     //      //หาราคาต่อชิ้น
 // function gettax($number7,$ppp) {
 //     return $number7 * $ppp ;
 //       
 //   }
   // $number7 = 7 / 100; 
   // $number8 = 100; 
   //
   // $tax = getppp( $number7,$ppp);
   // print("- ภาษี" .$number6."%");
   // print("<br>");
   // Print("-ภาษี ".$tax."บาท");
   // 
   //
   // function getjj($ppp,$tax) {
   //   return $ppp - $tax ;
   //     
   // }
   //         
   // $jj = getjj( $ppp,$tax);
   // print("<br>");
   // print("- ราคารวมหลังจากหักภาษี" .$jj."บาท");
   // function getss($jj,$number2) {
   //   return $number2 - $jj ;
   //     
   // }
   //         
   // $ss = getss( $number2,$jj);
   //
   // print("<br>");
   // print("- กำไร" .$ss."บาท");
   //

  }
?>









