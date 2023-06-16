<?php 

    include_once('functions.php');

    $updatedata = new DB_con();

    if (isset($_POST['update'])) {

        $userid  = $_GET['id'];
        $id_Shelf = $_POST['id_Shelf'];
        $C_Color = $_POST['C_Color'];
        $db_Ttpe = $_POST['db_Ttpe'];
        $db_4 = $_POST['db_4'];
        $S_Size = $_POST['S_Size'];
        $W_Weight = $_POST['W_Weight'];
        $P_Price = $_POST['P_Price'];
        $q_t = $_POST['q_t'];

        $sql = $updatedata->update($id_Shelf, $C_Color, $db_Ttpe, $db_4, $S_Size, $W_Weight, $P_Price,$q_t, $userid);
        if ($sql) {
            echo "<script>alert('อัปเดตเรียบร้อยแล้ว!');</script>";
            echo "<script>window.location.href='../layout-static.php'</script>";
        } else {
            echo "<script>alert('บางอย่างผิดพลาด! กรุณาลองอีกครั้ง!');</script>";
            echo "<script>window.location.href='update.php'</script>";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เเก้ไขข้อมูลสินค้า</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <h1 class="mt-5">เเก้ไขข้อมูลสินค้า</h1>
        <hr>
        <?php 

        $userid = $_GET['id'];
        $update = new DB_con();
        $sql = $update->fetchonerecord($userid);
        while($row = mysqli_fetch_array($sql)) {
        ?>



        <form action="" method="post">
            <style></style>
        <div class="row">
     
            <div class="col-3">
                <label for="id_Shelf" class="form-label">รหัสชั้นวาง</label>
                <input type="number" class="form-control" name="id_Shelf" value="<?php echo $row['id_Shelf']; ?>"
                    required>
            </div>
            <div class="col-3">
                <label for="" class="form-label">ชื่อสินค้า</label>
                <input type="number" class="form-control" name=""
 required>
            </div>

            </div>
            <div class="row">
            <div class="col-sm-3 p-3 ">
           <label for="db_Ttpe" class="form-label">ประเภทสินค้า</label>
    <select class="form-select" name="db_Ttpe" required="" aria-label="Default select example">
        <option value="เครื่องครัว">เครื่องครัว</option>
        <option value="เครื่องใช้ไฟฟ้า">เครื่องใช้ไฟฟ้า</option>
        <option value="ร้องเท้า">ร้องเท้า</option>
        <option value="เสื้อผ้า">เสื้อผ้า</option>
    </select>
               
            </div>
            <div class="col-sm-3 p-3 ">
                <label for="db_4">เวลา</label>
                <input type="date" class="form-control" name="db_4" value="<?php echo $row['db_4']; ?>" required>
            </div>
            <div class="col-sm-3 p-3 ">
                <label for="ขนาด">ไซส์</label>
                <input type="text" class="form-control" name="S_Size" value="<?php echo $row['S_Size']; ?>" required>
                 </div>
            </div>
            <div class="row">
            <div class="col-sm-3 p-3 ">
                <label for="W_Weight">ขนาด</label>
                <input type="text" class="form-control" name="W_Weight" value="<?php echo $row['W_Weight']; ?>"
                    required>
            </div>
            <div class="col-sm-3 p-3 ">
                <label for="P_Price">ราคา</label>
                <input type="number" class="form-control" name="P_Price" value="<?php echo $row['P_Price']; ?>" required>
            </div>
            <div class="col-sm-3 p-3 ">
                <label for="q_t">จำนวน</label>
                <input type="number" class="form-control" name="q_t" value="<?php echo $row['q_t']; ?>" required>
            </div>
        </div>
        สี
                    <div class="row">
                        <div class="col-sm-1 p-3 ">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input btn-danger" id="check1" name="C_Color"
                                    value="สีเเดง">
                                <label class="form-check-label" for="check1"></label>
                            </div>
                        </div>

                        <div class="col-sm-1 p-3 ">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input btn-dark" id="check2" name="C_Color"
                                    value="ดำ">
                                <label class="form-check-label" for="check2"></label>
                            </div>
                        </div>
                        <div class="col-sm-1 p-3 ">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input btn-light" id="check3" name="C_Color"
                                    value="ขาว">
                                <label class="form-check-label" for="check3"></label>
                            </div>
                        </div>
                        <div class="col-sm-1 p-3 ">
                            <div class="form-check ">
                                <input type="checkbox" class=" form-check-input btn-primary " id="check4" name="C_Color"
                                    value="น้ำเงิน">
                                <label class="form-check-label" for="check4"></label>
                            </div>
                        </div>
                        

                        <style>
                            .purple-button {
                                background-color: purple;
                                color: white;
                                text-decoration: none;
                                border-radius: 5px;
                            }
                        </style>
                        <div class="col-sm-1 p-3 ">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input purple-button" id="check5" name="C_Color"
                                    value="ม่วง">
                                <label class="form-check-label" for="check5"></label>
                            </div>
                        </div>
                        <style>
                            .blue-button {
                                background-color: blue;
                                color: white;
                                text-decoration: none;
                                border-radius: 5px;
                            }
                        </style>
                        <div class="col-sm-1 p-3 ">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input blue-button" id="check6" name="C_Color"
                                    value="ฟ้า">
                                <label class="form-check-label" for="check6"></label>
                            </div>
                        </div>
                        <style>
                            .gray-button {
                                background-color: gray;
                                color: white;
                                text-decoration: none;
                                border-radius: 5px;
                            }
                        </style>
                        <div class="col-sm-1 p-3 ">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input gray-button " id="check7" name="C_Color"
                                    value="เทา">
                                <label class="form-check-label" for="check7"></label>
                            </div>
                        </div>
                        <style>
                            .brown-button {
                                background-color: brown;
                                color: white;
                                text-decoration: none;
                                border-radius: 5px;
                            }
                        </style>
                        <div class="col-sm-1 p-3 ">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input brown-button" id="check8" name="C_Color"
                                    value="น้ำตาล">
                                <label class="form-check-label" for="check8"></label>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <style>
                            .green-button {
                                background-color: green;
                                color: white;
                                text-decoration: none;
                                border-radius: 5px;
                            }
                        </style>
                        <div class="col-sm-1 p-3 ">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input green-button" id="check9" name="C_Color"
                                    value="เขียว">
                                <label class="form-check-label" for="check9"></label>
                            </div>
                        </div>
                        <style>
                            .orange-button {
                                background-color: orange;
                                color: white;
                                text-decoration: none;
                                border-radius: 5px;
                            }
                        </style>
                        <div class="col-sm-1 p-3 ">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input orange-button" id="check10"
                                    name="C_Color" value="ส้ม">
                                <label class="form-check-label" for="check10"></label>
                            </div>
                        </div>
                        <style>
                            .pink-button {
                                background-color: pink;
                                color: white;
                                text-decoration: none;
                                border-radius: 5px;
                            }
                        </style>
                        <div class="col-sm-1 p-3 ">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input pink-button" id="check11" name="C_Color"
                                    value="ชมพู">
                                <label class="form-check-label" for="check11"></label>
                            </div>
                        </div>
                        <style>
                            .yellow-button {
                                background-color: yellow;
                                color: white;
                                text-decoration: none;
                                border-radius: 5px;
                            }
                        </style>
                        <div class="col-sm-1 p-3 ">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input yellow-button" id="check12"
                                    name="C_Color" value="เหลือง">
                                <label class="form-check-label" for="check12"></label>
                            </div>
                        </div>
                    </div>
                    <div class="col p-3">
                    </div>




        

            <?php } ?>
            <button type="submit" name="update" class="btn btn-success">Update</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>

</body>

</html>