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

<?php get_header('post'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part( 'partials/content', get_post_format() );



                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                        // Previous/next post navigation.
                        the_post_navigation( array(
                            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'cybeworld-wptheme' ) . '</span> ' .
                                '<span class="screen-reader-text">' . __( 'Next post:', 'cybeworld-wptheme' ) . '</span> ' .
                                '<span class="post-title">%title</span>',
                            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'cybeworld-wptheme' ) . '</span> ' .
                                '<span class="screen-reader-text">' . __( 'Previous post:', 'cybeworld-wptheme' ) . '</span> ' .
                                '<span class="post-title">%title</span>',
                        ) );

                        // End the loop.
                    endwhile;
                    ?>

                </main><!-- .site-main -->
            </div><!-- .content-area -->

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
