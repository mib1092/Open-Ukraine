<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>
<?php if ($content): ?>
    <div class="wrap-footer">
        <footer class="footer">
            <div id="map">
                <!-- add Google Map -->
                <?php
                    $block = module_invoke('views', 'block_view', 'footer_map-block');
                    print render($block['content']);
                ?>
            </div>

            <div class="wrap-form">
                <div class="wrap-box">
                    <div class="wrap-copy">

                        <?php $fb = token_replace('[socialmedia:sm-facebook_url]');
                              $tw = token_replace('[socialmedia:sm-twitter_url]');
                              $yt = token_replace('[socialmedia:sm-youtube_url]');

                            if ( substr($fb, 0, 4) == 'http' ) { $fb_true = TRUE; }
                            if ( substr($tw, 0, 4) == 'http' ) { $tw_true = TRUE; }
                            if ( substr($yt, 0, 4) == 'http' ) { $yt_true = TRUE; }

                            if ( $fb_true || $tw_true || $yt_true ) { ?>
                        <ul class="list-social">
                            <?php if($fb_true): ?>
                            <li>
                                <a href="<?php print $fb; ?>" target="_blank" rel="nofollow">
                                    <i class="fa fa-facebook"></i>Facebook</a>
                            </li>
                            <?php endif; ?>

                            <?php if($tw_true): ?>
                            <li>
                                <a href="<?php print $tw; ?>" target="_blank" rel="nofollow">
                                    <i class="fa fa-twitter"></i>Twitter</a>
                            </li>
                            <?php endif; ?>

                            <?php if($yt_true): ?>
                            <li>
                                <a href="<?php print $yt; ?>" target="_blank" rel="nofollow">
                                    <i class="fa fa-youtube-play"></i>YouTube</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                        <?php } ?>


                        <div class="copy-box">
                            <address class="address">Kyiv, Khreshchatyk St. 34<br>Tel.: <a href="tel:943 34 340">943 34 340</a></address>

                            <p class="copyright">Powered by <a href="http://geekhub.ck.ua/" target="_blank" rel="nofollow">GeekHub</a></p>
                        </div>
                    </div>

                    <!-- add feedback-form -->
                    <?php
                        $block = module_invoke('webform', 'block_view', 'client-block-38');
                        print render($block['content']);
                    ?>
                </div>
            </div><!--end WRAP-FORM-->
        </footer>
    </div><!--end WRAP-FOOTER-->

<?php endif; ?>
