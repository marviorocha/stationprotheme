<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */



get_header(); 

$home_image = wp_get_attachment_image_src($home_page['image_home'], array('1900', '775'));
$slider_one = wp_get_attachment_image_src($slider['image1'], ['1140', '700']);
$slider_two = wp_get_attachment_image_src($slider['image2'], ['1140', '700']);
$slider_tree = wp_get_attachment_image_src($slider['image3'], ['1140', '700']);
$features	= wp_get_attachment_image_src($home_page['features_image'], ['1468', '775']);
$brand	= wp_get_attachment_image_src($slider['brand'], ['275', '57']);

?>
 
 
<div class="white-text-container background-image-container" 
	style="background-image: url('<?php echo $home_image[0] ?>')">
    <div class="opacity"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <h1><?php echo $home_page['title_home'] ?></h1>
				<p><?php  echo wpautop( do_shortcode( $home_page['description_home']  ) ); ?> </p>
			
            </div>

        </div>
    </div>
</div>


<!-- section container -->



<div class="section-container border-section-container">
    <div class="container">
            <div class="row">
                <div class="col-md-12 section-container-spacer">
                    <div class="text-center">
                        <h2><?php echo $section['title'] ?></h2>
                        <p> <?php  echo $section['description']  ?> </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="fa-container">
                        <i class="fa fa-<?php echo $section['icon_1'] ?> fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="text-center">
                        <h3><?php echo $section['title_1'] ?></h3>
                    </div>
                    <div>
                        <p><?php echo $section['descricao_1'] ?></p>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="fa-container">
                        <i class="fa fa-<?php echo $section['icon_2'] ?> fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="text-center">
                        <h3><?php echo $section['title_2'] ?></h3>
                    </div>
                    <div>
                        <p><?php echo $section['descricao_2'] ?></p>
                    </div>
				</div>
				
				<div class="col-md-4">
                    <div class="fa-container">
                        <i class="fa fa-<?php echo $section['icon_3'] ?> fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="text-center">
                        <h3><?php echo $section['title_3'] ?></h3>
                    </div>
                    <div>
                        <p><?php echo $section['descricao_3'] ?></p>
                    </div>
                </div>
                

            </div>
    </div>
</div>

<!-- // end section container -->



<div class="section-container">
    <div class="container">
            <div class="row">
                <div class="col-xs-12">


                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img-responsive" src="<?php echo $slider_one[0] ?>" alt="First slide">
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="<?php echo $slider_two[0] ?>" alt="Second slide">
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="<?php echo $slider_tree[0] ?>" alt="Third slide">
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                    </div>


                </div>
            </div>
    </div>
</div>


<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
						<?php echo wpautop( do_shortcode( $home_page['section_home']  ) );   ?>
                </div>
            </div>
        </div>
     </div>
 </div>

 <div class="section-container">
    <div class="container">
        <div class="row">                   
            <div class="col-md-7">
                <img class="img-responsive" src="<?php echo $features[0] ?>" alt="Feature Image">
            </div>

            <div class="col-md-5">
                
				<?php echo wpautop( do_shortcode( $home_page['features']  ) );   ?>
                   
                 
            </div>
        

              
            <div class="row">
				<?php foreach ( explode( ',', $slider['brand']) as $image_id ) {  ?>
					<?php $images_brand = wp_get_attachment_image_src( $image_id, ['275', '57']) ?>
					
                <div class="col-md-4">
						<img class="img-responsive page-base-image" 
						src="<?php echo $images_brand[0] ?>" alt="">

				</div>
				<?php } ?>
             
              
            </div>
            
        </div>
    </div>
</div>



<?php

get_footer();
