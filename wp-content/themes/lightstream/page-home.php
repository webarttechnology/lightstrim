<?php /* Template Name: Home */

get_header();
 ?>

   <!-- banner- -->
    <section class="banner-part">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="carousel-captions">
                      <?php echo get_field('home_banner_text'); ?>
                        <p><?php  echo get_field('loan'); ?>
                            <span class="highlight"><?php echo get_field('apr_with_autopay_title'); ?></span>
                        </p>
                        <div class="LightStream-button">
                            <a href="<?php echo get_field('apply_now_link'); ?>"><?php echo get_field('apply_now_title'); ?></a>
                      <span><a href="<?php echo get_field('rates_and_terms_link'); ?>"> <?php echo get_field('rates_and_terms_text'); ?> </a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                         <?php  echo do_shortcode('[contact-form-7 id="8234aaa" title="Signin form" html_class="form-group"]');  ?>

                        </div>
                </div>
            </div>
        
    </div>
    </section>

    <section class="fund">
        <div class="container">
            <h2><?php  $funditemsrepeat = CFS()->get( 'funditemsrepeat' ); ?> </h2>
            <!-- carousel -->
            <div class="items">
               <?php foreach($funditemsrepeat as $eachitemsrepeat){ ?>
                <div class="entry">
                    <img src="<?php echo $eachitemsrepeat['fund_items_image']; ?>" />
                    <p class="quote"><?php echo $eachitemsrepeat['fund_items_title']; ?></p>
                </div>
            <?php } ?>

              
            </div>
        </div>
        </div>
    </section>


    <section class="trusted-company">
        <div class="trusted-company__bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shapes/trust-bg-1-1.png);"></div>
        <!-- /.trusted-company__bg -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="trusted-company__content">
                        <div class="block-title text-left">
                            <?php echo CFS()->get( 'about_us_intro_text'); ?>
                        </div>
                        <div class="trusted-company__image">
                            <img src="<?php echo CFS()->get('about_section_left_image'); ?>" alt="" height="148" width="171">
                            <p><?php    echo CFS()->get('about_left_big_text'); ?></p>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 col-xs-12">
                                <ul class="trusted-company__list">
                                    <?php $leftitems = CFS()->get('about_section_left_items_repeat');
                                      foreach($leftitems as $eachleftitem){
                                     ?>
                                    <li class="trusted-company__list-item">
                                        <span>
                                            <i class="bi bi-check2"></i>
                                        </span>
                                        <span class="trusted-company__list-text"><?php echo $eachleftitem['each_left_item'];  ?></span>
                                    </li>
                                <?php } ?>
                                  
                                </ul>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <?php $leftitemssecondcols = CFS()->get('about_section_left_item_second_column_repeat'); ?>
                                <ul class="trusted-company__list trusted-company__list-2">

                                    <?php foreach($leftitemssecondcols as $eachleftitemsecondcols){ ?>

                                    <li class="trusted-company__list-item">
                                        <span>
                                            <i class="bi bi-check2"></i>
                                        </span>
                   <span class="trusted-company__list-text"><?php echo   $eachleftitemsecondcols['each_second_column_item_title'];    ?></span>
                                    </li>
                                <?php } ?>
                                 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="trusted-company__box-wrap">
                        <?php $allrightfeatures = CFS()->get('about_right_repeat'); 
                        $rightcount = 0;
                          foreach($allrightfeatures as $eachrightfeature){
                            $rightcount++;
                        ?>

                        <div class="trusted-company__box">
                            <span><?php echo $rightcount;  ?></span>
                            <p><?php echo $eachrightfeature['about_right_text'];  ?></p>
                        </div><!-- /.trusted-company__box -->
                    <?php } ?>

                       
                    </div><!-- /.trusted-company__box-wrap -->
                </div><!-- /.col-lg-6 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>





    <section class="find-your-rate">
        <div class="container">
            <div class="block-title text-center">
               <?php echo CFS()->get('what_we_are_offering_initial_text'); ?>
            </div><!-- /.block-title -->
            <div class="row">
<?php $allservices = CFS()->get('what_we_are_offering_repeat'); 
          foreach($allservices as $eachservice){
?>


                <div class="col-lg-4">
                    <div class="service-one__card">
                        <div class="service-one__image">
                            <a href="<?php echo $eachservice['service_link'] ; ?>">
                                <div class="post-thumbnail">
                                    <img src="<?php echo $eachservice['service_image'] ; ?>" alt="">
                                </div>
                            </a>
                        </div><!-- /.service-one__image -->
                        <div class="service-one__content">
                            <a href="<?php echo $eachservice['service_link'] ; ?>">
                                <div class="service-icon">
                                    <i class="flaticon-car-loan"></i>
                                </div>
                            </a>
                            <h3><a href="<?php echo $eachservice['service_link'] ; ?>"><?php echo $eachservice['service_title'] ; ?></a></h3>
                            <p><?php echo $eachservice['service_text'] ; ?>
                            </p>
                            <a href="<?php echo $eachservice['service_link'] ; ?>"
                                class="pylon-icon-right-arrow service-one__link"></a><!-- /.service-one__link -->
                        </div>
                    </div>
                </div>
            <?php } ?>
                
            
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>



    <section class="testimonial">
        <div class="container">
            <h2> <?php  echo   CFS()->get('testimonial_section_title'); 
                         $altestimonials = CFS()->get('all_testimonials'); 
                         $testimocount = 0;
                       
              ?></h2>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
      

                     foreach($altestimonials as $eachtestimo){
                        $testimocount++;
                        if($testimocount==1){
                      ?>

                    <div class="carousel-item active">
                    <?php }
                    else
                    {
                        ?>
                         <div class="carousel-item">

                   <?php  }


                     ?>
                        <div class="carousel-caption">
                            <p><?php echo $eachtestimo['text'] ?></p>
                            <img src="<?php echo $eachtestimo['image']; ?>">
                            <div id="image-caption"><?php echo $eachtestimo['author']; ?></div>
                        </div>
                    </div>
                <?php } ?>
                
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev"> <i class='fas fa-arrow-left'></i> </a>
                <a class="carousel-control-next" href="#demo" data-slide="next"> <i class='fas fa-arrow-right'></i> </a>
            </div>
        </div>
    </section>


    <section class="call">
        <div class="container">
            <div class="row call-to">
                <div class="col-md-6">
                    <?php echo CFS()->get('last_section_text'); ?>
                </div>
                <div class="col-md-6">
                    <div class="LightStream-buttonn">
              <a href="<?php echo CFS()->get('last_section_apply_for_loan_link'); ?>"> <?php echo CFS()->get('last_section_apply_for_loan_text'); ?></a>
                    </div>
                </div>

            </div>
        </div>
    </section>


 <?php get_footer(); ?>