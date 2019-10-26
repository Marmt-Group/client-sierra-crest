<?php
/**
* Template Name: FAQ Page
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
                <h1 class="featured-title-heading">FAQs</h1>
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

             <?php echo do_shortcode('[ultimate-faqs]'); ?>

            </div><!-- /.inner-content-wrap -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php
get_footer();
?>