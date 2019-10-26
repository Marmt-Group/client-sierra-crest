<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

                        <div class="post-meta style-2">
                            <div class="post-meta-content">
                                <div class="post-meta-content-inner">
                                    <span class="post-by-author item">
                                        <span class="inner">By Dave Davis, Owner, Sierra Crest Construction</span>
                                    </span>


                                    <span class="post-meta-categories item">
                                        <span class="inner">
                                            <?php the_tags(); ?>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div><!-- /.post-meta -->

                        <div class="post-content">
                            <?php the_content(); ?>
                        </div><!-- /.post-excerpt -->

                        <div class="post-share post-link-share">
                            <div class="post-meta-share-text">Share:</div>
                            <div class="post-meta-share-icon">
                                <a href="http://www.twitter.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div><!-- /.post-share -->

                        <div class="post-author clearfix">
                            <div class="author-avatar">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/man.png" alt="image" />
                            </div>

                            <div class="author-desc">
                                <h4 class="name">Dave Davis</h4>
                                <p>Owner of Sierra Crest Construction and his team bring years of experience to your project and will help you visualize and build your dream. Dave understands that the work he does involves a dream you have for your home. Every project the company takes on comes with a promise to meet your expectations and bring your project in on time and in budget! Learn how easy it is to start transforming your home by contacting Dave today!</p>
                            </div>
                        </div>

					</article>
					
				<?php endwhile; ?>

                </div><!-- /.post-content-single-wrap -->
                
            </div><!-- /.inner-content-wrap -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php
get_footer();
