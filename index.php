<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Friech Ellria Hotel Booking-Home</title>
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
.column {
  float: left;
  width: 20%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

h1 {
    position: relative;
    font-family: 'Merienda', cursive;
    font-size: calc(1px + 7vw);
    font-weight: 700;
    color: #f5f5f5;
    letter-spacing: 0.02em;
    text-transform: uppercase;
    perspective: 500px;
    color: blue;
}

.titles { text-shadow: 0 0 10px red; }

</style>
<body>



<!-- navbar -->
<?php require('inc/header.php'); ?>

 <!-- carousel -->
<div class="container-fluid px-lg-4 mt-4">

		<div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.png"class="w-100 d-block"  />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.png" class="w-100 d-block" />
        </div>
            <div class="swiper-slide">
          <img src="images/carousel/5.png" class="w-100 d-block" />
        </div>
          <div class="swiper-slide">
          <img src="images/carousel/6.png" class="w-100 d-block" />
        </div>
         <div class="carousel-caption">
		      <h1 class="titles">WELCOME TO FRIECH ELLRIA HOTEL</h1>
				 </div>
      </div>

    </div>
</div>


<!-- our rooms -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
<div class="container-fluid">
	<div class="row">
		<div class="column">
			<div class="card border-0 shadow" style="max-width: 350px; margin:auto ;">
				<img src="images/rooms/01.jpg" style="height:212px;"  class="card-img-top">
				<div class="card-body">
				  <h5>Standard Room</h5>
				  <h6 class="mb-4">Php 2000</h6>

				  <div class="facilities mb-4">
					<h6 class="mb-1">Facilities</h6>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Wifi</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">AC</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Television</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Room heater</span>



				  </div>
				  <div class="rating">
					<h6 class="mb-1">Rating</h6>
					<span class="badge rounded-pill bg-light">
					<i class="bi bi-star-fill text-warning"></i>
					<i class="bi bi-star-fill text-warning"></i>
					<i class="bi bi-star-fill text-warning"></i>
					<i class="bi bi-star-fill text-warning"></i>
					</span>

				  </div>
				  <div class="facilities mb-4">
					<h6 class="mb-1">Guests</h6>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">2 Adult</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">4 Children</span>
				  </div>
				  <div class="d-flex justify-content-evenly mb-2">
					  <a href="add_reserve.php?room_id=1" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
					 <!--  <a href="" class="btn btn-sm btn-outline-dark shadow-none">More Details</a> -->
				  </div>
				</div>
			  </div>
			

		</div>

		<div class="column">
			<div class="card border-0 shadow" style="max-width: 350px; margin:auto ;">
				<img src="images/rooms/2.jpg" style="height:212px;" class="card-img-top">
				<div class="card-body">
				  <h5>Superior Room </h5>
				  <h6 class="mb-4">Php 2400</h6>

				  <div class="facilities mb-4">
					<h6 class="mb-1">Facilities</h6>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Wifi</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">AC</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Television</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Room heater</span>



				  </div>
				  <div class="rating">
					<h6 class="mb-1">Rating</h6>
					<span class="badge rounded-pill bg-light">
					<i class="bi bi-star-fill text-warning"></i>
					<i class="bi bi-star-fill text-warning"></i>
					<i class="bi bi-star-fill text-warning"></i>
					<i class="bi bi-star-fill text-warning"></i>
					</span>

				  </div>
				  <div class="facilities mb-4">
					<h6 class="mb-1">Guests</h6>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">2 Adult</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">4 Children</span>
				  </div>
				  <div class="d-flex justify-content-evenly mb-2">
					  <a href="add_reserve.php?room_id=2" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
					  <!-- <a href="" class="btn btn-sm btn-outline-dark shadow-none">More Details</a> -->
				  </div>
				</div>
			  </div>

		</div>

		<div class="column">
			<div class="card border-0 shadow" style="max-width: 350px; margin:auto ;">
				<!-- <img src="images/rooms/3.jpg" style="height:230px;" class="card-img-top"> -->
				<img src="images/rooms/3.jpg" style="height:212px;" class="card-img-top">
				<div class="card-body">
				  <h5>Super Deluxe Room</h5>
				  <h6 class="mb-4">Php 2800</h6>

				  <div class="facilities mb-4">
					<h6 class="mb-1">Facilities</h6>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Wifi</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">AC</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Television</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Room heater</span>



				  </div>
				  <div class="rating">
					<h6 class="mb-1">Rating</h6>
					<span class="badge rounded-pill bg-light">
					<i class="bi bi-star-fill text-warning"></i>
					<i class="bi bi-star-fill text-warning"></i>
					<i class="bi bi-star-fill text-warning"></i>
					<i class="bi bi-star-fill text-warning"></i>
					</span>

				  </div>
				  <div class="facilities mb-4">
					<h6 class="mb-1">Guests</h6>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">2 Adult</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">4 Children</span>
				  </div>
				  <div class="d-flex justify-content-evenly mb-2">
					  <a href="add_reserve.php?room_id=3" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
					  <!-- <a href="" class="btn btn-sm btn-outline-dark shadow-none">More Details</a> -->
				  </div>
				</div>
			  </div>

		</div>


	


		<div class="column">
			<div class="card border-0 shadow" style="max-width: 350px; margin:auto ;">
				<img src="images/rooms/4.jpg" style="height:212px;" class="card-img-top">
				<div class="card-body">
				  <h5>Jr. Suite Room</h5>
				  <h6 class="mb-4">Php 3800</h6>

				  <div class="facilities mb-4">
					<h6 class="mb-1">Facilities</h6>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Wifi</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">AC</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Television</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Room heater</span>



				  </div>
				  <div class="rating">
					<h6 class="mb-1">Rating</h6>
					<span class="badge rounded-pill bg-light">
					<i class="bi bi-star-fill text-warning"></i>
					<i class="bi bi-star-fill text-warning"></i>
					<i class="bi bi-star-fill text-warning"></i>
					<i class="bi bi-star-fill text-warning"></i>
					</span>

				  </div>
				  <div class="facilities mb-4">
					<h6 class="mb-1">Guests</h6>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">3 Adult</span>
					<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">4 Children</span>
				  </div>
				  <div class="d-flex justify-content-evenly mb-2">
					  <a href="add_reserve.php?room_id=4" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
					 <!--  <a href="" class="btn btn-sm btn-outline-dark shadow-none">More Details</a> -->
				  </div>
				</div>
			  </div>

		</div>



			<div class="column">
				<div class="card border-0 shadow" style="max-width: 350px; margin:auto ;">
					<img src="images/rooms/5.jpg" style="height:212px;" class="card-img-top">
					<div class="card-body">
					  <h5>Executive Suite Room</h5>
					  <h6 class="mb-4">Php 4000</h6>

					  <div class="facilities mb-4">
						<h6 class="mb-1">Facilities</h6>
						<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Wifi</span>
						<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">AC</span>
						<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Television</span>
						<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">Room heater</span>



					  </div>
					  <div class="rating">
						<h6 class="mb-1">Rating</h6>
						<span class="badge rounded-pill bg-light">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						</span>

					  </div>
					  <div class="facilities mb-4">
						<h6 class="mb-1">Guests</h6>
						<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">4 Adult</span>
						<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap">4 Children</span>
					  </div>
					  <div class="d-flex justify-content-evenly mb-2">
						  <a href="add_reserve.php?room_id=4" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
						 <!--  <a href="" class="btn btn-sm btn-outline-dark shadow-none">More Details</a> -->
					  </div>
					</div>
				  </div>

		</div>

 </div>
</div>
<!-- our facilities -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

<div class="container">
	<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
			<img src="images/facilities/IMG_27375.svg" width="80px">
			<h5 class="mt-3">Room Heater</h5>
		</div>
		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
			<img src="images/facilities/IMG_41622.svg" width="80px">
			<h5 class="mt-3">Television</h5>
		</div>
		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
			<img src="images/facilities/IMG_43553.svg" width="80px">
			<h5 class="mt-3">Wifi</h5>
		</div>
		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
			<img src="images/facilities/IMG_47816.svg" width="80px">
			<h5 class="mt-3">Massage</h5>
		</div>
		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
			<img src="images/facilities/IMG_49949.svg" width="80px">
			<h5 class="mt-3">AC</h5>
		</div>

	</div>

	<div class="row justify-content-evenly px-lg-0 px-md-0 px-5">

			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/facilities/IMG_96423.svg" width="80px">
				<h5 class="mt-3">Radio</h5>
		  </div>
		  <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/facilities/gifts.svg" width="80px">
				<h5 class="mt-3">Gift Shop</h5>
		  </div>

		<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/facilities/swimming-pool-solid.svg" width="80px">
				<h5 class="mt-3">Swimming pool</h5>
		  </div>

			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/facilities/food.svg" width="80px">
				<h5 class="mt-3">Catering Services</h5>
		  </div>

			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
				<img src="images/facilities/laundry.svg" width="80px">
				<h5 class="mt-3">laundry</h5>
		  </div>



		</div>


		<div class="col-lg-12 text-center mt-5">
			<a href="gallery.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
		</div>
</div>



<!-- reviews -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REVIEWS</h2>
<div class="container mt-5">
	<div class="swiper swiper-reviews">
		<div class="swiper-wrapper mb-5">
			<div class="swiper-slide bg-white p-4">
				<div class="profile d-flex align-items-center mb-3">
				<img src="images/facilities/person-circle.svg" width="30px">
				<h6 class="m-0 ms-2">conjuror88</h6>
			</div>
				<p>Place - 👍👍Room is clean and spacious. Water supply is good. Comfortable bed <br>

					View - 👍👍Very nice view<br>

					Food - 👍👍Delicous! Good value for money.<br>

					Service - 👎Restaurant service is so poor. We waited for 1 hour for our food during dinner. Tried to adjust in the morning by doing advance order but still we waited the same time. Food arrives 1 after the other.<br>

					Staff - 👍👍 courteous and helpful</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
					</div>
			</div>

			<div class="swiper-slide bg-white p-4">
				<div class="profile d-flex align-item-center mb-3">
				<img src="images/facilities/person-circle.svg" width="30px">
				<h6 class="m-0 ms-2">ManilaHsucks</h6>
			</div>
			<h6>An Awesome experience</h6>
				<p>Stayed here for 2 weeks. Was picked from Clark Airport with their luxury van. Upon arrival check in was smooth, friendly staff. Room was clean and spacious. Food was delicious. Free shuttle to diving centre, Dive Union. Excellent instructors with well maintained equipment. Overall an Awesome experience. Will be back soon. </p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
					</div>
			</div>

			<div class="swiper-slide bg-white p-4">
				<div class="profile d-flex align-item-center mb-3">
				<img src="images/facilities/person-circle.svg" width="30px">
				<h6 class="m-0 ms-2">Ho Wei Yang </h6>
			</div>
			<h6>Great staff</h6>
				<p>
					Having a great time here and Beauce,G, is friendly as he welcomed us with a smile and any information we needed to make our night the beat. The hotel is clean and will definitely stay again. SB is beautiful</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
					</div>
			</div>

			<div class="swiper-slide bg-white p-4">
				<div class="profile d-flex align-item-center mb-3">
				<img src="images/facilities/person-circle.svg" width="30px">
				<h6 class="m-0 ms-2">bellamd2017</h6>
			</div>
			<h6>Enjoyed our stay</h6>
				<p>
				Love this hotel . It’s near the beach . Their pool is clean. Staff very helpful. Gave us free welcome tea drinks while waiting for check in. We ate in their restaurant breakfast, lunch and dinner, very delicious foods especially the crispy pata , we ordered that several times. We will stay there again.
			</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
					</div>
			</div>

			<div class="swiper-slide bg-white p-4">
				<div class="profile d-flex align-item-center mb-3">
				<img src="images/facilities/person-circle.svg" width="30px">
				<h6 class="m-0 ms-2">ZzaJzZ</h6>
			</div>
			<h6>Awesome Experience at Awesome Hotel</h6>
				<p>
				Our family visited La Union this weekend. I must say, the hotel is indeed awesome! But what stands out the most is its wonderful staffs! They were very accomodating to our requests! A day before our check in, I asked the hotel if they can arrange the room with flowers and petals for our friends who will be celebrating their wedding anniversary. They happily accepted our request. When the couple arrived to their room, it was a very romantic set up that welcomed them! I also appreciate when they upgraded our room at no charge. I must say, the staffs of Awesome Hotel are truly AWESOME! Thank you!</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
					</div>
			</div>

			<div class="swiper-slide bg-white p-4">
				<div class="profile d-flex align-item-center mb-3">
				<img src="images/facilities/person-circle.svg" width="30px">
				<h6 class="m-0 ms-2">DonnaM</h6>
			</div>
			<h6>A bit expensive but okay</h6>
				<p>Stayed here twice already this year. Good food and friendly staffs. The resort is still under construction. Rooms are clean but can be cleaner. They need to focus on maintainance, some parts need to be fixed/changed. Fast wifi.</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
					</div>
			</div>
		</div>
		<div class="swiper-pagination"></div>
	  </div>
	  <div class="col-lg-12 text-center mt-5">
		<a href="about.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>></a>
	</div>
</div>


<!-- reach us -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
			<iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.418979087663!2d123.41928751526389!3d8.651641597165915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3254bf415b6d56cb%3A0x329629b55f56bd66!2sCrisostomo%20Ibarra%20St%2C%20Dapitan%20City%2C%20Zamboanga%20del%20Norte!5e0!3m2!1sen!2sph!4v1651747951672!5m2!1sen!2sph"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		<div class="col-lg-4 col-md-4">
			<div class="bg-white p-4 rounded mb-4">
				<h5>Call us</h5>
				<i class="bi bi-telephone-fill"></i>
				<a href="tel:#" class="d-inline-block mb-2 text-decoration-none text-dark">09161616763</a><br>
				<i class="bi bi-telephone-fill"></i>
				<a href="tel:#" class="d-inline-block mb-2 text-decoration-none text-dark">09453027388</a><br>
				<i class="bi bi-telephone-fill"></i>
				<a href="tel:#" class="d-inline-block mb-2 text-decoration-none text-dark">09667145597</a><br>				
			</div>

			<div class="bg-white p-4 rounded mb-4">
				<h5>Follow us</h5>
				<a href="https://mobile.twitter.com/GargarIris" class="d-inline-block mb-3">
				<span class="badge bg-light text-dark fs-6 p-2">
				<i class="bi bi-twitter"></i> Twitter
				</span>
				</a>
                 <br>
				<a href="https://www.facebook.com/profile.php?id=100008121919044" class="d-inline-block mb-3">
					<span class="badge bg-light text-dark fs-6 p-2">
				<i class="bi bi-facebook"></i>
				Facebook</span>
				</a>
				<br>
				<a href="https://www.instagram.com/irismechelle08/" class="d-inline-block">
			   <span class="badge bg-light text-dark fs-6 p-2">
				<i class="bi bi-instagram"></i>
				Instagram</span>
				</a>

			</div>
		</div>
	</div>
</div>


<!-- footer -->
<?php require('inc/footer.php');?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
       loop: true,
       autoplay:{
       	 delay:3500,
       	 disableOnInteraction:false,
       }
      });

	  var swiper = new Swiper(".swiper-reviews", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
		slidesPerView: "3",
		loop:true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,

        },
        pagination: {
          el: ".swiper-pagination",
        },
		breakpoints:{
			320:{
				slidesPerView: 1,
			},
			640:{
				slidesPerView: 1,
			},
			768:{
				slidesPerView: 2,
			},
			1024:{
				slidesPerView: 3,
			},
		},
      });

  </script>
</body>
</html>
