<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <title>ฟ้ารุ่ง 2014</title>
</head>
ิ

<body>
  <header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32">
        <use xlink:href="#bootstrap"></use>
      </svg>
      <h3 class="fw-normal">ห้างหุ้นส่วนจำกัด ฟ้ารุ่งชนธวัช 2014</h3>
    </a>
    <ul class="nav nav-pills">
      <li class="nav-item"><a href="./calculate.php" class="nav-link active" aria-current="page">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-file-spreadsheet" viewBox="0 0 16 16">
            <path
              d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v4h10V2a1 1 0 0 0-1-1H4zm9 6h-3v2h3V7zm0 3h-3v2h3v-2zm0 3h-3v2h2a1 1 0 0 0 1-1v-1zm-4 2v-2H6v2h3zm-4 0v-2H3v1a1 1 0 0 0 1 1h1zm-2-3h2v-2H3v2zm0-3h2V7H3v2zm3-2v2h3V7H6zm3 3H6v2h3v-2z" />
          </svg> คำนวณค่าขนส่ง</a></li>
      <li class="nav-item"><a href="../look/oo/index.php" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd"
              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
          </svg> เข้าสู่ระบบ</a></li>
    </ul>
  </header><br>

  <main>

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
            if(isset($_POST['number6']) && isset($_POST['number1'])){
                    $total75 = 7 / 100  * 29214 ;
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
              <strong><?php echo $total44 ;?> บาท</strong>
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
  </main>
</body>