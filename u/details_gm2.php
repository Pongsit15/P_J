<?php 

include_once('Connection.php');

?>

<div class="container mt-3">
    
<div class = "row"> 
<?php 
  $id = $_GET['id'];
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
      <a href="#" class="btn btn-primary" href="details_gm2.php?id=<?=$row['id']?>">รายละเอียด</a>
    </div>
    </div>

    
  </div>
  <?php 

}
?>
</div>


