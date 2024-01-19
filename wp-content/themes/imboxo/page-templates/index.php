  <?php /* Template Name: Home */ 
 get_header(); 

 $pageid = get_id_by_slug('site-general-settings'); 


 $allsections = CFS()->get( 'sections_repeat' );
 $secnamenumberstorage = array();

/* all the ACF field are fetched from Site all section group except those which are specified.
  also note that FAQ section and Explore section  comes from CFS 'Home page general group '
AND left side scroller comes from CFS, 'Home page top page number scroller group'
Pushan..
   */

 ?>

      <div class="scroll">
        <div class="home-page">
          <div class="page-title show">
            <ul>
               <?php  foreach ( $allsections  as $eachsection ) {
                $secnamenumberstorage[] = $eachsection['section_title'].'#'.$eachsection['section_number'];
                    
                ?>

              <li>
                <div class="title"><?php echo $eachsection['section_title']; ?></div>
                <div class="number"><?php echo $eachsection['section_number']; ?></div>
              </li>
          <?php } ?>
             
            </ul>
            <canvas class="noise noise--inner" id="noise_menu"></canvas>
          </div>
          <?php $homemarker = $secnamenumberstorage[0];
                $homemarkerarray = explode('#',$homemarker);

            ?>
          <div class="scrollable">
            <section class="home">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div><?php echo $homemarkerarray[0]; ?></div>
                    <div><?php echo $homemarkerarray[1]; ?></div>
                  </li>
                </ul>
              </div>
              <div class="content">
                  <?php $homefirsttitle = get_field('home_first_title');
                  $homefirsttitlearray = explode('#',$homefirsttitle);

                    ?>
                <div class="content__left">
                  <div class="content__title">
            <div class="h1"><?php echo $homefirsttitlearray[0]; ?>  <span style="color:var(--primary-color); font-weight: bold;"> 
                <?php echo $homefirsttitlearray[1]; ?></span></div>
                    <h2 class="mb-1"><?php echo get_field('home_sub_title'); ?></h2>
                  </div>
                  <div class="content__description">
                    <div class="small">
                        <?php echo get_field('home_text_content'); ?>
                        
                    </div>
                    <div class="qr-code">
                      <!-- the below is fetched from home page group -->
                    <img src="<?php echo get_field('barcode_image')?>">
                     </div>
                  </div>

                </div>
                <div class="content__right">
                  <div class="home__circles">
                    <div class="home__circles-lines"></div>

                   <div class="home__circle home__circle--left">
                    <h2 class="h2"><?php echo get_field('home_contact_title_first_part'); ?><span style="color:var(--secondary-color); font-weight: bold;"><?php echo get_field('home_contact_title_second_part'); ?></h2>

                 
                    <?php echo do_shortcode('[contact-form-7 id="236eb15" title="beside first donation button form"]'); ?> 
                    <button type="button" class="donate_button" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <?php echo get_field('home_join_the_cause_level'); ?>
</button>
                   </div>
                   

                  
                  </div>
                </div>
              </div>
            </section>
          </div>    
             <?php $aboutmarker = $secnamenumberstorage[1];
                $aboutmarkerarray = explode('#',$aboutmarker);

            ?>
          <div class="scrollable">
            <section class="projects">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div><?php echo $aboutmarkerarray[0]; ?></div>
                    <div><?php echo $aboutmarkerarray[1]; ?></div>
                  </li>
                </ul>
              </div>
              <div class="content">
                <div class="content__left">
                  
                  <div class="content__title">
                    <div class="h2" style="color:var(--primary-color);"><?php echo get_field('home_about_first_title'); ?></div>
                  </div>
                  <div class="content__description">
                    <div class="small"><?php echo get_field('home_about_big_text'); ?>

                    <strong style="color:var(--secondary-color); font-style: italic;"><?php echo get_field('creator_name'); ?><br>
                    <?php echo get_field('creator_designation'); ?>  </strong>

                  </div>

                </div>
                </div>
                <div class="content__right">
                  <div class="projects__blocks">
                    <div class="projects__block active"><a href="#" class="hover-border-2" target="_blank" rel="nofollow"><img src="<?php echo get_field('about_section_second_image'); ?>" alt=""></a></div>
                    <div class="projects__block active"><a href="#" class="hover-border-2" target="_blank" rel="nofollow"><img src="<?php echo get_field('about_section_first_image'); ?>" alt=""></a></div>
                   
                  </div>
                </div>
              </div>
            </section>
          </div>
           <?php $creatormarker = $secnamenumberstorage[2];
                $creatormarkerarray = explode('#',$creatormarker);

            ?>
          <div class="scrollable" id="contct">
            <section class="creators">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div><?php $creatormarkerarray[0];  ?></div>
                    <div><?php $creatormarkerarray[1];  ?></div>
                  </li>
                </ul>
              </div>
              <div class="content">
                <div class="content__left">
                  <div class="content__title">
                    <div class="h2" style="color:var(--primary-color);"><?php echo get_field('creator_section_first_title'); ?></div>
                    <h2><?php echo get_field('creator_section_sub_title'); ?></h2>
                  </div>
                  <div class="content__description">
                    <div class="small"><?php echo get_field('creator_section_big_text_content'); ?>
                    </div>
                  </div>
                </div>
                <div class="content__right">
                  <div class="home__circles">
                    <div class="home__circles-lines"></div>
                   <div class="home__circle home__circle--left">
                    <div class="h2" style="color:var(--primary-color);"><?php echo get_field('creator_section_appeal_to_filmmakers_and_producers'); ?></div>

                       <?php echo do_shortcode('[contact-form-7 id="236eb15" title="beside first donation button form"]'); ?>
                       <button type="button" class="donate_button" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <?php echo get_field('creator_join_the_cause_text'); ?>
</button>
                   </div>
                 
                  </div>
                </div>
              </div>
            </section>
          </div>

           <?php $exploremarker = $secnamenumberstorage[3];
                $exploremarkerarray = explode('#',$exploremarker);

            ?>
          <div class="scrollable">
            <section class="explore">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div><?php echo $exploremarkerarray[0];  ?></div>
                    <div><?php echo $exploremarkerarray[1];  ?></div>
                  </li>
                </ul>
              </div>
              <div class="content">
                <div class="content__left">
                  <div class="content__title">
                    <div class="h2" style="color:var(--primary-color);"><?php echo get_field('home_explore_section_main_heading'); ?></div>
                  </div>
                </div>
                <div class="content__right">
                  <div class="content__awards awards__list">
             <?php        $allexplorers = CFS()->get( 'homeexplorerepeat' );
                      foreach($allexplorers as $eachexploration){
                        

                      ?>

                    <div class="content__award">
                      <div class="content__award-img"><img src="<?php echo $eachexploration['explore_image']; ?>" alt=""></div>
                      <div class="content__award-title">
                        <p><?php echo $eachexploration['explore_text']; ?></p>
                      </div>
                    </div>
                <?php } ?>

                   
                   
                  </div>
                </div>
              </div>
            </section>
          </div>

           <?php $donatemarker = $secnamenumberstorage[4];
                $donatemarkerarray = explode('#',$donatemarker);

            ?>
          <div class="scrollable">
            <section class="donate">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div><?php echo $donatemarkerarray[0];  ?></div>
                    <div><?php echo $donatemarkerarray[1];  ?></div>
                  </li>
                </ul>
              </div>
              <div class="content">
                <div class="content__left">
                  <div class="content__title">
                    <div class="h2" style="color:var(--primary-color);"><?php echo get_field('home_donate_first_title'); ?>
                    </div>
                  </div>
                  <div class="content__description">
                    <div class="small"><?php echo get_field('home_donate_big_text'); ?></div>
                  </div>
                  
                </div>
                <div class="content__right">
                  <div class="home__circles">
                    <div class="home__circles-lines"></div>
                   <div class="home__circle home__circle--left">

                    <div class="row">
                        <?php echo do_shortcode('[contact-form-7 id="96cca4d" title="Donate form with contact form 7_for_donate_page_stand_alone"]'); ?>
                                    
                        
                        
                    </div>
                   </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
             <?php $blogmarker = $secnamenumberstorage[5];
                $blogmarkerarray = explode('#',$blogmarker);

            ?>
          <div class="scrollable">
            <section class="news">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div class="yellowheading"><?php echo $blogmarkerarray[0]; ?></div>
                    <div class="yellowheading"><?php echo $blogmarkerarray[1]; ?></div>
                  </li>
                </ul>
              </div>
              <div class="content">
                <div class="content__left">
                  <div class="content__title">
                   <?php echo get_field('latest_faq_main_title'); ?>
                  </div>
                  <?php
                             $allfaqs = CFS()->get( 'faq_repeat' );
                             $faqcount = 0;
                   ?>
                  <ul class="content__menu news__menu">
                    <?php foreach($allfaqs as $eachfaq)
                    {
                          $faqcount++;
                          if($faqcount==1)
                          {
                     ?>
                         <li class="active"><a href="javascript:;"><?php echo $faqcount;  ?>. <?php echo $eachfaq['question'];  ?></a></li>
                      <?php 
                          }
                         else
                         {
                          ?>
                            <li><a href="javascript:;"><?php echo $faqcount;  ?>. <?php echo $eachfaq['question'];  ?></a></li>
                         <?php
                         }


                    }

                   ?>
                    
                  </ul>
                  
                </div>
                  <div class="content__right">
                  <div class="news__blocks">

                    <?php foreach($allfaqs as $eachfaq)
                    {
                      ?>

                    <div class="news__block active">
                      <div class="news__block-info">
                        <div class="news__block-text small"><?php echo $eachfaq['answer']; ?>
                          </div>
                        <div class="news__block-number"><?php echo $eachfaq['block_number']; ?></div>
                      </div>
                     </div>
                   <?php 
                    } ?>
                  
                  </div>
                </div>
              </div>
            </section>
          </div>
            <?php $contactmarker = $secnamenumberstorage[6];
                $contactmarkerarray = explode('#',$contactmarker);

            ?>
          <div class="scrollable">
            <section class="experience" id="exp">
              <div class="sticky-title">
                <ul>
                  <li>
                    <div class="yellowheading"><?php echo $contactmarkerarray[0];  ?></div>
                    <div class="yellowheading"><?php echo $contactmarkerarray[1];  ?></div>
                  </li>
                </ul>
              </div>
              <div class="content">
                <div class="content__left">
                  <div class="content__title">
                    <div class="h2" style="color:var(--primary-color);"><?php echo get_field('contact_main_heading'); ?></div>
                  </div>
             <!-- the below comes from site social media group -->
                  <ul class="social_ions">
                    <li><a href="<?php echo get_field('facebook',$pageid); ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="<?php echo get_field('twitter',$pageid); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="<?php echo get_field('instagram',$pageid); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                
                  </ul>
                  <div class="contacts__copyright small">© imboxo <?php echo date('Y'); ?>.  All Rights Resevered</div>
                </div>
                <div class="content__right">
                  <div class="content__subtitle"><?php echo get_field('appeal_to_creators_and_watchers_to_sign_up'); ?> </div>

                    <div class="content__contacts"  style="margin-top:50px;">
                        <div class="content__brief">
                        <div class="h2" style="color:var(--primary-color);"><?php echo get_field('connect_with_us_heading'); ?></div>
                    </div>
                        <div class="content__form">
                            <?php echo do_shortcode('[contact-form-7 id="236eb15" title="beside first donation button form"]'); ?>
                        
                        <button type="button" class="donate_button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                   <?php echo get_field('join_the_cause_title'); ?>
                        </button>
                        </div>
                    </div>
                </div>
              </div>
            </section>
            
          </div>
        </div>
      </div>
    </main>
  <?php get_footer(); ?>