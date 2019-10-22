<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sierra-crest-2019
 */

?>

	</div><!-- #content -->

	<!-- Footer -->
	<footer id="footer">
		<div id="footer-widgets" class="container style-1">
			<div class="row">
				<div class="col-md-3">
					<div class="widget widget_about margin-bottom-25">
						<div class="margin-bottom-35">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-white.png" width="204" height="30" alt="image" />
						</div>
						<p><i>Our attention to detail is the difference!</i></p>
					</section>

					<section class="widget widget_information">
						<ul class="info-wrap">
							<li class="address item">4115 Blackhawk Plaza Circle, Ste. 100, Danville CA 94506</li>
							<li class="phone item"><a href="tel:+19253628898">925-362-8898</a></li>
							<li class="email item"><a href="mailto:ddavis@sierracrestconstruction.com">ddavis@sierracrestconstruction.com</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-6">
					<ul class="posts-widget">
						<?php dynamic_sidebar( 'posts' ); ?>
					</ul>
				</div>

				<!-- <div class="col-md-3">
					<div class="widget widget_instagram">
						<h2 class="widget-title">Instagram photos</h2>

						<div class="instagram-wrap clearfix g10">
							<div class="instagram_badge_image">
								<a href="#">
									<div class="item">
										<img src="assets/img/instagram/1.jpg" alt="image" />
									</div>          
								</a>
							</div>
							<div class="instagram_badge_image">
								<a href="#">
									<div class="item">
										<img src="assets/img/instagram/2.jpg" alt="image" />
									</div>          
								</a>
							</div>
							<div class="instagram_badge_image">
								<a href="#">
									<div class="item">
										<img src="assets/img/instagram/3.jpg" alt="image" />
									</div>          
								</a>
							</div>
							<div class="instagram_badge_image">
								<a href="#">
									<div class="item">
										<img src="assets/img/instagram/4.jpg" alt="image" />
									</div>          
								</a>
							</div>
							<div class="instagram_badge_image">
								<a href="#">
									<div class="item">
										<img src="assets/img/instagram/5.jpg" alt="image" />
									</div>          
								</a>
							</div>
							<div class="instagram_badge_image">
								<a href="#">
									<div class="item">
										<img src="assets/img/instagram/6.jpg" alt="image" />
									</div>          
								</a>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</footer>
</div><!-- #page -->

<!-- Bottom -->
<div id="bottom" class="clearfix style-1">
    <div id="bottom-bar-inner" class="wprt-container">
        <div class="bottom-bar-inner-wrap">
        
            <div class="bottom-bar-content">
                <div id="copyright">&copy; <?php echo date("Y"); ?> Sierra Crest Construction, Inc.
                </div><!-- /#copyright -->
            </div><!-- /.bottom-bar-content -->

            <div class="bottom-bar-menu">
                <ul class="bottom-nav">
                    <li><a href="/industry-news">Industry News</a></li>
                </ul>       
            </div>
        </div>
    </div>
</div>

</div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top">TOP</a>

<?php wp_footer(); ?>

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-27981258-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

</body>
</html>
