<?php 

    include_once('functions.php');

    $insertdata = new DB_con();
    if (isset($_POST['insert'])) {
        $id_Shelf = $_POST['id_Shelf'];
        $C_Color = $_POST['C_Color'];
        $db_Ttpe = $_POST['db_Ttpe'];
        $db_4 = $_POST['db_4'];
        $S_Size = $_POST['S_Size'];
        $W_Weight = $_POST['W_Weight'];
        $P_Price = $_POST['P_Price'];
        $q_t = $_POST['q_t'];
        
        $sql = $insertdata->insert($id_Shelf, $C_Color, $db_Ttpe, $db_4, $S_Size, $W_Weight, $P_Price, $q_t);

        if ($sql) {
            echo "<script>alert('ดำเนินการเรียบร้อยแล้ว!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('บางอย่างผิดพลาด! กรุณาลองอีกครั้ง!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?> <style>
    .custum-file-upload {
  height: 200px;
  width: 300px;
  display: flex;
  flex-direction: column;
  align-items: space-between;
  gap: 20px;
  cursor: pointer;
  align-items: center;
  justify-content: center;
  border: 2px dashed #cacaca;
  background-color: rgba(255, 255, 255, 1);
  padding: 1.5rem;
  border-radius: 10px;
  box-shadow: 0px 48px 35px -48px rgba(0,0,0,0.1);
}

.custum-file-upload .icon {
  display: flex;
  align-items: center;
  justify-content: center;
}

.custum-file-upload .icon svg {
  height: 80px;
  fill: rgba(75, 85, 99, 1);
}

.custum-file-upload .text {
  display: flex;
  align-items: center;
  justify-content: center;
}

.custum-file-upload .text span {
  font-weight: 400;
  color: rgba(75, 85, 99, 1);
}

.custum-file-upload input {
  display: none;
}
     </style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลสินค้า</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <h1 class="mt-5">เพิ่มข้อมูลสินค้า</h1>
        <hr>
        <form action="" method="post">


            <div class="row">
                <div class="col-3"><label for="id_Shelf" class="form-label">รหัสชั้นวาง</label>
                    <input type="text" class="form-control" name="id_Shelf" required></div>

                <div class="col-3"> <label for="db_Ttpe" class="form-label">ประเภทสินค้า</label>
                    <select class="form-select" name="db_Ttpe" required="" aria-label="Default select example">
                        <option value="เครื่องครัว">เครื่องครัว</option>
                        <option value="เครื่องใช้ไฟฟ้า">เครื่องใช้ไฟฟ้า</option>
                        <option value="ร้องเท้า">ร้องเท้า</option>
                        <option value="เสื้อผ้า">เสื้อผ้า</option>
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-8">


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


                    <div class="row">
                        <div class="col-3">
                            <label for="db_4">เวลา</label>
                            <input type="date" class="form-control" name="db_4" required>
                       </div>
                       <div class="col-3">
                             <label for="S_Size">ไซส์</label>
                             <input type="text" class="form-control" name="S_Size" required>
                         </div>
                         <div class="col-3">
                            <label for="W_Weight">ขนาด</label>
                            <input type="text" class="form-control" name="W_Weight" required>
                         </div>

                    </div><br>
                    <div class="row">
                    <div class="col-3">
                        <label for="P_Price">ราคา</label>
                        <input type="number" class="form-control" name="P_Price" required>
                    </div>
                    <div class="col-3">
    <label for="q_t">จำนวน</label>
    <input type="number" class="form-control" name="q_t" required>
</div>
                    </div>
                </div>
                
                
                <div class="col p-3 ">
                <label class="custum-file-upload" for="file">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
</div>
<div class="text">
   <span>คลิกเพื่ออัปโหลดภาพ</span>
   </div>
   <input type="file" id="file">
</label>

                </div>
                
            </div><br>
            <div class="row">
            <div class="col-3">
            <button type="submit" name="insert" class="btn btn-success">Insert</button>
            
        </div>
        <!-- <a href="index.php" class="btn btn-primary mt-3">Go Back</a> -->
            <div class="col-3">
            </div>

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