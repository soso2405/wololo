/**
* Template Name: vert
* Description: page avec fond vert
*/
<?php get_header();?>
<section style="background-color: green;">

<h1><?php bloginfo('name');?> </h1>

<section>
  <aside><?php get_sidebar();?></aside>
</section>

<!-- The loop -->
<?php while(have_posts()):
        the_post();?>
  <article>
        <h2><?php the_title();?></h2>
        <div><?php the_content();?></div>

  </article>

<?php endwhile;?> <!-- équiavalent à l'accolade-->

</section>
<?php get_footer();?>
