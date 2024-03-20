<?php get_header(); ?>



<div class="promo-section overflow-h">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                            <?php the_content();?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <img class="img-thumbnail" src="<?php echo get_template_directory_uri(  )?>/assets/img/970x970/01.webp" alt="Content Image">
            </div>
        </div>



<?php get_footer();?>