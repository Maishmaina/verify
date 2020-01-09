<?php



if(!isset($_SESSION['email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>
 
<?php
 
if(isset($_GET['delete_verified'])){


$delete_id = $_GET['delete_verified'];

$delete_slide = "DELETE from verified where verified_id='$delete_id'";


$run_delete = mysqli_query($con,$delete_slide);

if($run_delete){

echo "<script>alert('One verified Student Has Been Removed')</script>";

echo "<script>window.open('index.php?view_verified','_self')</script>";

}


} 
 
 
 

?>



<?php } ?>