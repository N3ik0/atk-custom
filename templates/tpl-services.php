<?php
/*
Template Name: Services
Description: Services page
*/

get_header(); ?>
<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri();?>/assets/img/1920x1080/06.webp">
            <div class="parallax-content container">
                <h1 class="carousel-title">Services</h1>
                <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Our Exceptional Solutions -->
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Our Exceptional Solutions</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row margin-b-50">
                <!-- Our Exceptional Solutions -->
                <?php
                $queryService = new WP_Query(array(
                    'post_type' => 'service',
                    'order' => 'DESC',
                    'orderby' => 'ID'
                ));

                if ( $queryService->have_posts() ) { while ($queryService->have_posts())  { $queryService->the_post();
                ?>

                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <?php if (has_post_thumbnail()) :
                            $imgService = get_the_post_thumbnail_url();
                            ?>
                            <img class="img-responsive" src="<?php echo esc_url($imgService); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <h3><a href="#"><?php the_title();?></a> <span class="text-uppercase margin-l-20">Management</span></h3>
                    <?php the_excerpt();?>
                    <a class="link" href="<?php the_permalink();?>">En savoir plus</a>
                </div>
                <?php } } wp_reset_postdata(); ?>
                <!-- End Our Exceptional Solutions -->
            </div>
        </div>
        <!-- End Our Exceptional Solutions -->

    <!-- Clients statique -->
    <div class="bg-color-sky-light">
            <div class="content-lg container">
                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo get_template_directory_uri(  );?>/assets/img/clients/01.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo get_template_directory_uri(  );?>/assets/img/clients/02.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo get_template_directory_uri(  );?>/assets/img/clients/03.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo get_template_directory_uri(  );?>/assets/img/clients/04.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo get_template_directory_uri(  );?>/assets/img/clients/05.png" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="<?php echo get_template_directory_uri(  );?>/assets/img/clients/06.png" alt="Clients Logo">
                        </div>
                    </div>
                    <!-- End Swiper Wrapper -->
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->

        <!-- Promo Section -->
        <div class="promo-section overflow-h">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                                <h2>Nos clients</h2>
                                <?php the_field('service_client_text'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <?php $imgClientService = get_field('service_client_image'); ?>
                <img class="img-fluid" src="<?php echo $imgClientService['url'];?>" alt="<?php echo $imgClientService['alt'];?>">
            </div>
        </div>
        <!-- End Promo Section -->
        <!--========== END PAGE LAYOUT ==========-->
        <?php get_footer(); ?>