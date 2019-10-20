<?php
/**
* Template Name: Blog Page
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
                <h1 class="featured-title-heading">Industry News</h1>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">

             <?php echo do_shortcode('[ajax_load_more id="1405140995" container_type="div" post_type="post" scroll_container="#inner-content"]'); ?>

            </div><!-- /.inner-content-wrap -->
        </div><!-- /#site-content -->

        <!-- <div id="sidebar">
            <div id="inner-sidebar" class="inner-content-wrap">
                <div class="widget widget_search">
                    <form role="search" method="get" action="#" class="search-form style-1">
                        <input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search for:">
                        <button type="submit" class="search-submit" title="Search">Search</button>
                    </form>
                </div>

                <div class="widget widget_categories">
                    <h2 class="widget-title"><span>Categories</span></h2>
                    <ul>
                        <li class="cat-item cat-item-3"><a href="#">Building</a> (2)</li>
                        <li class="cat-item cat-item-6"><a href="#">Ecobuilding</a> (4)</li>
                        <li class="cat-item cat-item-4"><a href="#">House</a> (4)</li>
                        <li class="cat-item cat-item-5"><a href="#">Office</a> (1)</li>
                        <li class="cat-item cat-item-10"><a href="#">Tower</a> (3)</li>
                    </ul>
                </div>
            </div><!-- /#inner-sidebar -->
        </div> -->
    </div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php
get_footer();
?>