<?php
while (have_posts()) {
    the_post(); ?>
    <h1><?php the_title() ?></h1>
    <p><?php the_content() ?></p>

    <a href="http://fictionnal-university.local:10004/">Go back</a>
<?php } ?>