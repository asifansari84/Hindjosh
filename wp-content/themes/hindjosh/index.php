<?php get_header(); ?>
<div class="container my-4">
    <div class="main-card">
        <?php if (have_posts()) {
    while (have_posts()){
        the_post();
    ?>


        <div class="card card-css">
        <?php the_post_thumbnail(array(724, 360)) ; ?>
            <div class="card-body">

                <h4 class="card-title mt-3 fw-normal lh-base"> <a class="text-dark" href="<?php the_permalink(); ?>">
                        <?php echo the_title(); ?></a></h4>

                        <?php 
                            if(get_the_date() !== get_the_modified_date()){ ?>
                                <p>Update on <?php echo the_modified_date(); ?></p>
                       <?php }else{ ?>

                        <p>Published on <?php echo the_date(); ?></p>
                        <?php } ?>
            </div>
        </div>
        <?php 
        } 
            }else {
                ?><h1>Post Not Found</h1>
            <?php }
?>
    </div>
</div>
<?php get_footer(); ?>