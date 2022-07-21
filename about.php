<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Friech Ellria Hotel Booking-ABOUT</title>
<?php require('inc/links.php');?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>

<style >
.box{
border-top-color:var(--teal) !important;
transform:scale(1.03);
transition:all 0.3s;
}

</style>
<body>
<!-- navbar -->
<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
<h2 class="fww-bold h-font text-center">ABOUT US</h2>
<div class="h-line bg-dark pop"></div>
<p class="text-center mt-3">
Hotel unveils a celebrated balance of nostalgia and contemporary style, capturing its original South east asian  elegance, luxury, and decadence. Machuca tiles form cool geometric patterns in the hallways. Hotel hardwood floors contrast modern furnishings and amenities in the dramatic suites. The Hotel lifestyle offers guests the finest sensory indulgences: soothing organic toiletries, heirloom recipes, and unmatched privacy and tranquility
</p>
</div>




<div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
  <strong><h3>Amenities and Services</h3></strong>
        <ul>
          <li><label>24 Hour room service</label></li>
          <li><label>21" Flat screen TV with cable service</label></li>
          <li><label>Hot & cold shower</label></li>
          <li><label>Refrigerator and mini bar on demand in all suites and superior rooms</label></li>
          <li><label>Coffee & tea set, bottled water, organic tolletries in suites and superior rooms</label></li>
          <li><label>Hair dryer in suite rooms</label></li>
          <li><label>Personal safety boxes in every room</label></li>
          <li><label>Laundry & pressing</label></li>
          <li><label>Free use Wifi</label></li>
          <li><label>In room massage services</label></li>
          <li><label>Personal Safe in Every Room</label></li>
          <li><label>Mini Bar</label></li>
          <li><label>7 Function & Meeting Rooms</label></li>
          <li><label>Road Trip Airport Transfers & Special City Tour</label></li>
          <li><label>Swimming Pool</label></li>
          <li><label>Gift Shop</label></li>
          <li><label>Business Center</label></li>
          <li><label>Free Parking for Guest</label></li>
        </ul>
      </div>

      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
          <img src="images/about/pic.jpg" class="w-100">
      </div>

    </div>
</div>


<div class="container mt-5">
    <div class="row ">
      <div class="col-lg-3  col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center box ">
          <img src="images/about/hotel.svg" width="70px">
          <h4 class="mt-3">100+ ROOMS</h4> 
          </div>
      </div>


      <div class="col-lg-3  col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center box ">
          <img src="images/about/customers.svg" width="70px">
          <h4 class="mt-3">200+ CUSTOMERS</h4> 
          </div>
      </div>

      <div class="col-lg-3  col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center box ">
          <img src="images/about/rating.svg" width="70px">
          <h4 class="mt-3">150+ REVIEWS</h4> 
          </div>
      </div>

      <div class="col-lg-3  col-md-6 mb-4 px-4">
          <div class="bg-white rounded shadow p-4 border-top border-4 text-center box ">
          <img src="images/about/staff.svg" width="70px">
          <h4 class="mt-3">200+ STAFFS</h4> 
          </div>
      </div>
    </div>
</div>



      

<h3 class="my-5 fw-bold h-font text-center">TEAM MEMBERS</h3>

<div class="container px-4">
<div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded"><img src="images/about/FB_IMG_1651893876749.jpg" class="w-100" height="400"><h5 class="mt-2">Iris Mechelle Gargar</h5></div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded"><img src="images/about/FB_IMG_1651894010524.jpg" class="w-100" height="400" ><h5 class="mt-2">Harbbie Dale Elopre</h5></div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded"><img src="images/about/FB_IMG_1651894173459.jpg" class="w-100" height="400" ><h5 class="mt-2">Maria Fe Dela Peña</h5></div>

      </div>

    </div>

</div>



<!-- footer -->
<?php require('inc/footer.php');?>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView:4,
        spaceBetween:40,
        loop:true,
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
