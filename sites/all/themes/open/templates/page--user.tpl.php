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

                <div id="search-box">
                    <?php
                        $block = module_invoke('search', 'block_view', 'form');
                        print render($block['content']);
                    ?>
                </div>

              <nav class="main-nav">

                <?php if (!empty($primary_nav)): ?>
                    <?php print render($primary_nav); ?>
                <?php endif; ?>

              </nav>

            </div>
        </div>
    </header>

    <section class="wrap-page-title">
        <div class="wrap-box">
            <header>
                <h1><?php print $title; ?></h1>
            </header>
        </div>
    </section>

    <div class="wrap-login">
        <div class="wrap-box">
            <?php print render($page['content']); ?>
        </div>
    </div>

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