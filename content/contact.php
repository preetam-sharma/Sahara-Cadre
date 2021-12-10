<?php include 'header.php';?>
<section class="page_breadcrumbs ds section_padding_top_50 section_padding_bottom_50">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="highlight">Contact Us</h2>
							<ol class="breadcrumb darklinks">
								<li>
									<a href="/">Home</a>
								</li>
								<li class="active">Contact Us</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section >
				<row>
                <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7012.917478205378!2d77.05599799999999!3d28.495842800000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x44b0d3eafac377b2!2zMjjCsDI5JzQ1LjEiTiA3N8KwMDMnMjcuMCJF!5e0!3m2!1sen!2sin!4v1637818771613!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                </row>
			</section>

			<section class="ls columns_padding_25 section_padding_top_50 section_padding_bottom_50">
				<div class="container">
					
					<div class="row">
					<div class="col-sm-12">
						<h5 class="thin  text-uppercase">INFORMATION</h5>
							<h3 class="mpt1">Drop us a message for any query</h3>
						</div>
						<div class="col-md-8 to_animate" data-animation="scaleAppear">

							<form class="contact-form columns_padding_5" method="post" action="#">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="name">Full Name
											<span class="required">*</span>
										</label>
										<i class="fa fa-user highlight" aria-hidden="true"></i>
										<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="phone">Phone Number
											<span class="required">*</span>
										</label>
										<i class="fa fa-phone highlight" aria-hidden="true"></i>
										<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="email">Email address
											<span class="required">*</span>
										</label>
										<i class="fa fa-envelope highlight" aria-hidden="true"></i>
										<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="subject">Subject
											<span class="required">*</span>
										</label>
										<i class="fa fa-flag highlight" aria-hidden="true"></i>
										<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
									</div>
								</div>
								<div class="col-sm-12">

									<div class="contact-form-message form-group">
										<label for="message">Message</label>
										<i class="fa fa-comment highlight" aria-hidden="true"></i>
										<textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
									</div>
								</div>

								<div class="col-sm-12 bottommargin_0">

									<div class="contact-form-submit topmargin_10 bottommargin_20">
										<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1 wide_button margin_0">Send message</button>
									</div>
								</div>


							</form>
						</div>

						<div class="col-md-4 to_animate" data-animation="scaleAppear">

							<ul class="list1 no-bullets no-top-border no-bottom-border">

								<li>
									<div class="media">
										<div class="media-left">
											<i class="rt-icon2-shop highlight fontsize_18"></i>
										</div>
										<div class="media-body">
											<h5 class="media-heading greylinks">Postal Address:</h5>
											<a href="https://goo.gl/maps/6k8HQmno9Bo2bVEy9" target="_blank">Caterpuri Road, Maruti Parking Gurgaon, 122015</a>	
										</div>
									</div>
								</li>
								<li>
									<div class="media">
										<div class="media-left">
											<i class="rt-icon2-phone5 highlight fontsize_18"></i>
										</div>
										<div class="media-body">
											<h5 class="media-heading greylinks">Phone:</h5>
											<a href="tel:1800-12-11171">1800-12-11171</a>
										</div>
									</div>
								</li>
								<li>
									<div class="media">
										<div class="media-left">
											<i class="rt-icon2-mail highlight fontsize_18"></i>
										</div>
										<div class="media-body greylinks">
											<h5 class="media-heading grey">Email:</h5>
											<a href="mailto:info@moveclues.com"><span class="" data-cfemail="">info@moveclues.com</span></a>
										</div>
									</div>
								</li>
							</ul>

						</div>

					</div>
				</div>
			</section>
			<?php include './content/branch.php';?>
<?php include 'footer.php';?>