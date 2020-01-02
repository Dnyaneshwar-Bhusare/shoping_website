<!-- FOOTER -->
<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>This is a online fish shooping portal </p>
								<ul class="footer-links">
									<li><a href="https://www.google.com/maps/place/Pusad,+Maharashtra/@19.9093604,77.528328,13z/data=!3m1!4b1!4m5!3m4!1s0x3bd1754ee1c7bba1:0x4fa254d0a0f7568e!8m2!3d19.9104257!4d77.568649"><i class="fa fa-map-marker"></i>Pusad,Maharashtra</a></li>
									<li><a href=""><i class="fa fa-phone"></i>9405766421</a></li>
									<li><a href="https://www.google.com/intl/en-GB/gmail/about/#"><i class="fa fa-envelope-o"></i>dannybhusare@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
								
								<?php
							$cat_fetch = "SELECT * FROM `categories` ";
							$category = mysqli_query($con, $cat_fetch);
							while ($data = mysqli_fetch_assoc($category)) {
								$cat_title = $data['cat_title'];
								$cat_id = $data['cat_id'];
							
							?>

							<li><a href='index.php?cat_id=<?php echo $cat_id; ?>'>
							<?php
										echo $cat_title;
																						?></a></li>
                            <?php
							}
							?>
								</ul>
							</div>
						</div>

                <div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="contact_us/contact_us.php">Contact Us</a></li>
									<li><a href="privacy.php">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Service</h3>
                        <ul class="footer-links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="header.php",class="cart-dropdown">View Cart</a></li>
                          
                          
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://vishwajyoti.in" target="_blank">Vishwajyoti</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->
