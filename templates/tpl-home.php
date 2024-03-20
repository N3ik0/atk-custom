<?php
/*
  Template Name: Home
  Description: Home
 */

get_header();
?>




        <!--========== SLIDER HERO==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <?php $heroBackground1 = get_field('hero_background_1'); ?>
                    <img class="img-responsive" src="<?php echo $heroBackground1['url'];?>" alt="<?php echo $heroBackground1['alt'];?>">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <?php the_field('hero_title_1');?>
                                <?php the_field('hero_text_1');?>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Contactez-nous</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                <?php $heroBackground2 = get_field('hero_background_2'); ?>
                    <img class="img-responsive" src="<?php echo $heroBackground2['url'];?>" alt="<?php echo $heroBackground2['alt'];?>">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title"><?php the_field('hero_title_1');?></h2>
                                <?php the_field('hero_text_2');?>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-speedometer"></i>
                                </div>
                                <div class="service-info">
                                    <div class="margin-b-5">
                                    <?php the_field('text_service_icon_1');?></div>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <div class="margin-b-5">
                                    <?php the_field('text_service_icon_2');?></div>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-fire"></i>
                                </div>
                                <div class="service-info">
                                    <div class="margin-b-5">
                                    <?php the_field('text_service_icon_3');?></div>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-check"></i>
                                </div>
                                <div class="service-info">
                                    <div class="margin-b-5">
                                    <?php the_field('text_service_icon_4');?></div>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-list"></i>
                                </div>
                                <div class="service-info">
                                    <div class="margin-b-5">
                                    <?php the_field('text_service_icon_5');?></div>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-plus"></i>
                                </div>
                                <div class="service-info">
                                    <div class="margin-b-5">
                                    <?php the_field('text_service_icon_6');?></div>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>  
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Service -->

        <!-- Latest Products -->
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>Dernières réalisations</h2>
                    <?php the_field('top_text_achievements');?>
                </div>
            </div>
            <!--// end row -->

          

            <div class="row">
                <!-- Latest Products -->
                <?php
                $requete = new WP_Query(array
                (
                    // J'indique à WordPress de sélectionner un type d'élément spécifique
                    'posts_per_page' => 3,
                    'order' => 'DESC',
                    'orderby' => 'ID'
                ));
                if ( $requete->have_posts() ) { while ($requete->have_posts())  { $requete->the_post();
            ?>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                    <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <?php if (has_post_thumbnail()) :
                            $imgRealUrl = get_the_post_thumbnail_url();
                            ?>
                            <img class="img-responsive" src="<?php echo esc_url($imgRealUrl); ?>" alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>
                    </div>
                    </div>
                    <h4><?php the_title();?></h4>
                    <?php the_excerpt(); ?>
                    <a class="link" href="<?php the_permalink();?>">En savoir plus</a>
                </div>
                <!-- End Latest Products -->
                <?php } } wp_reset_postdata(); ?>
            </div>
            <!--// end row -->
            
        </div>
        <!-- End Latest Products -->
        

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

        <!-- Testimonials -->
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Avis clients</h2>

                    <!-- Swiper Testimonials -->
                    <div class="swiper-slider swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                       <?php the_field('avis_clients_1');?>
                                    </div>
                                    <?php the_field('auteur_avis_clients_1');?>
                                </blockquote>
                            </div>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                <div class="margin-b-20">
                                       <?php the_field('avis_clients_2');?>
                                    </div>
                                    <?php the_field('auteur_avis_clients_2');?>
                                </blockquote>
                            </div>
                        </div>
                        <!-- End Swiper Wrapper -->

                        <!-- Pagination -->
                        <div class="swiper-testimonials-pagination"></div>
                    </div>
                    <!-- End Swiper Testimonials -->
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Testimonials -->


        <!-- Promo Section -->
        <div class="promo-section overflow-h bg-color-sky-light">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                                <h2>Des années d'éxperiences</h2>
                                <?php the_field('text_promo_section');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(  )?>/assets/img/970x970/01.webp" alt="Content Image">
            </div>
        </div>
        <!-- End Promo Section -->

        <!-- Work -->
        <div class="overflow-h">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Un lieu de savoir faire</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                    </div>
                </div>
                <!--// end row -->

                <!-- Masonry Grid -->
                <div class="masonry-grid">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="work-overlay">
                                <?php $imgMasonry1 = get_field('masonry_img_1'); ?>
                                <img class="full-width img-responsive" src="<?php echo $imgMasonry1['url']; ?>" alt="<?php echo $imgMasonry1['alt']; ?>">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5"><?php the_field('masonry_title_1'); ?></h3>
                                <?php the_field('masonry_text_1'); ?>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="work-overlay">
                                <?php $imgMasonry2 = get_field('masonry_img_2'); ?>
                                <img class="full-width img-responsive" src="<?php echo $imgMasonry2['url']; ?>" alt="<?php echo $imgMasonry2['alt']; ?>">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5"><?php the_field('masonry_title_2'); ?></h3>
                                <?php the_field('masonry_text_2'); ?>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-6 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="work-overlay">
                                <?php $imgMasonry3 = get_field('masonry_img_3'); ?>
                                <img class="full-width img-responsive" src="<?php echo $imgMasonry3['url']; ?>" alt="<?php echo $imgMasonry3['alt']; ?>">
                            </div>
                            <div class="work-content">
                                <h3 class="color-white margin-b-5"><?php the_field('masonry_title_3'); ?></h3>
                                <?php the_field('masonry_text_3'); ?>
                            </div>
                            <a class="content-wrapper-link" href="#"></a>
                        </div>
                        <!-- End Work -->
                    </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <!-- End Work -->
        <!--========== END PAGE LAYOUT ==========-->

        <?php get_footer(); ?>
