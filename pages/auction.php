<?php 
require('header.php');
?>
<link href="../assets/css/auction.css?i=<?php echo rand(10,100);?>" rel="stylesheet" />
<title>Auction</title>
<style type="text/css">
	.tooltip-custom {
	    .tooltip-inner {
	        background-color: red !important;    
	    }
	}
</style>


<header class="masthead" style="background-image: linear-gradient(to bottom, rgb(10 27 80 / 30%) 0%, rgb(52 58 66 / 60%) 100%), url(../assets/img/home8.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mt-5 mb-5">
                <p class="text-white" style="font-size:50px;">Auction memorabilia</p>
                <div class="divider mb-4" style="margin:auto"></div>
                <p class="text-white" style="font-size:20px;">All proceeds go to the Jimmy Greaves Foundation, which lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            </div>
            <div class="col-lg-8 align-self-baseline mt-5 mb-5" id="section07">
                <a id="arrow_bottom" href="#auction_section_2"><span></span><span></span><span></span></a>
            </div>
        </div>
    </div>
</header>

<div class="container">
	<div class="row" id="auction_section_2">
	   
	</div>
	
</div>
<?php
require('footer.php');
?>

<script type="text/javascript">
	show();
	var auctions = [];
	function show(){
		$.ajax({
	      url:"<?php echo $site_url?>api/ajax.php",
	      data: { 
	      		request:'get_auctions',
	         },
	      type: 'post',
	      success: function(re) 
	      {
	        var result = JSON.parse(re);
	        console.log(result)
	        if(result['status']=="200"){
				var data = result['data'];
				auctions = data;
				var string = "";
				for(var i=0; i<data.length; i++){
					var images = JSON.parse(data[i]['image']);
					var first_image = images.length==0 ? "" : "<?php echo $site_url?>api/upload/auction/"+data[i]['id']+"/"+images[0]+"";	

					var end_date = new Date(data[i]['end_time']);
		            var now   = new Date();
		            var diff  = new Date(end_date - now);
		            var days  = parseInt(diff/1000/60/60/24);
		            var hours  = parseInt(diff/1000/60/60 - (days*24));
		            var months = ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"];
		              var month = months[end_date.getMonth()];
		              // var year = end_date.getFullYear();
		              var day = end_date.getDate();
		              var to  = day+" "+month;

                    var end_hour = end_date.getHours();
                    var end_min  = end_date.getMinutes();
                    var pm_am = end_hour>=12 ? 'PM' : 'AM';
                    var expir_date = days>0 ? days+"d"+" "+hours+"h left ( "+to+" "+end_hour+":"+end_min+" "+pm_am+ ")" : "Expired ( "+to+" "+end_hour+":"+end_min+" "+pm_am+ ")";

					 string+=`<div class="col-md-6" style="margin-top:30px;">
				    	<a href="auction_detail.php?id=`+data[i]['id']+`&n=`+data[i]['auction_name']+`"><img style="width:100%; max-height:450px; min-height:300px; max-width:450px; min-width:300px;" src="`+first_image+`" /></a>
				    	<a href="auction_detail.php?id=`+data[i]['id']+`&n=`+data[i]['auction_name']+`"><p id="header">`+data[i]['auction_name']+`</p></a>
				    	<p id="price">£`+data[i]['init_price']+`</p>
				    	<p id="desc">`+data[i]['description']+`</p>
				    	<div id="status" style="display:flex">
				    		<span>`+data[i]['bid_count']+` bids</span>
				    		<span id="timer"><ion-icon name="alarm-outline"></ion-icon>`+expir_date+`</span>
				    	</div> 
				    </div>`;
				}
				$("#auction_section_2").html(string);
	        }
	        else{
	        }
	      }
	    }); 
	}
</script>
<script src="../assets/js/home.js?i=<?php echo rand(10,100);?>"></script>
