<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
        <header class="header">
            <div class="top-header">
                <div class="wrap-box">
                    <h1 class="logo">
                      <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                        </a>

                      <?php else: /* Use h1 when the content title is empty */ ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                            LOGO
                        </a>  
                      <?php endif; ?>
                    </h1>

                    <nav class="main-nav">
                        <?php if (!empty($primary_nav)): ?>
                            <?php print render($primary_nav); ?>
                        <?php endif; ?>

                        <div id="search-box">
                            <?php
                            $block = module_invoke('search', 'block_view', 'form');
                            print render($block['content']);
                            ?>
                        </div>
                    </nav>

<!--                    <div class="btn-menu">-->
<!--                        <span class="btn-toggle">&#8212;</span>-->
<!--                    </div>-->
<!---->
<!--                    <div class="tbl-toggle">-->
<!--                        <ul>-->
<!--                            <li><a href="#">1111</a></li>-->
<!--                            <li><a href="#">2222</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->

                </div>
            </div>
        </header>

        <?php print render($page['content']); ?>

        <?php if ($confirmation) : ?>
            <div id="popupWrapper">
                <div id="popupMessage">
                    <div class="closeForm">&times;</div>
                    <?php print $confirmation_msg; ?>
                </div>
            </div>
        <?php endif; ?>

    </div><!--end WRAPPER-->

  <?php print render($page['footer']); ?>

