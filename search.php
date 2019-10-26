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

<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Search Results</h1>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
				<div class="post-content-single-wrap">

				<?php while ( have_posts() ) : the_post(); ?>

                    <article class="hentry">

                        <h2 class="post-title">
							<a href="<?php the_permalink(); ?>">
								<span class="post-title-inner">
									<?php the_title(); ?>
								</span>
							</a>
                        </h2><!-- /.post-title -->

						<?php if (get_the_excerpt()) : ?>
							<div class="post-content">
								<?php the_excerpt(); ?>
							</div><!-- /.post-excerpt -->
						<?php endif; ?>

					</article>
					
				<?php endwhile; ?>

                </div><!-- /.post-content-single-wrap -->
                
            </div><!-- /.inner-content-wrap -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php
get_footer();
