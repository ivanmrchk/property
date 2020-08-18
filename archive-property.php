<?php
/**
 * The template for displaying archive properties page.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );?>



<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

	
       


 


			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
            <section id="inside">

            <?php $loop = new WP_Query( array(
                'post_type' => 'Property',
                'posts_per_page' => -1
            )
            );
            ?>
            <div class="row">
                <div class="col-md-12">

                    <ul class="city-filter">
                        <?php 
                        $cat_args = array(
                            'show_option_all'   => 'All',
                            'taxonomy'          => 'cities',
                            'exclude'           => '1',
                            'title_li'          => __( '' )
                        );
                        wp_list_categories( $cat_args)
                    ?>
                    </ul>
                </div>
            </div>
            <div class="row">

            
            <?php

            while ( $loop->have_posts() ) : $loop->the_post(); 

                the_post();
                get_template_part( 'loop-templates/content', 'property');
                   
            endwhile; wp_reset_query(); ?>
            </div>
        </section>
        </main>
    </div>        
</div>

<?php get_footer(); ?>



