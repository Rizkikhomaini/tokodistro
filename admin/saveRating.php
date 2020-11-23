<?php
include_once("action/koneksi.php");
if(!empty($_POST['rating']) && !empty($_POST['tbl_toko'])){
	$itemId = $_POST['tbl_toko'];
	$userID = 1234567;		
  $cek_rate = mysqli_fetch_assoc(mysqli_query($conn,"select count(itemId) as jum from item_rating where itemId = '$itemId'"));
  if($cek_rate['jum'] == 0){
  	$insertRating = "INSERT INTO item_rating (itemId, userId, ratingNumber, title, comments, created, modified) VALUES ('".$itemId."', '".$userID."', '".$_POST['rating']."', '".$_POST['title']."', '".$_POST["comment"]."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')";
  	mysqli_query($conn, $insertRating) or die("database error: ". mysqli_error($conn));		
  	echo "rating saved!";
  }else{ 
    $updateRating = "UPDATE item_rating set ratingNumber ='".$_POST['rating']."' where itemId='$itemId'";
    mysqli_query($conn, $updateRating) or die("database error: ". mysqli_error($conn));   
    echo "rating updated!";
  }
}
?>
