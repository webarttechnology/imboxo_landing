 <?php /* Template Name: Contact */ 
 get_header(); 

$pageid = get_id_by_slug('site-general-settings');
 ?>
      <div class="scroll">
        <div class="home-page">
          <div class="page-title show">
            <ul>
             
              <li>
                <div class="title">contact</div>
                <div class="number">7.0</div>
              </li>
            </ul>
            <canvas class="noise noise--inner" id="noise_menu"></canvas>
          </div>
        
          
            <section class="experience" id="exp">
<!--               <div class="sticky-title">
                <ul>
                  <li>
                    <div class="yellowheading">Contact</div>
                    <div class="yellowheading">7.0</div>
                  </li>
                </ul>
              </div> -->
              <div class="content">
                <div class="content__left">
                  <div class="content__title">
                    <div class="h2" style="color:var(--primary-color);">Keep in touch with Us</div>
                  </div>
                  <!-- <ul class="content__menu contacts__menu">
                    <li class="active"><a class="noicon" href="javascript:;" onclick="window.open('mailto:mail@info.com')"><i class="fa-solid fa-envelope"></i> mail: mail@info.com</a></li>
                    <li class="active"><a class="noicon" href="javascript:;" onclick="window.open('skype:inboxo')"><i class="fa-brands fa-skype"></i> skype: inboxo</a></li>
                    <li class="active"><a href="#" target="_blank"><i class="fa-solid fa-link"></i> www.site.com</a></li>
                    <li class="active"><a class="noicon" href="#" target="_blank"><i class="fa-brands fa-telegram"></i> telegram: inboxo_inc</a></li>
                  </ul> -->
                    <ul class="social_ions">
                    <li><a href="<?php echo get_field('facebook',$pageid); ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="<?php echo get_field('twitter',$pageid); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="<?php echo get_field('instagram',$pageid); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                   <!-- <li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a></li> -->
                  </ul>
                  <div class="contacts__copyright small">© inboxo 2023.  All Rights Resevered</div>
                </div>
                <div class="content__right">
                  <div class="content__subtitle">Hello Creators and Watchers!<br>
                    Sign up to Keep up and support IMBOXO and It's brand new tools to keep Watchers and Creators Connected like never before!  
					</div>
					<div class="content__contacts" style="margin-top:50px;">
						<div class="content__brief">
							<div class="h2" style="color:var(--primary-color);">Connect to us today</div>
						</div>
						<div class="content__form">
							<?php echo do_shortcode('[contact-form-7 id="236eb15" title="beside first donation button form"]'); ?>
							<a href="#myModal" class="donate_button" >Donate</a>
						</div>
					</div>
                   

                      
                </div>
              </div>
            </section>
            
        </div>
      </div>
    </main>
    <?php get_footer(); ?>