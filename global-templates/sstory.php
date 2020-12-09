<?php
/**
 * usps setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;

$sstory = new WP_Query([

    'post_type'=>'us_sstory',

    'posts_per_page'=> 3,       

    ]);

    if($sstory->have_posts()){

        

    //var_dump($usps);

?>

    <div class="wrapper" id="wrapper-sstory">

    <div class="container">
	<h1><?php _e('Success Story','understrap') ?></h1> 
	<div class="row">                

     <?php 
        while($sstory->have_posts()){
            $sstory->the_post();
            ?>

            <?php get_template_part('loop-templates/content','sstory');?>

			<?php   
			     }

        wp_reset_postdata();             
        ?>

            </div>         

        </div>     

    </div>

    <?php } ?>
