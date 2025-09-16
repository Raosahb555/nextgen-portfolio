<?php get_header(); ?>

<main class="container single-post animate">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h1><?php the_title(); ?></h1>
      <p class="post-meta">Posted on <?php the_date(); ?> by <?php the_author(); ?></p>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
