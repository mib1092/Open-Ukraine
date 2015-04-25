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
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">LOGO</a>
                      <?php endif; ?>
                    </h1>

                    <div class="btn-menu">
                        <span class="btn-toggle">
                            <span class="btn-toggle-line"></span>
                        </span>
                    </div>

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
                </div>
            </div><!--end TOP-HEADER-->

            <?php
                $block = module_invoke('views', 'block_view', 'header_slider-block');
                print render($block['content']);
            ?>
        </header>

        <main class="main-content">
            <?php
                $node = menu_get_object();
                $nid = $node->nid;
            ?>
            <section class="preheader-box wrap-box">
                <header>
                    <h2><?php print $title; ?></h2>
                </header>

                <?php $descrip = $node->field_description['und']['0']['value'];
                    if ($descrip !== FALSE): ?>
                    <p class="description"><?php print strip_tags($node->field_description['und']['0']['value']); ?></p>
                <?php endif; ?>

                <?php print render($page['content']['system_main']['nodes'][$nid]['body']); ?>
            </section>

            <?php
                $block = module_invoke('views', 'block_view', 'video_on_homepage-block');
                print render($block['content']);
            ?>
        </main>

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
