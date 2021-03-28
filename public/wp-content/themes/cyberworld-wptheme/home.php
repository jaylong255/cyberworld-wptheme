<!DOCTYPE html>
<html lang="<?php get_locale(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/clean-blog.css" rel="stylesheet">
</head>
<body class="antialiased">

<?php get_template_part('partials/nav'); ?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="post-preview">
                <a href="<?php echo get_permalink(); ?>">
                    <h2 class="post-title">
                        <?php the_title(); ?>
                    </h2>
                </a>
                <p class="post-meta">Posted by
                    <?php the_author_link(); ?>
                    on <?php the_modified_date(); ?>
                </p>
                <?php wp_link_pages(); ?>
                <?php edit_post_link(); ?>
            </div>
            <hr>

<?php endwhile; ?>

    <?php
    if ( get_next_posts_link() ) {
        next_posts_link();
    }
    ?>
    <?php
    if ( get_previous_posts_link() ) {
        previous_posts_link();
    }
    ?>

<?php else: ?>

             <p>No posts found. :(</p>

<?php endif; ?>

        </div>
    </div>
</div>

<hr>

<?php get_footer(); ?>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/jquery/jquery.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/app.js"></script>
</body>
</html>
