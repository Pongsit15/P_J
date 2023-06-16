<!-- code รายละเอียด -->
<!-- <div class="contatiner">
    <div class = "row"> 
<div class = "col-md-4">
    <img src="../img/1.jpg" alt="" width="350px" class="mt2 p-2 my-2 border">
</div>
<div class="col-md-6">
    ID: <br>
    <h5 class="text-success"></h5>
    ประเภทสินค้า : <br>
    รายละเอียด: <br>
    ราคา : <b class="text-danger"></b> <br>

</div>



    </div >
</div>

 -->


 <!-- <div class="contatiner"> 
    <div class = "row"> 
<div class = "col-md-3">
    <img src="../img/1.jpg" alt="" width="350px" class="mt2 p-2 my-2 border">

<div class="col-md-6">
    ID: <br>
    <h5 class="text-success"></h5>
    ประเภทสินค้า : <br>
    รายละเอียด: <br>
    ราคา : <b class="text-danger"></b> <br>

</div>

</div>

    </div >
</div>-->
<?php 

include_once('Connection.php');

?>


<div class="container mt-3">
    
<div class = "row"> 
<?php 
   $fetchdata = new DB_con();
   $sql = $fetchdata->fetchdata();
   while($row = mysqli_fetch_array($sql)) {
   
   ?>
  <div class = "col-md-3">
    <div class="text-center">
    <img class="card-img-top" src="../img/1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?php echo $row['db_Ttpe']; ?></h4>
      <p class="card-text">ชั้นที่ : <?php echo $row['id_Shelf']; ?></p>
      <p class="text-danger">ราคา : <?php echo $row['P_Price']; ?></p>
      <a href="details_gm2.php?update_id=<?php echo $row["id"]; ?>"
		class="status completed">รายละเอียด</a>
      <!-- <a href="#" class="btn btn-primary" href="details_gm2.php?id=<?=$row['id']?>">รายละเอียด</a> -->
    </div>
    </div>

    
  </div>
  <?php 

}
?>

</div>