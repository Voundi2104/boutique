<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>	
<html lang="fr">
<head>
<title>Sublime</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'../../../assets/boutiqueClient/styles/bootstrap4/bootstrap.min.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'../../../assets/boutiqueClient/plugins/font-awesome-4.7.0/css/font-awesome.min.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'../../../assets/boutiqueClient/plugins/OwlCarousel2-2.2.1/owl.carousel.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'../../../assets/boutiqueClient/plugins/OwlCarousel2-2.2.1/owl.theme.default.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'../../../assets/boutiqueClient/plugins/OwlCarousel2-2.2.1/animate.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'../../../assets/boutiqueClient/styles/main_styles.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'../../../assets/boutiqueClient/styles/responsive.css';?>">
</head>
<body>
<div class="super_container">
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(<?php echo base_url().'../../../assets/boutiqueClient/images/home_slider_1.jpg)';?>"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new Online Shop experience.</div>
										<div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(<?php echo base_url().'../../../assets/boutiqueClient/images/home_slider_1.jpg)';?>"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new Online Shop experience.</div>
										<div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(<?php echo base_url().'../../../assets/boutiqueClient/images/home_slider_1.jpg)';?>"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">A new Online Shop experience.</div>
										<div class="home_slider_subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</div>
										<div class="button button_light home_button"><a href="#">Shop Now</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->
			
			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.</li>
									<li class="home_slider_custom_dot">02.</li>
									<li class="home_slider_custom_dot">03.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>

		</div>
	</div>

	<!-- Ads -->

	<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small">
				<div class="avds_background" style="background-image:url(<?php echo base_url().'../../../assets/boutiqueClient/images/avds_small.jpg)';?>"></div>
				<div class="avds_small_inner">
					<div class="avds_discount_container">
						<img src="<?php echo base_url().'../../../assets/boutiqueClient/images/discount.png';?>" alt="">
						<div>
							<div class="avds_discount">
								<div>20<span>%</span></div>
								<div>Discount</div>
							</div>
						</div>
					</div>
					<div class="avds_small_content">
						<div class="avds_title">Smart Phones</div>
						<div class="avds_link"><a href="<?php echo site_url().'categories.php';?>">See More</a></div>
					</div>
				</div>
			</div>
			<div class="avds_large">
				<div class="avds_background" style="background-image:url(<?php echo base_url().'../../../assets/boutiqueClient/images/avds_large.jpg)';?>"></div>
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">Professional Cameras</div>
						<div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
						<div class="avds_link avds_link_large"><a href="categories.html">See More</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

						<!-- Product -->
						<div class="product">
							<div class="product_image">
							<?php
							$nom = $this->Mindex->SELECT();
							foreach($nom as $i):
							?>
							<img src='<?= base_url().'../../../assets/boutiqueClient/images/'.$i->imageProdui.'';?>' alt='image'>
							<?php
							endforeach;
							?>
								</div>
							<div class="product_extra product_new">New</div>
							<div class="product_content">
								<div class="product_title"><?= anchor('product','Smart Phone','title="product"');?></div>
								<div class="product_price">$670</div>
							</div>
						</div>

						
					</div>
						
				</div>
			</div>
		</div>
	</div>

	<!-- Ad -->

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_border"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">Subscribe to our newsletter</div>
						<div class="newsletter_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros</p></div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required">
								<button class="newsletter_button trans_200"><span>Subscribe</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
<!---addjava file-->
</body>
</html>