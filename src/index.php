<?
 $fields = array("first_name","last_name","phone","email","postcode");
 
 foreach($fields as $field) {
 	if($_GET["$field"]=='') $err[] = $field;
 }
 
 if($err) {
 	// send back 
 	$url = "https://finestdental.co.uk/consultation.php?redo=y";
	foreach($_GET as $key=>$value)
		$url .= "&$key=".urlencode($value);
 	header("Location: ".$url);
	exit();
 }
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<base href="https://finestdental.co.uk/"></base>
	<title>Submission Received - Finest Dental</title>
	<link rel="shortcut icon" href="https://finestdental.co.uk/favicon.ico" />
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58568623-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-58568623-1');
</script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->	

	
	

    <!-- Start Visual Website Optimizer Asynchronous Code -->

		
		<!-- End Visual Website Optimizer Asynchronous Code -->



	<link rel="shortcut icon" href="https://finestdental.co.uk/favicon.ico" />

	<meta name="description" content="Thank you for requesting a free consultation with Finest Dental!"/>
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Thank You" />
	<meta property="og:description" content="Thank you for requesting a free consultation with Finest Dental!" />
	<meta property="og:url" content="https://finestdental.co.uk/newsite/ppc/confirmation" />
	<meta property="og:site_name" content="Finest Dental" />
	<meta property="og:image" content="https://finestdental.co.uk/images/khadija_invis_mobile.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="1200" />
	<meta name="twitter:card" content="Thank You" />
	<meta name="twitter:description" content="Thank you for requesting a free consultation with Finest Dental!" />
	<meta name="twitter:title" content="Submission Received" />
	<meta name="twitter:image" content="https://finestdental.co.uk/images/khadija_invis_mobile.jpg" />

	<link rel='stylesheet' href='/css/styles.css?r=vfqe' type='text/css' media='all' />
	<meta name="theme-color" content="#1d8fd5" />
	</head>
	<body class="text testimonials">
		
		
	  <nav class="navbar">
      <div class="no_container">
      	<div class="row">
      		<div class="col-md-12">
		        <div class="navbar-header"> 
		          <a href="" id="logoLink" title="Homepage"><img src="/images/logo_white.png" alt="Finest Dental logo" /></a>
		          
		          <ul><li><a href="/treatments.html" title="Treatments" >Treatments</a></li>
<li><a href="/about.html" title="About Us" >About</a></li>
<li><a href="/prices.html" title="Our Prices" >Prices</a></li>
<li class="active"><a href="/testimonials.html" title="Testimonials" >Testimonials</a></li>
<li><a href="/locations.html" title="Locations" >Locations</a></li>
<li class="last"><a href="/contact.html" title="Contact" class="openCTA">Contact</a></li>
</ul>
		          
		          
		     	  
		        </div>
		    </div>
		    
        </div>
      </div>
    </nav>				
		
		
		<div id="underlay">
			
			<!-- Main jumbotron for a primary marketing message or call to action -->
	   
	    
			<div id="desktopBgShallow">
				
				
			</div>
			<a name="top" id="top"></a>
			
	   
	
	   
	    	<div class="container">
		    
		      
		      	<div class="section main clearfix">
		      	
		        	<div class="row">
		        		
		        		<div class="col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8" style="text-align:center;padding-bottom:30px;">
						
								<h1 style="margin-left:0;text-align:center;border-bottom:1px solid #cccccc;padding-bottom:10px;margin-bottom:20px;"><span>Thank</span> You</h1>
								
								<?php if ($_GET['rdt']=='') { ?>
									 
									<p>A member of the booking team will be calling you  very shortly to complete your booking.</p> 
									<p>If you can't wait, just call us now on <a href="tel:03330162093" class="rTapNumber236260">0333 016 2093</a>.</p>
								<?php } else { ?>
									<script language="javascript">
										window.open('<?php print $_GET['rdt']; ?>','_blank');
									</script>
									<p>Your file should open or download automatically. If it doesn't, <a style="font-weight:bold" href="<?php print $_GET['rdt']; ?>" target="_blank">follow this link</a>.</p>
								<?php } ?>
						</div>
		        	</div>
				</div>
			</div>


			<footer>
	      	<div class="container section">
	      		<div class="row">
	      			<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
	      				<ul><li><a href="https://finestdental.co.uk/" title="Homepage" >Homepage</a></li>
<li><a href="/treatments.html" title="Treatments" >Treatments</a></li>
<li><a href="/about.html" title="About Us" >About</a></li>
<li><a href="/prices.html" title="Our Prices" >Prices</a></li>
<li class="active"><a href="/testimonials.html" title="Testimonials" >Testimonials</a></li>
<li><a href="/locations.html" title="Locations" >Locations</a></li>
<li class="last"><a href="/contact.html" title="Contact" class="openCTA">Contact</a></li>
</ul>
	      				
	      			</div>
	      			<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
	      				<ul><li><a href="/locations/cannon-street.html" title="London Cannon Street" >London Cannon Street</a></li>
<li><a href="/locations/london-liverpool-street.html" title="London Liverpool Street" >London Liverpool Street</a></li>
<li><a href="/locations/winchester.html" title="Winchester" >Winchester</a></li>
<li><a href="/locations/wokingham.html" title="Wokingham" >Wokingham</a></li>
<li><a href="/locations/milton-keynes.html" title="Milton Keynes" >Milton Keynes</a></li>
<li><a href="/locations/leicester.html" title="Leicester" >Leicester</a></li>
<li class="last"><a href="/locations/brentwood.html" title="Brentwood" >Brentwood</a></li>
</ul>
	      			</div>
	      			<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
	      				<div class="socialMedia">
							
							<a href="https://www.facebook.com/FinestDental/" target="_blank">
						        <img src="https://finestdental.co.uk/images/icon_fb_w.png" alt="Facebook" />
						        <span class="sr-only">Facebook</span>
						    </a>
					    					    
					    	<a href="https://twitter.com/Original_FD" target="_blank">
								<img src="https://finestdental.co.uk/images/icon_tw_w.png" alt="Twitter" />
								<span class="sr-only">Twitter</span>
							</a>
									
							<a href="https://www.youtube.com/channel/UCfSjgiy63qzMwM0QiNKO7ag" target="_blank">
								<img src="https://finestdental.co.uk/images/icon_yt_w.png" alt="Youtube" />
								<span class="sr-only">Youtube</span>
							</a>
							
							<a href="https://www.instagram.com/finest_dental" target="_blank">
								<img src="https://finestdental.co.uk/images/icon_in_w.png" alt="Instagram" />
								<span class="sr-only">Instagram</span>
							</a>
												
						</div>
	      			</div>
	      			<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
	      				<ul>
	      					<li><a href="tel:03330162093">0333 016 2093</a></li>
	      					<li><a href="mailto:info@finestdental.co.uk">info@finestdental.co.uk</a></li>
	      				</ul>
	      				<p>&copy; 2017 Finest Dental.</p>
	      			</div>
	      		</div>
	      		
	        	
	        </div>
	      </footer>
		
<? 

$now = time();
$postTime = intval($_GET['timestamp']);
if ($postTime>0 && $now < $postTime + 3) { ?>

<script type="text/javascript">
	// defer FB pixel
	var dfbp = setTimeout(function(){
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1477526785873521'); // Insert your pixel ID here.
		fbq('track', 'PageView');
	},3000);
	


	
	
	// delayed load of Admedo tracker
	var dlat = setTimeout(function() {
		var bodyID = document.getElementsByTagName("body")[0];         
		var newScript = document.createElement('script');
		newScript.type = 'text/javascript';
		newScript.src = '//pool.admedo.com/pixel?id=101520&t=js';
		bodyID.appendChild(newScript);
	}, 2000);
</script>









<!-- Conversion - DO NOT MODIFY --><script type="text/javascript" src="//pool.admedo.com/pixel?id=101519&t=js&productid=<?php echo urlencode($_GET['product']); ?>&customerid=<?php echo urlencode($_GET['full-name']); ?>"></script><!-- End of Conversion -->

<script type="text/javascript">
    window._tfa = window._tfa || [];
    _tfa.push({ notify: 'action',name: 'Lead' });
</script>
<script src="//cdn.taboola.com/libtrc/taboolaaccount-jdnethotmailcouk/tfa.js"></script>

<script>

	// delayed load of Yahoo tracker
	var dy = setTimeout(function(){
		(function(w,d,t,r,u){w[u]=w[u]||[];w[u].push({'projectId':'10000','properties':{'pixelId':'10035219'}});var s=d.createElement(t);s.src=r;s.async=true;s.onload=s.onreadystatechange=function(){var y,rs=this.readyState,c=w[u];if(rs&&rs!="complete"&&rs!="loaded"){return}try{y=YAHOO.ywa.I13N.fireBeacon;w[u]=[];w[u].push=function(p){y([p])};y(c)}catch(e){}};var scr=d.getElementsByTagName(t)[0],par=scr.parentNode;par.insertBefore(s,scr)})(window,document,"script","https://s.yimg.com/wi/ytc.js","dotq");
	},3300);	
	
	
</script>


<? } ?>
<script type="text/javascript">
    adroll_adv_id = "A3S22IZGENGDLL3L7YI4NK";
    adroll_pix_id = "JBZRIZVLERC3DK3JQH3W6I";
    /* OPTIONAL: provide email to improve user identification */
    /* adroll_email = "username@example.com"; */
    (function () {
        var _onload = function(){
            if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
            if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {window.addEventListener('load', _onload, false);}
        else {window.attachEvent('onload', _onload)}
    }());
</script>
<!-- Conversion Pixel - Main Conversion Point - DO NOT MODIFY -->
<img src="https://secure.adnxs.com/px?id=991529&t=2" width="1" height="1" />
<!-- End of Conversion Pixel -->
</body>
</html>	
