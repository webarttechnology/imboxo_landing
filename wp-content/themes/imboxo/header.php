<!DOCTYPE html>
<html lang="ru">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="format-detection" content="telephone=no">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="#" type="">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      @keyframes animate-circle {
        from {
          transform: scale(0);
          opacity: 1;
        }
        to {
          transform: scale(1);
          opacity: 0;
        }
      }
      #preloader{
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999;
        background: #1C1C1C;
        background: linear-gradient(to right, rgba(36, 31, 31, 1) 0%, rgba(36, 31, 31, 1) 32%, rgba(74, 71, 70, 1) 100%);
      }
      .loader {
        position: fixed;
        top: 50%;
        left: 50%;
        height: 10rem;
        width: 10rem;
        transform: translateX(-50%) translateY(-50%);
      }
      .loader > .circle {
        position: absolute;
        height: inherit;
        width: inherit;
        background: #B66449;
        border-radius: 0;
        animation: animate-circle 2s cubic-bezier(.9, .24, .62, .79) infinite;
      }
      .loader > .circle:nth-of-type(1) {
        animation-delay: 0s;
      }
      .loader > .circle:nth-of-type(2) {
        animation-delay: calc(2s / -3);
      }
      .loader > .circle:nth-of-type(3) {
        animation-delay: calc(2s / -6);
      }
    </style>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	 
	  
	  <div class="container">
				<!--   Modal    -->
		  
	  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="addContact" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <?php //echo do_shortcode('[wp_stripe_donation]');
								
								echo do_shortcode('[contact-form-7 id="72e3e4a" title="Donate form with contact form 7"]');
								?>

                            </div>
                        </div>
<!--                         <div class="modal-footer">
                            <a class="btn btn-info" data-dismiss="modal">Close</a>
                        </div> -->
                    </div>
                </div>
            </div>
<!-- Modsl End -->
				
			</div>
	  
	  
    <chat-widget
location-id="XwHV8F11vBx7sKxPpOd3"
agency-name="IMBOXO"
agency-website="https://internetmovieboxoffice.com/"
locale="en-us" >
</chat-widget>
<script src="https://widgets.leadconnectorhq.com/loader.js" data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js" ></script>
	  
    <div id="particles-js"></div>
<!--     <div id="preloader">
      <div class="loader">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>
    </div> -->
    <main class="main main--home" style="opacity:0">
      <canvas class="noise" id="noise"></canvas>
      
      <div class="header">
        <div class="header__left">
          <div class="header__letter">I</div>
          <div class="header__socials"><a href="<?php echo get_site_url(); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg" alt=""></a></div>
        </div>
        <div class="header__right">
          <ul class="header__menu">
            <li class="active"><a class="js-scroll-link" href="javascript:;" data-link="0">HOME</a></li>
            <li><a class="js-scroll-link" href="javascript:;" data-link="1">About</a></li>
            <li><a class="js-scroll-link" href="javascript:;" data-link="2">Creators</a></li>
            <li><a class="js-scroll-link" href="javascript:;" data-link="3">EXPLORE</a></li>
            <li><a class="js-scroll-link" href="javascript:;" data-link="4">Donate</a></li>
            <li><a class="js-scroll-link" href="javascript:;" data-link="5">Faqs</a></li>
            <li><a id="contct" class="js-scroll-link" href="#contct" data-link="6">CONTACT</a></li>
          </ul>
          <div class="header__phone"><a href="tel:+17472651994">+1 (747) 265-1994</a></div>
        </div>
      </div>