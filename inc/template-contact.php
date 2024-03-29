<?php
/**
* Template Name: Contact Page
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
                <h1 class="featured-title-heading">Contact Us</h1>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <section class="wprt-section">
                        <div id="gmap" class="wprt-map-1"></div>
                        <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="text-center margin-bottom-20">GET IN TOUCH WITH US</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>

                                    <p class="wprt-subtitle">Sierra Crest Construction is located at the heart of the tri-valley. Feel free to fill out the form below to get in touch with us and will be in touch with you right away. Thanks, we look forward to hearing from you!</p>
                                    <div class="wprt-spacer" data-desktop="40" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-offset-2">
                                    <h5>Address</h5>
                                    <p>4115 Blackhawk Plaza Circle, Ste. 100, <br>Danville CA 94506</p>

                                    <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                    <h5>Phone number</h5>
                                    <p><a href="tel:+19253628898">925-362-8898</a></p>

                                    <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                    <h5>E-mail address</h5>
                                    <p><a href="mailto:ddavis@sierracrestconstruction.com">ddavis@sierracrestconstruction.com</a></p>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="10" data-smobi="10"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-4">
                                    <?php echo do_shortcode('[contact-form-7 id="487" title="Contact form 1"]'); ?>
                                    <!-- <form class="wprt-contact-form" method="post" action="./includes/contact/contact-process.php">
                                        <div class="inner">
                                            <div class="left-side">
                                                <div class="input-wrap">
                                                    <input type="text" value="" tabindex="1" placeholder="Name *" name="name" id="name" required>
                                                </div>
                                                <div class="input-wrap">
                                                    <input type="email" value="" tabindex="2" placeholder="Email *" name="email" id="email" required>
                                                </div>
                                                <div class="input-wrap">
                                                    <input type="text" value="" tabindex="4" placeholder="Subject *" name="subject" id="subject" required>
                                                </div>
                                                <div class="message-wrap">
                                                    <textarea class="" tabindex="5" placeholder="Message *" name="message" id="message" required></textarea>
                                                </div>
                                                <div class="send-wrap">
                                                    <input type="submit" value="SEND MESSAGE" id="submit" name="submit" class="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form> -->
                                </div><!-- /.col-md-8 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>