<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
                <h1 class="featured-title-heading">Oops, 404!</h1>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
		<div class="col-md-12">
            <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
        </div><!-- /.col-md-12 -->
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">

			 <h5><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'sierra-crest-2019' ); ?></h5>
			 <br>

			<?php
				get_search_form();
			?>

            </div><!-- /.inner-content-wrap -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php
get_footer();
