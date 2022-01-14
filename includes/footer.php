

<footer>
	<div class="footer-top">
		<div class="container">		
			<div class="footer-row">	
				<div class="footer-col-1">	
					<div class="logo-box">
						<a href="index.php">
							<img src="assets/images/header-logo.png" alt="img" class="img-fluid">
						</a>
					</div>
					<p class="tagline">Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do.</p>		
				</div>	
				<div class="footer-col-2">
					<h1 class="heading">Explore</h1>
					<ul class="list-unstyled">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="donor.php">Donor</a></li>
						<li><a href="support.php">Support</a></li>
						<li><a href="donate.php">Start Donating</a></li>
					</ul>
				</div>	
				<div class="footer-col-3">
					<h1 class="heading">Contact Us</h1>
					<ul class="list-unstyled">
						<li><a href="#!"><i class="fas fa-phone-alt"></i> (123) 123 1234</a></li>
						<li><a href="#!"><i class="fas fa-envelope"></i> info@helpinghand.com</a></li>
						<li><a href="#!"><i class="fas fa-map-marker-alt"></i> Lorem Ispum, Dummy, US, Street no : 12345</a></li> 
					</ul>
				</div>	
				<div class="footer-col-4">
					<h1 class="heading">News Letter</h1>
					<ul class="list-unstyled">
						<li><p>Keep up with our latest news Subscribe to our newsletter</p></li>
						<li>
							<form>
								<input type="email" name="" placeholder="Email Address">
								<a href="#!" class="send-btn"><i class="far fa-paper-plane"></i></a>
							</form>
						</li>
						<li class="social-icon">
							<a href="#!" class="social-item"><i class="fab fa-facebook-f"></i></a> 
							<a href="#!" class="social-item"><i class="fab fa-instagram"></i></a> 
							<a href="#!" class="social-item"><i class="fab fa-twitter"></i></a> 
							<a href="#!" class="social-item"><i class="fab fa-linkedin-in"></i></a> 		
						</li>
					</ul>
				</div>	
			</div>
		</div>
	</div>
	<div class="footer-buttom">
		<p class="tagline">Copyright © 2021. Helping Hand Adapt. All Right Reserved.</p>
	</div>		
</footer>

<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/stellarnav.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script> 
<script src="assets/js/calendar.min.js"></script>
<script src="assets/js/custom.js"></script> 
<script>
    
$(".appendVal").click(function(){
    var store = $(this).val();
    // alert(store);
    var inputval = $("#give-amount").val(store);
});


</script>

<script>
  AOS.init({
  	disable: 'tablet'
  });
</script>

</body>
</html>
