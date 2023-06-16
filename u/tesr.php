<br>
    <div class="container marketing">
      <!-------------------------------------------------------------------->


      <?php 

          //     include_once('Connection.php');
          //     $fetchdata = new DB_con();
          //     $sql = $fetchdata->fetchdata();
          //     while($row = mysqli_fetch_array($sql)) {

          // ?>

      <!-------------------------------------------------------------------->

      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">ผลการคำนวณ</span>
          </h4>
          <ul class="list-group mb-3">

            <li class="list-group-item d-flex justify-content-between lh-sm">
              <?php 
   if(isset($_POST['China'])){
   $China1 = $_POST['China'];
 
    }else{
  $China1 = 0;
    }
   ?>
              <div>
                <h6 class="my-0">สกุลเงิน จีน</h6>
                <!-- <small class="text-body-secondary">Brief description</small> -->
              </div>
              <span class="text-body-secondary"><?php echo $China1;?> หยวน</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <?php 
            if(isset($_POST['Thai'])){
            $Thai1 = $_POST['Thai'];
          
        }else{
          $Thai1 = 0;
         }
            ?>
              <div>
                <h6 class="my-0">สกุลเงิน ไทย</h6>
                <small class="text-body-secondary"></small>
              </div>
              <span class="text-body-secondary"><?php echo $Thai1 ;?> บาท</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">

              <?php 
     
        if(isset($_POST['number3'])){
                $number33 = $_POST['number3'];
              }else{
                $number33 = 0;
               }
               ?>



              <div>
                <h6 class="my-0">จำนวนสินค้า</h6>
                <small class="text-body-secondary"></small>
              </div>
              <span class="text-body-secondary"><?php echo $number33 ;?> ชิ้น </span>
            </li>

            <li class="list-group-item d-flex justify-content-between lh-sm">



              <?php 
            if(isset($_POST['Thai']) && isset($_POST['number1'])){
                    $total1 = ($_POST['Thai'] * $_POST['number1']);
                  }else{
                    $total1 = 0;
                   }
                  ?>
              <div>
                <h6 class="my-0">ราคาสินค้าต่อชิ้น</h6>
                <small class="text-body-secondary"></small>
              </div>
              <span class="text-body-secondary"><?php echo $total1 ;?> บาท </span>
            </li>
            


            <!-------------------------------------- ภาษี--------------------------- -->
            <li class="list-group-item d-flex justify-content-between lh-sm">
              
            <?php 
            if(isset($_POST['number6'])  && isset($_POST['Thai']) && isset($_POST['number1'])&& isset($_POST['number3'])&& isset($_POST['number4'])&& isset($_POST['number5'])){
                    $total75 = ($_POST['number6']) / 100 * ( $_POST['Thai'] * $_POST['number1']* $_POST['number3'] + $_POST['number4'] + $_POST['number5']) ;
                   
                  }else{
                    $total75 = 0;
                   }
                  ?>

              <div>
                <h6 class="my-0">ภาษี</h6>
                <small class="text-body-secondary"></small>
              </div>
              <span class="text-body-secondary"><?php echo $total75 ;?> บาท </span>
            </li>
            <!-------------------------------------- ภาษี--------------------------- -->




            <li class="list-group-item d-flex justify-content-between lh-sm">
              <?php 
  if(isset($_POST['number4'])){
  $number4 = $_POST['number4'];
 
   }else{
 $number4 = 0;
   }
  ?>
              <div>
                <h6 class="my-0">ค่านำเข้าสินค้าเข้าโกดังจีน</h6>
                <!-- <small class="text-body-secondary">Brief description</small> -->
              </div>
              <span class="text-body-secondary"><?php echo $number4;?> บาท</span>
            </li>


            <li class="list-group-item d-flex justify-content-between lh-sm">
              <?php 
  if(isset($_POST['number5'])){
  $number5 = $_POST['number5'];
 
   }else{
 $number5 = 0;
   }
  ?>
              <div>
                <h6 class="my-0">ค่านำเข้าสินค้าเข้าโกดังไทย</h6>
                <!-- <small class="text-body-secondary">Brief description</small> -->
              </div>
              <span class="text-body-secondary"><?php echo $number5;?> บาท</span>
            </li>


            <?php 
   if(isset($_POST['Thai']) && isset($_POST['number1'])&& isset($_POST['number3'])&& isset($_POST['number4'])&& isset($_POST['number5'])){
            $total44 = ($_POST['Thai'] * $_POST['number1']* $_POST['number3'] + $_POST['number4'] + $_POST['number5']);
          }else{
            $total44 = 0;
           }
          ?>
            <li class="list-group-item d-flex justify-content-between">
              <span>ราคารวม (บาท)</span>
              <strong><?php echo number_format($total44)  ;?> บาท</strong>
            </li>
          </ul>

          <!-- <?php  
        if(isset($_POST['number6']) && isset($_POST['number1'])&& isset($_POST['number3'])){
         $total12 = ($_POST['Thai'] * $_POST['number1']* $_POST['number3']);
       }else{
         $total44 = 0;
        }
       ?>
          <li class="list-group-item d-flex justify-content-between">
            <span>ภาษี (7%)</span>
            <strong><?php echo $total44 ;?></strong>
          </li>
          </ul> -->

       
       
       
       
       
       


        </div>

        <?php 

//}
//?>
        </tbody>
        </table>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">คำนวณค่าขนส่ง</h4>
          <hr class="my-4">

          <form action="" method="post">

            <div class="row g-3">
              <div class="col-sm-4">
                <?php 
                        if(isset($_POST['Thai'])){
                          $Thai = $_POST['Thai'];
                        }
                    ?>
                <label for="Thai" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
                    <path
                      d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25L5.5 13zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28V4.487zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927V8.539z" />
                  </svg> สกุลเงิน ไทย</label>
                <input type="number" class="form-control" name="Thai" value="<?php echo $Thai;?>" required>
              </div>

              <div class="col-sm-2">
                <label for="#" class="form-label">อัตราแลกเปลี่ยน</label>
                <ul class="pagination justify-content-center">
                  </li>

                  <p content-center><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
                    </svg></p>
              </div>


              <div class="col-sm-4">
                <?php 
                         if(isset($_POST['China'])){
                           $China = $_POST['China'];
                         }
                     ?>
                <label for="China" class="form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-currency-yen" viewBox="0 0 16 16">
                    <path
                      d="M8.75 14v-2.629h2.446v-.967H8.75v-1.31h2.445v-.967H9.128L12.5 2h-1.699L8.047 7.327h-.086L5.207 2H3.5l3.363 6.127H4.778v.968H7.25v1.31H4.78v.966h2.47V14h1.502z" />
                  </svg> สกุลเงิน จีน</label>
                <input type="number" class="form-control" name="China" value="<?php echo $China;?>" required>

              </div>

              <div class="col-md-6">
                <label for="ttype" class="form-label">ประเภทสินค้า</label>
                <select class="form-select" name="ttype" required="" aria-label="Default select example">
                  <option value="สินค้าทั่วไป">สินค้าทั่วไป</option>
                  <option value="โทรศัพท์มือถือ">โทรศัพท์มือถือ</option>
                  <option value="ผ้าไหม">ผ้าไหม</option>
                </select>
              </div>

              

              <div class="col-sm-4">
                <?php 
          if(isset($_POST['number1'])){
            $number1 = $_POST['number1'];
          }
      ?>
                <label for="number1" class="form-label"> ราคาสินค้าต่อชิ้น* </label>
                <input type="number" class="form-control" name="number1" value="<?php echo $number1;?>">

              </div>

              <!-- <div class="col-md-3"> 
                        <label for="number2" class="form-label"> ราคาขาย </label>
                        <input type="text" class="form-control" name="number2" required>
                        <div class="invalid-feedback">

                        </div>
                    </div>  -->

              <div class="col-md-3">
                <?php 
                          if(isset($_POST['number3'])){
                            $number3 = $_POST['number3'];
                          }
                      ?>
                <label for="number3" class="form-label">จำนวนสินค้า</label>
                <input type="number" class="form-control" name="number3" value="<?php echo $number3;?>" required>
              </div>


              <div class="col-md-3">
                <?php 
           if(isset($_POST['number6'])){
             $number6 = $_POST['number6'];
           }
       ?>
                <label for="number6" class="form-label">ภาษี (%)</label>
                <input type="number" class="form-control" name="number6" value="<?php echo $number6;?>" required>
              </div>

              <div class="col-md-3">
                <label for="ttime" class="form-label">ว/ด/ป </label>
                <input type="datetime-local" name="ttime" class="form-control">
              </div>

              <div class="col-md-4">
                <?php 
         if(isset($_POST['number4'])){
           $number4 = $_POST['number4'];
         }
     ?>
                <label for="number4" class="form-label"> ค่านำเข้าสินค้าเข้าโกดังจีน </label>
                <input type="number" class="form-control" name="number4" value="<?php echo $number4;?>">
              </div>
              <?php 
     if(isset($_POST['number5'])){
       $number5 = $_POST['number5'];
     }
 ?>
              <div class="col-md-4">
                <label for="number5" class="form-label">ค่านำเข้าสินค้าเข้าโกดังไทย</label>
                <input type="number" class="form-control" name="number5" value="<?php echo $number5;?>">
              </div>

              <!-- <hr class="my-4"> 
                  <div class="col-md-6">
                  <button type="submit" name="insert" class="btn btn-success">คำนวณค่าขนส่ง</button>
                  <button type="button" class="btn btn-danger">ยกเลิก</button>
                  <button type="button" class="btn btn-light"><a href="/look/index.php"> ย้อนกลับ</a></button>
               
                    </div> -->
            </div> <br><br>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Calculate</button>
              <a href="tesr.php" class="btn btn-danger"> Reset </a>
            </div>


          </form><br><br>
        </div>
      </div>
    </div>

    </div>
    </div>
    </div>
  
