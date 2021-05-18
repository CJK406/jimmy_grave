<?php 
require('header.php');

?>
<link href="../assets/css/about.css?i=<?php echo rand(10,100);?>" rel="stylesheet" />
<link href="../assets/css/home.css?i=<?php echo rand(10,100);?>" rel="stylesheet" />
<title>About</title>
<header class="masthead" style="background-image: linear-gradient(to bottom, rgb(10 27 80 / 30%) 0%, rgb(52 58 66 / 60%) 100%), url(../assets/img/home8.jpg)">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mt-5 mb-5">
                <p class="text-white" style="font-size:50px;">About the Jimmy Greaves Foundation</p>
                <div class="divider mb-4" style="margin:auto"></div>
            </div>
            <div class="col-lg-8 align-self-baseline mt-5 mb-5" id="section07">
                <a id="arrow_bottom" href="#about_section_2"><span></span><span></span><span></span></a>
            </div>
        </div>
    </div>
</header>
<div class="container">
	<div class="row" id="about_section_2">
	    <div class="col-md-6">
	        <img src="../assets/img/about1.png" />
	    </div>
	    <div class="col-md-6" style="text-align:left">
	        <p id="text_header">The story behind the <br> Jimmy Greaves Foundation</p>
	        <div class="divider mb-4" ></div>
	        <p id="text_body">
	           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	        </p>
	    </div>
	</div>
</div>

<div class="container" id="about_section_3">
	<p id="text_header">Supporting causes lorem ipsum dolor sit amet</p>
	<div class="divider" style="margin-bottom:70px" ></div>
	
	<div class="row">
	    <div class="col-sm-6 order-sm-1" id="first_sub_div">
	    	<!-- <img src="../assets/img/home6.png" /> -->
	    	<p id="text_sub_header">Alcoholics Anonymous</p>
	    	<p id="text_sub_desc">Our Foundation is proud and privileged to support the aims and commitment of Alcoholics Anonymous. It is no secret that my Dad, Jimmy, had huge problems with his addiction to drinking when he hung up his football boots after breaking all the goal-scoring records. Thanks to the encouragement and discipline that he received as an AA member, he was able to beat the bottle and turn his life around and start a new career as a television personality. Jimmy was a lost soul until Alcholics Anonymous showed him there was a better way to lead his life, and our Foundation – with the Greavsie wit and warmth at its heart – is happy to promote a cause that is both noble and inspiring. Please go here for more details:  https://www.alcoholics-anonymous.org.uk</p>

	    </div>
	    <div class="col-sm-6 order-sm-12" id="second_sub_div">
	    	<img src="../assets/img/about4.png">
	    </div>
    </div>
    <div class="row">
	    <div class="col-sm-6 order-sm-12" id="first_sub_div">
	    	<p id="text_sub_header">Stroke Association </p>
	    	<p id="text_sub_desc">The Foundation’s link with The Stroke Association follows on naturally after the awful way Dad has been affected by his severe stroke of 2015. We are determined to bring into the spotlight the far-reaching work of the Stroke Association in dealing with one of the biggest killers of them all. More than 100,000 people have strokes every year and a person is stricken by a stroke every five minutes of the day. Jimmy’s quality of life has been wrecked by his stroke, and his Football Foundation wants to keep alive the impact he had on the game as one of the greatest of all players.  Our objective is to work in Jimmy’s name with the Stroke Association to bring to public awareness the seriousness of a stroke and what can be done to, hopefully, avoid it.  Please go here for more details: https://www.stroke.org.uk</p>
	    </div>
	    <div class="col-sm-6 order-sm-11" id="second_sub_div">
	    	<img src="../assets/img/about6.png">
	    </div>
    </div>

    <div class="row">
        <div class="col-sm-6 order-sm-1" id="first_sub_div">
            <p id="text_sub_header">Dogs Trust</p>
            <p id="text_sub_desc">All his life, Dad has believed in the saying, ‘A man’s best friend is his dog.’ He reckons he has walked more miles with his dogs over the years than he covered on his runs on the football pitch! His love of dogs became legendary during the 1962 World Cup finals when he famously went down on his knees to lovingly collect a stray dog that had invaded the pitch during England’s World Cup quarter-final against Brazil. His reward was that the dog relieved itself down his England shirt as he passed it over to a groundsman. After the match, the great Brazilian winger Garrincha adopted the dog and called it, “Greavsie”. We recognise Jimmy’s love of dogs by supporting The Local Dog Trust, a wonderful organisation that cares for dogs everywhere. Please go here for more details: www.dogstrust.org.uk/</p>

        </div>
        <div class="col-sm-6 order-sm-12" id="second_sub_div">
            <img src="../assets/img/about3.png">
        </div>
    </div>



    <div class="row">
	    <div class="col-sm-6 order-sm-12" id="first_sub_div">
	    	<p id="text_sub_header">Jimmy Greaves Football Academy</p>
	    	<p id="text_sub_desc">Dad is honoured to have his Football Academy linked to the encouragement and stimulation of the Beautiful Game, being literally put at the feet of boys and girls from all walks of life. He is from the coats-for-goalposts generation and wants children to benefit from the best possible facilities at the least possible cost. Our Foundation firmly believes that the game should not be elitist but available for any child who wishes to find his or her own level of performance without pressure or financial demands. Any monetary support will be gratefully received by the Academy to drive down the costs of children enjoying the game: https://www.jimmygreavesacademy.co.uk</p>

	    </div>
	    <div class="col-sm-6 order-sm-11" id="second_sub_div">
	    	<img src="../assets/img/about5.png">
	    </div>
    </div>
  </div>
</div>



<div style="overflow-x:auto">
    <div id="home_section_3">
        <div style="background-color: rgba(0,0,0,0.2); width: 100%; display: flex">

        <a href="<?php echo $site_url?>pages/auction.php" style="width: 33.333333%">
            <div class="three_hover_div" id="1">
                <p id="header">Auction</p>
                <div class="bottom_boder"></div>
                <p id="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div id="arraw">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div>
            </div>
        </a>
        <a href="<?php echo $site_url?>pages/raffle.php" style="width: 33.333333%">
            <div class=" three_hover_div" id="2">
                <p id="header">Raffle</p>
                <div class="bottom_boder"></div>
                <p id="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div id="arraw">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div>
            </div>
        </a>
        <a href="<?php echo $site_url?>pages/donate.php" target="_blank" style="width: 33.333333%">
            <div class=" three_hover_div" id="3">
                <p id="header">Donate</p>
                <div class="bottom_boder"></div>
                <p id="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div id="arraw">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div>
            </div>
        </a>
    </div>
    </div>
</div>
<?php
require('footer.php');
?>
<script src="../assets/js/home.js?i=<?php echo rand(10,100);?>"></script>

<script src="../assets/js/three_hover.js?i=<?php echo rand(10,100);?>"></script>


