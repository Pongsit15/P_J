<?php 

include_once('Connection.php');

?>

                  <div class="container-fluid px-4">
                      <h1 class="mt-4">ข้อมูลพนังงาน</h1>
                      <ol class="breadcrumb mb-4">
                          <li class="breadcrumb-item"><a href="index.html">ฐานข้อมูลพนักงาน</a></li>
                          <li class="breadcrumb-item active">ข้อมูลพนังงาน</li>
                      </ol>
                      <div class="card mb-4">
                          <div class="card-body">
                              หากต้องการเพิ่มข้อมูลพนังงานกรุณากด
                              <a target="_blank" href="https://datatables.net/">เพิ่มข้อมูล</a>

                          </div>
                      </div>
                      <div class="card mb-4">
                          <div class="card-header">
                              <i class="fas fa-table me-1"></i>
                              ตารางข้อมูลพนังงาน
                          </div>
                          <div class="card-body">
                              <table id="datatablesSimple">
                                  <thead>
                                      <tr>
                                          <th>รหัสสินพนักงาน</th>
                                          <th>ชื่อ นามสกุล</th>
                                          <th>เบอร์โทรติดต่อ</th>
                                          <th>ที่อยู่</th>
                                          <th>ตำเเหน่ง</th>
                                          <th>รายได้</th>
                                          <th>หมายเหตุ</th>
                                      </tr>
                                  </thead>

                                 <!-- <tfoot> -->
                                      <!-- <tr> -->
                                          <!-- <th>id</th> -->
                                          <!-- <th>id_Shelf</th> -->
                                          <!-- <th>ชื้อสินค้า</th> -->
                                          <!-- <th>C_Color</th> -->
                                          <!-- <th>db_Ttpe</th> -->
                                          <!-- <th>db_4</th> -->
                                      <!-- </tr> -->
                                  <!-- </tfoot>  -->

                                  <tbody>
                                      <?php 
                                        $employee_fetchdata = new DB_con();
                                        $sql = $employee_fetchdata->employee_fetchdata();
                                        while($row = mysqli_fetch_array($sql)) {
                                        
                                        ?>

                                      <tr>
                                          <td><?php echo $row['employee_id']; ?></td>
                                          <td><?php echo $row['employee_name']; ?></td>
                                          <td><?php echo $row['employee_mobile']; ?></td>
                                          <td><?php echo $row['employee_assress']; ?></td>
                                          <td><?php echo $row['employee_position']; ?></td>
                                          <td><?php echo $row['employee_income']; ?></td>
                                          <td><span class="badge text-bg-success rounded-pill">Success</span></td>


                                          
                                      </tr>

                                      <?php 

}
?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>