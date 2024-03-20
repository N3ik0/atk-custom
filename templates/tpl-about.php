<?php
/*
Template Name: About
Description: About page
*/
get_header(); ?>

<!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri();?>/assets/img/1920x1080/06.webp">
            <div class="parallax-content container">
                <h1 class="carousel-title">A propos</h1>
                <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Features -->
        <div class="section-seperator">
            <div class="content-lg container">
                <div class="row">
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h3><?php the_field('titre_triple_1');?></h3>
                            <p><?php the_field('texte_triple_1');?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <h3><?php the_field('titre_triple_2');?></h3>
                            <p><?php the_field('texte_triple_2');?></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h3><?php the_field('titre_triple_3');?></h3>
                            <p><?php the_field('texte_triple_3');?></p>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Features -->

        <!-- About -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row margin-b-20">
                    <div class="col-sm-6">
                        <h2>Qui sommes nous</h2>
                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <div class="col-sm-7 sm-margin-b-50">
                        <div class="margin-b-30">
                            <?php the_field('texte_about');?>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                        <?php $imgAbout = get_field('img_about');?>
                        <img class="img-responsive" src="<?php echo $imgAbout['url'];?>" alt="<?php echo $imgAbout['alt'];?>">
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End About -->
</div>

        <!-- Testimonials -->
        <div class="content-lg container ">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Note de l'équipe</h2>

                    <!-- Swiper Testimonials -->
                    <div class="swiper-slider swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        <?php the_field('texte_note_1');?>
                                    </div>
                                    <p><span class="fweight-700 color-link"><?php the_field('creator_note_1');?></span></p>
                                </blockquote>
                            </div>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        <?php the_field('texte_note_2');?>
                                        <p><span class="fweight-700 color-link"><?php the_field('creator_note_2');?></span></p>
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

        <!-- Team -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Rencontrez l'équipe</h2>
                        <p><?php the_field('team_texte_entete');?></p>
                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <?php $imgTeam1 = get_field('img_team_m1');?>
                                <img class="img-responsive" src="<?php echo $imgTeam1['url']; ?>" alt="<?php echo $imgTeam1['alt']; ?>">
                            </div>
                        </div>
                        <h4><a href="#"><?php the_field('team_name_m1');?></a> <span class="text-uppercase margin-l-20"><?php the_field('team_rank_m1');?></span></h4>
                        <p><?php the_field('team_text_m1');?></p>
                    </div>
                    <!-- End Team -->

                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <?php $imgTeam1 = get_field('img_team_m2');?>
                                <img class="img-responsive" src="<?php echo $imgTeam1['url']; ?>" alt="<?php echo $imgTeam1['alt']; ?>">
                            </div>
                        </div>
                        <h4><a href="#"><?php the_field('team_name_m2');?></a> <span class="text-uppercase margin-l-20"><?php the_field('team_rank_m2');?></span></h4>
                        <p><?php the_field('team_text_m2');?></p>
                    </div>
                    <!-- End Team -->

                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <?php $imgTeam3 = get_field('img_team_m3');?>
                                <img class="img-responsive" src="<?php echo $imgTeam3['url']; ?>" alt="<?php echo $imgTeam3['alt']; ?>">
                            </div>
                        </div>
                        <h4><a href="#"><?php the_field('team_name_m3');?></a> <span class="text-uppercase margin-l-20"><?php the_field('team_rank_m3');?></span></h4>
                        <p><?php the_field('team_text_m3');?></p>
                    </div>
                    <!-- End Team -->
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Team -->
        <!--========== END PAGE LAYOUT ==========-->
        <?php get_footer(); ?>