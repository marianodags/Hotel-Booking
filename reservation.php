<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Friech Ellria Hotel Booking</title>
<?php require('inc/links.php');?>
</head>

<style >

.availability-form{
	margin-top: -50px;
	z-index: 2;
	position: relative;
}
@media screen and (max-width: 575px){
	.availability-form{
	margin-top: 0px;
	padding: 0 35px;


}
}
</style>
<body>
	<?php require('inc/header.php'); ?>
	<div  class = "container my-5 px-4">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>MAKE A RESERVATION</h3></strong>
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "color:#00ff00;"><?php echo "Price: Php. ".$fetch['price'].".00"?></h4>
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">1 Room 1 Bathroom 1 Balcon 3 Sofa </span>
							<h6 class="mb-1">Rating</h6>
							<span class="badge rounded-pill bg-light">
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							</span>
							
							<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i>Book Now</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>


	<br><br><br><br><br>
	<?php require('inc/footer.php'); ?>
</body>
</html>