<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>เครื่องคิดเลขอย่างง่าย by devbanban.com</title>
  </head>
  <body style="background-color: green">
   

    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5"> <br> <br>
           <h3>PHP เครื่องคิดเลขอย่างง่าย</h3>

          <?php 
            //print_r($_POST);
          ?>

          <form method="post">
            
            <div class="form-group">
              <?php 
                if(isset($_POST['number1'])){
                  $number1 = $_POST['number1'];
                }
            ?>
              <input type="number" name="number1" required min="0" placeholder="Number1" class="form-control" value="<?php echo $number1;?>">
            </div>

            <div class="form-group">

              <?php 
              //สร้างเงื่อนไขรับ $_POST เพื่อแสดงใน select/option
                if(isset($_POST['operator'])){
                      $operator = $_POST['operator'];
                      if($operator == 1){
                        $ovalue = 1;
                        $olebel = '7%';
                      }else if ($operator == 2) {
                        $ovalue = 2;
                        $olebel = '10%';
                      }else if ($operator == 3) {
                        $ovalue = 3;
                        $olebel = '15%';
                      }else if ($operator == 4) {
                        $ovalue = 4;
                        $olebel = '20%';
                      }
                } //close
            ?>
              <select name="operator" required class="form-control">
                  <?php  if(isset($_POST['operator'])){ ?>
                    <option value="<?php echo $ovalue;?>"><?php echo $olebel;?></option>
                <?php } ?>

                  <option value="">-เครื่องหมาย-</option>
                  <option value="1">7%</option>
                  <option value="2">10%</option>
                  <option value="3">15%</option>
                  <option value="4">20%</option>
                </select>  
            </div>

            <div class="form-group">
              <?php 
                if(isset($_POST['number2'])){
                  $number2 = $_POST['number2'];
                }
            ?>
               <input type="number" name="number2" required min="0" placeholder="Number2" class="form-control" value="<?php echo $number2;?>">
               
            </div>

             <div class="form-group">

              <?php 
              //เงื่อนเช็ค operator
                if(isset($_POST['number1']) && isset($_POST['number2'])){

                   $operator = $_POST['operator'];
                      if($operator == 1){
                        $total = ($_POST['number1'] + $_POST['number2']);
                      }else if ($operator == 2) {
                         $total = ($_POST['number1'] - $_POST['number2']);
                      }else if ($operator == 3) {
                         $total = ($_POST['number1'] * $_POST['number2']);
                      }else if ($operator == 4) {
                         $total = ($_POST['number1'] / $_POST['number2'] );
                      }

                }else{
                  $total = 0;
                }
            ?>
            
               <input type="number" name="output"  placeholder="ผลลัพธ์" class="form-control" readonly value="<?php echo $total ;?>">
            </div>

            <div class="form-group">
               <button type="submit" class="btn btn-primary">Calculate</button>
               <a href="calculator.php" class="btn btn-danger"> Reset </a>
            </div>


          </form>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
