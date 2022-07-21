<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Friech Ellria Hotel Booking-CONTACT</title>
<?php require('inc/links.php');?>
</head>

<style >
.pop:hover{
border-top-color:var(--teal) !important;
transform:scale(1.03);
transition:all 0.3s;
}
</style>
<body>
<!-- navbar -->
<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
<h2 class="fww-bold h-font text-center">CONTACT US</h2>
<div class="h-line bg-dark pop"></div>
<p class="text-center mt-3">
For more questions please contact us here!!
</p>
</div>








<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">

                    <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.418979087663!2d123.41928751526389!3d8.651641597165915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3254bf415b6d56cb%3A0x329629b55f56bd66!2sCrisostomo%20Ibarra%20St%2C%20Dapitan%20City%2C%20Zamboanga%20del%20Norte!5e0!3m2!1sen!2sph!4v1651747951672!5m2!1sen!2sph"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/Sc35aaPJSHJxnYCq9"
                    target="_blank" class="d-inline-block text-decoration-none text-dark mb-2"><i class="bi bi-geo-alt-fill">
                    </i>Crisostomo Ibarra St Dapitan City, Zamboanga del Norte</a>
                            <h5>Call us</h5>
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:#" class="d-inline-block mb-2 text-decoration-none text-dark">09667145597</a><br>
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:#" class="d-inline-block mb-2 text-decoration-none text-dark">09453027388</a><br>
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:#" class="d-inline-block mb-2 text-decoration-none text-dark">09161616763</a>
                            <h5 class="my-4">Email</h5>
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto: elopreharbbie@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">elopreharbbie@gmail.com</a><br>
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto: irismechellegargar@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">irismechellegargar@gmail.com</a><br>
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto: mdelapena580@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">mdelapena580@gmail.com</a><br>
                            <h5 class="mt-4">Follow us</h5>
                            <a href="http://twitter.com" class="d-inline-block  text-dark fs-5 me-2"><i class="bi bi-twitter me-1"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=100008121919044" class="d-inline-block  text-dark fs-5 me-2"><i class="bi bi-facebook me-1"></i></a>
                            <a href="https://www.instagram.com/irismechelle08/" class="d-inline-block text-dark fs-5"><i class="bi bi-instagram me-1"></i></a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
            <form class="" action="submitmessage.php" method="post">
                <h5>Send a message!</h5>


				<div class="mt-3">
				    <label  class="form-label" style="font-weight:500;">Name</label>
				    <input type="text" name="name" class="form-control shadow-none" required>
				  </div>
				  	<div class="mt-3">
				    <label  class="form-label" style="font-weight:500;">Email</label>
				    <input required type="email" name="email" class="form-control shadow-none">
				  </div>
                  <div class="mt-3">
				    <label  class="form-label" style="font-weight:500;">Subject</label>
				    <input required type="text" name="subject" class="form-control shadow-none">
				  </div>
				  	<div class="mt-3">
				    <label  class="form-label" style="font-weight:500;">Message</label>
				    <textarea required name="message" class="form-control shadow-none"  rows="5" style="resize:none;;"></textarea>
				  </div>
				  <div class=" my-1">
					 <button type="submit" class="btn text-white custom-bg mt-3 ">SEND</button>
					</div>
		      </div>
		  	</form>
            </div>

        </div>
    </div>
</div>


<br><br><br>

<!-- footer -->
<?php require('inc/footer.php');?>

</body>
</html>
