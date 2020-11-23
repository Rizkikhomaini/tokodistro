<?php include('header.php'); ?>
<?php include('index.php'); ?>


<div class="row">
			<div class="col-sm-7">
				<hr/>
				<div class="review">		
				<?php
				$ratinguery = "SELECT ratingId, itemId, userId, ratingNumber, title, comments, created, modified FROM item_rating AND nama_toko";
				$ratingResult = mysqli_query($conn, $ratinguery) or die("database error:". mysqli_error($conn));
				while($rating = mysqli_fetch_assoc($ratingResult)){
					$date=date_create($rating['created']);
					$reviewDate = date_format($date,"M d, Y");			
				?>			

				 <td>
            <a href="saveRating.php?itemId=<?php echo $r['itemId'] ?>" class="delete btn btn-circle  btn-danger btn-xs" ><i class="ico fa fa-trash"></i></a>
            &nbsp;<a href='?page=edit_toko&id=<?php echo base64_encode($r['id_toko']) ?>' class="btn btn-circle  btn-success btn-xs" ><i class="ico fa fa-edit"></i></a>
            </td>
	
					</div></div>