<?php 
require('header.php');
?>
<link href="../assets/css/auction.css?i=<?php echo rand(10,100);?>" rel="stylesheet" />
<title>Raffle</title>


<header class="masthead" style="background-image: linear-gradient(to bottom, rgb(10 27 80 / 30%) 0%, rgb(52 58 66 / 60%) 100%), url(../assets/img/home2.png);
">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mt-5 mb-5">
                <p class="text-white" style="font-size:50px;">Contact us</p>
                <div class="divider mb-4" style="margin:auto"></div>
            </div>
            <div class="col-lg-8 align-self-baseline mt-5 mb-5" id="section07">
                <a id="arrow_bottom" href="#contact_section_2"><span></span><span></span><span></span></a>
            </div>
        </div>
    </div>
</header>
<div class="container row" id="contact_section_2" style="padding-top:50px;padding-bottom:50px">
	<div class="col-md-6">
		<!-- <p style="font-size: 40px; font-weight: 500">Get in touch</p>
		<div class="divider mb-4"></div>
		<p style="font-size: 14px; line-height: 22px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p> -->
		<img src="../assets/img/home9.jpg" style="width: 100%">
	</div>
	<div class="col-md-6">
		<div style="background-color: #1F2226; width: 100%; height: 100%; padding:20px">
			<p style="color:#2D95C2; font-size: 28px; font-weight: 500">General enquiries</p>
			<div style="display: flex; align-items: center;">
				<ion-icon name="mail-outline" style="color: #62B5F1;"></ion-icon>
				<span style="color: white; margin-left: 10px; font-size: 16px">emailaddress@emailaddress.com</span>
			</div>
			<div style="display: flex; align-items: center;">
				<ion-icon name="phone-portrait-outline" style="color: #62B5F1;"></ion-icon>
				<span style="color: white; margin-left: 10px; font-size: 16px">01234 567890</span>
			</div>

			<p style="color:#2D95C2; font-size: 28px; font-weight: 500; margin-top:10px">Media & press</p>
			<div style="display: flex; align-items: center;">
				<ion-icon name="mail-outline" style="color: #62B5F1;"></ion-icon>
				<span style="color: white; margin-left: 10px; font-size: 16px">emailaddress@emailaddress.com</span>
			</div>
			<div style="display: flex; align-items: center;">
				<ion-icon name="phone-portrait-outline" style="color: #62B5F1;"></ion-icon>
				<span style="color: white; margin-left: 10px; font-size: 16px">01234 567890</span>
			</div>

		</div>

	</div>

</div>

<?php
require('footer.php');
?>
<script src="../assets/js/home.js?i=<?php echo rand(10,100);?>"></script>


