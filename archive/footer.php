<footer class="footer">
		<div class="footer-main-area" data-background="images/footer-bg.png">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="widget footer-widget">
							<h5 class="widget-title text-white mrb-30">About India Grain</h5>
							   <p>India Grain Color Sorter has been established in Coimbatore as a 
							   color sorter manufacturing company in South India. Our traditional
							   business model is based on the accomplishment of color sorter machine 
							   India Grainets in all over India and abroad. </p>
						
							<ul class="social-list">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-xl-2 col-lg-6 col-md-6">
						<div class="widget footer-widget">
							<h5 class="widget-title text-white mrb-30">Useful Links</h5>
							<ul class="footer-widget-list">
								<li><a href="Index.php">Home</a></li>
								<li><a href="about_us.php">About</a></li>
						    	<li><a href="masale.php">Masale</a></li>
						    	<li><a href="dry_fruits.php">Dry Fruits</a></li>
								<li><a href="contact-us.php">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6">
						<div class="widget footer-widget">
							<h5 class="widget-title text-white mrb-30">Export</h5>
								<p class="text-light-gray">T-11, Pankaj Plaza, Plot & Pkt. No.-7, Sector-12, Dwarka, New Delhi - 110078 (INDIA)</p>
								<div class="display-inline-block mrb-5"><a href="tel:7311155567" class="text-light-gray"><i class="fa fa-phone colo mrr-10"></i>+91-7311155567</a></div>
								<div class="display-inline-block mrb-5"><a href="mailto:info@indiagrain.in" class="text-light-gray"><i class="fa fa-envelope-o colo mrr-10"></i>info@indiagrain.in</a></div>
								<div class="display-inline-block"><a href="mailto:uday@indiagrain.in" class="text-light-gray"><i class="fa fa-envelope-o colo mrr-10"></i>uday@indiagrain.in</a></div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="widget footer-widget">
							<h5 class="widget-title text-white mrb-30">Send Message</h5>
<?php
    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST")
    {
    $name=$_POST['name'];
     $email=$_POST['email'];
     $message=$_POST['message'];
     $to="info@indiagrain.in,uday@indiagrain.in";
    $txt="Name:-".$name."\n"."Email Id:-".$email."\n"."Message.:- ".$message;
    if(mail($to,"India Grain",$txt,"From:$email")) {
      echo "<script>alert('Successfully Message sent')</script>";
   
    }else{
    echo "<script>alert('Query Failed')</script>";
    }
}
   ?>        
						   <form method="post">
						    <div class="form-group">
						    	<input type="text" class="form-control ft_color" name="name" placeholder="Name" required="required">
							</div>
							<div class="form-group">
						    	<input type="email" class="form-control ft_color" name="email" placeholder="Email" required="required">
							</div>
							<div class="form-group">
						    	<textarea class="form-control ft_color" name="message"  rows="3" placeholder="Message" required="required" aria-required="true"></textarea>
							</div>
							<button type="submit" name="submit" class="cs-btn-one btn-gradient-color btn-sm has-icon mrt-20">
							    
							        <i class="webexflaticon flaticon-send"></i>Submit Now</button>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom-area">
			<div class="container">

				<div class="row">
					<div class="col-xl-6">
						 <span class="text-light-gray">© India Grain. All Rights Reserved.   </span>
					 </div>
					<div class="col-xl-6">
					 <div> <span class="text-light-gray text-left ">Curated by National Marketing Projects Inc.</span></div>
					</div>
				 
				 </div>










				<!-- <div class="row"> -->

						<!-- <div class="col-xl-6">
							<div class="text-center">
								<span class="text-light-gray">© India Grain. All Rights Reserved.   </span>
							</div>
						</div>
		 <div class="col-xl-6">
	<span class="text-light-gray">Curated by <a class="text-primary-color" target="_blank" href="https://nationalmarketingprojects.com/">National Marketing Projects Inc.</a>
			 
		 </span></div> -->





					
					<!-- <div class="col-xl-12">
						<div class="text-center">
							<span class="text-light-gray">© India Grain. All Rights Reserved. Curated by <a class="text-primary-color" target="_blank" href="https://nationalmarketingprojects.com/">National Marketing Projects Inc.</a>  </span>
						</div>
					</div> -->
				<!-- </div> -->
			</div>
		</div>
	</footer>
	<!-- Footer Area End -->
	<!-- BACK TO TOP SECTION -->
	<a href="tel:+91 7311155567"><img src="image/call.gif" class="call"></a>
	<div class="whatsapp-icon-foot">
      <a href="https://api.whatsapp.com/send/?phone=7311155567&amp;text&amp;app_absent=0" target="_blank">
         <div class="whatsssp"> <p> <i class="fa fa-whatsapp" aria-hidden="true"></i></p></div></a>
     </div>
	<div class="back-to-top bg-gradient-color">
		<i class="fa fa-angle-up"></i>
	</div>
	<!-- Integrated important scripts here -->
	<script src="js/jquery.v1.12.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-core-plugins.js"></script>
	<script src="js/main.js"></script>
	<!-- Revolution Slider -->
	<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="revolution/js/slider_v1.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>-->
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

</body>
</html>