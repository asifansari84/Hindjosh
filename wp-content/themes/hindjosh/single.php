<?php 
    get_header();
    the_post();
 ?>
<div class="container my-5">
    <div class=" flex-class">
        <div class="content-class">
            <h2><?php echo the_title(); ?></h2>
            <div class="post-info">
                <?php if(get_the_date() !== get_the_modified_date()) {?>
                <p>Updated on : <?php echo the_modified_date();?></p>
                <?php } else { ?>
                <p>Punlished on : <?php echo get_the_date();?></p>
                <?php } ?>
                <p>&nbsp;by <?php the_author_link(); ?></p>
                <p><?php the_category(); ?></p>
            </div>
            <?php echo the_post_thumbnail(); ?>
            <p><?php echo the_content(); ?></p>
        </div>
        <div class="main-sidebr">
            <div class="sidebar-class ">
                <?php dynamic_sidebar('sidebar'); ?>
            </div>
            <div class="sidebar-class mt-4 categories-bar">
                <?php dynamic_sidebar('category'); ?>
            </div>

        </div>
    </div>
    <div class="comments-sec">
        <?php 
        if(comments_open()){
            comment_form();  
        }
        ?>

    </div>
</div>

</div>


<?php get_footer(); ?>