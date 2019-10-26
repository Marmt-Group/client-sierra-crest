<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package sierra-crest-2019
 */

get_header('secondary');
?>
<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
				<div class="post-content-single-wrap">

				<?php while ( have_posts() ) : the_post(); ?>

                    <article class="hentry">

                        <h2 class="post-title">
                            <span class="post-title-inner">
                                <?php the_title(); ?>
                            </span>
                        </h2><!-- /.post-title -->

                        <div class="post-content">
                            <?php the_content(); ?>
                        </div><!-- /.post-excerpt -->

					</article>
					
				<?php endwhile; ?>

                </div><!-- /.post-content-single-wrap -->
                
            </div><!-- /.inner-content-wrap -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php
get_footer();
