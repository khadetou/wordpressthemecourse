<?php get_header();
while (have_posts()) {
    the_post(); ?>
    <h1><a style="color: green; text-decoration: none;" href="<?php the_permaLink(); ?>"><?php the_title() ?></a></h1>
    <p><?php the_content() ?></p>
    <hr />
<?php }
get_footer();
?>