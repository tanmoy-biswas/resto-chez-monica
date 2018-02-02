<!--footer area ------------------------->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="img/footer-logo.png">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
				<p><i class="fa fa-envelope-o"></i>   provideemail@email.com</p>
				<p><i class="fa  fa-phone"></i>       +61 7 5439 7300</p>
				<p><i class="fa fa-map-marker"></i>   3/54 Landsborough Parade 4551 Golden Beach</p>
			</div>
			<div class="col-md-2"></div>
			
			<div class="col-md-6">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.56042324768!2d153.11749621504308!3d-26.822121883166663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b93997a930a17b7%3A0xf6a1b848e979f812!2s3%2F54+Landsborough+Parade%2C+Golden+Beach+QLD+4551%2C+Australia!5e0!3m2!1sen!2sin!4v1513778068873" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					
				</div>
				
			</div>
		</div>
		<div class="row newsletter">
			<div class="col-md-3 col-sm-3">
				<form>
				  <div class="form-group">
					<input class="form-control" id="inputdefault" type="text" placeholder="enter your email">
				  </div>
				</form>
			</div>
			<div class="col-md-3 col-sm-3">
				<button type="button" class="btn">Get Notification</button>
			</div>
		</div>
		<div class="row ftr-bottom">
			<div class="col-md-6">
				<span>copyright@chez monica</span>
			</div>
			<div class="col-md-6 text-right">
				<ul>
					<li>Follow Us</li>
					<li><i class="fa fa-facebook"></i></li>
					<li><i class="fa fa-twitter"></i></li>
					<li><i class="fa fa-instagram"></i></li>
				</ul>
			</div>
		</div>
	
		
	</div>
</footer>


<!--end of footer area ------------------>
<!--back to top-->
<a href="#top" id="page-top" class="page-top">
	<i class="fa fa-angle-up"></i>
</a> 



</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>

<script>
	
// JavaScript Document
(function($){
"use strict";
	/*----------sticky header script----------*/
	  $(window).on('scroll',function() {    
	   var scroll =  $(window).scrollTop();
	   if (scroll < 20) {
		$("#sticky-menu").removeClass("sticky");
	   }else{
		$("#sticky-menu").addClass("sticky");
	   }
	  });
	
	/*----------sticky header script----------*/
	
	

	
	
	
	/*----------slider  script----------*/
	$('.slider-active').owlCarousel({
    loop:true,
	
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	autoplay:true,
    nav:true,
	responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

}) (jQuery);

/* --wow js activate------------- */
	
 new WOW().init();
	
/*page top script------------------*/
	
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 500) {
        //clearHeader, not clearheader - caps H
        $("#page-top").addClass("page-top-visible");
        //alert('aaa');
    }else{
        //clearHeader, not clearheader - caps H
        $("#page-top").removeClass("page-top-visible");
        //alert('aaa');
    }
}); //missing );
	
	
	
/*----------Smooth scroll  script----------*/



  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

              

</script>


</html>