<?php get_header(); ?>


        <div class="colone">
            <hr width="100%" color="white" size="1">
            <div class="fil">
                <a href="<?php echo get_site_url(); ?>">
                    <p>Home </p>
                </a>
                <p> </p>
                <p>Explore the collection </p>
                <p>> </p>
                <a href="<?php echo get_site_url(); ?>/shop"><p> Nos articles </p></a>
                <p>> </p>
                <p class="blanc"> Article </p>
            </div>
            <p class="soustitre">Article</p>

            <a href="<?php echo get_site_url(); ?>/shop" class="retour">< retour à nos articles</a>



 <div class="dodo">

           <section id="post">
            
                        
    <?php 
    $post=get_post($_GET['id']); ?>
  <?php echo $post->post_content;?>


</section> 




</div>
 

 <?php get_footer(); ?>
