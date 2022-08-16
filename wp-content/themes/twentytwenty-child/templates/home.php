<?php

/**

 * Template Name: Home Custom Template

 * Template Post Type: post, page

 *

 * @package WordPress

 * @subpackage Twenty_Twenty

 * @since Twenty Twenty 1.0

 */



get_header();
global $post;
$id = get_the_ID();
?>


<main id="primary" class="site-main">
    

<?php if( have_rows('homepage_content') ): ?>

<?php while ( have_rows('homepage_content') ) : the_row(); ?>

<section>


	<?php /* == == Hero Section Starts == == */
    if( get_row_layout() == 'banner_section' ): ?>

	<div class="hero-wrapper animate-on-load">
        <div class="hero-background">
            <?php $heroImg = get_sub_field('background_image'); ?>
            <img class="hero-img" alt="<?php echo $heroImg['alt'];?> " src="<?php echo $heroImg['url'];  ?>" />
        </div>
        <div class="overlay" style="background: <?php the_sub_field('overlay'); ?>"></div>
        <div class="hero-content">
        <div class="row-container">
        <h1 style="color:<?php the_sub_field('top_text_colour');?>">
            <?php the_sub_field('headline_top_text'); ?> 
            <span class="hero-subtitle" style="color: <?php the_sub_field('bottom_text_colour') ?>">
            <?php the_sub_field('headline_bottom_text'); ?>
            </span></h1>
        </div>
    </div>
    
    <p class="scroll-text" style="font-size:18px;text-transform:uppercase;letter-spacing:3.6px">Scroll Down <i class="fas fa-arrow-circle-right"></i></p>
	</div>

					<?php endif; 
                     /* == == Hero Section ENDS == == */?>

					<?php  /* == == Content Section Starts == == */
                     if( get_row_layout() == 'content_section' ): ?>

<div class="content-wrapper animate">
    <div class="row-container">
        <div class="top-content">
<p class="subtitle"><?php the_sub_field('top_title') ?></p>
<p class="para-text"><?php the_sub_field('top_paragraph'); ?></p>
                     </div>
</div>
<div class="bottom-wrapper">
<?php if( have_rows('left_content') ): ?>
<?php while ( have_rows('left_content') ) : the_row(); ?>

<div class="left-content">
<div class="left-img-wrapper">
            <?php $contentImg = get_sub_field('left_image'); ?>
            <img class="left-img" alt="<?php echo $contentImg['alt'];?> " src="<?php echo $contentImg['url'];  ?>" />
            <div class="left-overlay" style="background: <?php the_sub_field('overlay'); ?>"></div>
            <img class="left-symbol" alt="pink plus symbol" src="/wp-content/uploads/2022/08/Plus-Symbol.png" />
        </div>
  <h3 class="left-heading"><?php the_sub_field('left_text'); ?></h3>      
</div>

<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('right_content') ): ?>
<?php while ( have_rows('right_content') ) : the_row(); ?>
<div class="row-container">
    <div class="right-content"> 
<p class="subtitle"><?php the_sub_field('subtitle') ?></p>
<h2 class="right-heading"><?php the_sub_field('content_heading'); ?> <span class="heading-coloured" style="color: <?php the_sub_field('coloured_text_colour') ?>"><?php the_sub_field('coloured_heading_text'); ?></span></h2>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
	<?php endif;
    /* == == Content Section ENDS == == */ ?>
    
    <?php /*== == Team Section Starts == ==*/ 
     if( get_row_layout() == 'team_section' ): ?>
<div class="team-wrapper animate">
    <div class="row-container">
        <p class="subtitle"><?php the_sub_field('subtitle'); ?></p>
        <h2 class="team-heading"><?php the_sub_field('team_heading_top'); ?><span><?php the_sub_field('team_heading_bottom'); ?></span></h2>				
<?php if(have_rows('team_slider')): ?>
        <div class="team-slider">
            <?php while(have_rows('team_slider')): the_row() ?>
                <div class="team-card">
                    <div class="team-img-wrapper">
                        <?php $teamImg = get_sub_field('profile_picture'); ?>
                        <img class="team-img" alt="<?php echo $teamImg['alt'];?> " src="<?php echo $teamImg['url'];  ?>" />
                            <div class="left-overlay" style="background: <?php the_sub_field('team_overlay'); ?>"></div>
                    </div>
                    <div class="team-content">
                        <p class="team-name"><?php the_sub_field('name'); ?></p>
                        <p class="team-role"><?php the_sub_field('role'); ?></p>
                        <?php $teamLink = get_sub_field('linkedin_link'); ?>
                        <?php if($teamLink):?>
                            <a class="team-link" href="<?php echo $teamLink['url']; ?>" target="_blank" rel="nofollow"><i class="fas fa-chevron-circle-right"></i></a>              
<?php endif;?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>  
        
<?php endif;?>
     </div>
     </div>
<?php endif; /*== == Team Section ENDS == ==*/?>

<?php /*== == Featured Work Section Starts == ==*/ 
     if( get_row_layout() == 'featured_work_section' ): ?>
<div class="work-wrapper animate">
    <div class="row-container">
        <p class="subtitle"><?php the_sub_field('subtitle'); ?> </p>
        <h2 class="work-heading"><?php the_sub_field('featured_heading'); ?> 
            <span class="heading-coloured" style="color: <?php the_sub_field('featured_text_colour'); ?>"><?php the_sub_field('featured_heading_coloured_text'); ?></span>
        </h2>				
<?php if(have_rows('work_slider')): ?>
        <div class="work-slider">
            <?php while(have_rows('work_slider')): the_row() ?>
                <div class="work-card">
                    <div class="work-img-wrapper">
                        <?php $workImg = get_sub_field('featured_image'); ?>
                        <img class="work-img" alt="<?php echo $workImg['alt'];?> " src="<?php echo $workImg['url'];  ?>" />
                            <div class="work-overlay" style="background: <?php the_sub_field('work-overlay'); ?>"></div>
                    </div>
                    <div class="work-content">
                        <p class="work-title"><?php the_sub_field('work_title'); ?></p>
                        <p class="author">By <?php the_sub_field('author'); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>  
        
<?php endif;?>
     </div>
     </div>
<?php endif; /*== == Featured Work Section ENDS == ==*/?>
    
</section>
	<?php endwhile; ?>
<?php endif; ?>
    
</main><!-- #site-content -->



<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>



<?php get_footer(); ?>