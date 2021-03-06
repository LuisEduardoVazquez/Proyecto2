<!DOCTYPE html>
<html>
<head>
<title>Proyecto</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<!-- //js -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="{{asset('css/jstarbox.css')}}" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
    <a href="offer.html"><img src="{{asset('images/download.png')}}" class="img-head" alt=""></a>
    <div class="header">

            <div class="container">
                
                <div class="logo">
                    <h1 ><a href="/inicio"><b>T<br>H<br>E</b>BL Store<span>The Best Supermarket</span></a></h1>
                </div>
                <div class="head-t">
                    <ul class="card">
                        
                      <form method="POST" class="fa fa-sign-out" aria-hidden="true" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                      </form>
                        
                    </ul>		
                </div>
                
                <div class="header-ri">
                    <ul class="social-top">
                        <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                        <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
                        
                    </ul>	
                </div>
            

                    <div class="nav-top">
                        <nav class="navbar navbar-default">
                        
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            

                        </div> 
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav ">
                                <li ><a href="/inicio" class="hyper "><span>Inicio</span></a></li>	                        
                                <li><a href="/contacto" class="hyper"><span>Contacto</span></a></li>
                                <li><a href="../productos" class="hyper"><span>Productos</span></a></li>
                                <li><a href="../productos/create" class="hyper"><span>Agregar Producto</span></a></li>
                                
                                <!--<li><a href="edit" class="hyper"><span>Editar Producto</span></a></li>-->
                            </ul>
                        </div>
                        </nav>
                        <div class="cart" >
                        
                            <span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                        
                    </div>			
    </div>
    <!---->
        {{$slot}}
    <!--footer-->
    <div class="footer">
        <div class="container">
            <div class="clearfix"></div>
                <div class="footer-bottom">
                    <h2 ><a href="index.html"><b>T<br>H<br>E</b>BL Store<span>The Best Supermarket</span></a></h2>
                  
                    <ul class="social-fo">
                        <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        
                    </ul>
                    <div class=" address">
                        <div class="col-md-4 fo-grid1">
                                <p><i class="fa fa-home" aria-hidden="true"></i>Blvd. Gral. Marcelino Garc??a Barrag??n 1421, Ol??mpica, 44430 Guadalajara, Jal.</p>
                        </div>
                        <div class="col-md-4 fo-grid1">
                                <p><i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 , +1273 748 730</p>	
                        </div>
                        <div class="col-md-4 fo-grid1">
                            <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>proyecto@test.com</a></p>
                        </div>
                        <div class="clearfix"></div>
                        
                        </div>
                </div>
            <div class="copy-right">
                <p> &copy; 2022 BL store. Derechos Reservados| Design by Luis Eduardo Vazquez Rodriguez & Bryan Daniel Nu??ez Alvarado</a></p>
            </div>
        </div>
    </div>
    <!-- tabs -->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
			});
		});				
	</script>
<!-- //tabs -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>

</body>
</html>
<!-- //footer-->