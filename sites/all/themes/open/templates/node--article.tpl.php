<?php if ($teaser): ?>

    <div class="wrap-box">
        <h2>
            <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
        </h2>

        <p><?php print strip_tags(render($content['body'])); ?></p>

        <a href="<?php print $node_url; ?>" class="read-more">Read More</a>

        <?php print render($content['field_image']); ?>

    </div>

<?php else: ?>

    <section class="wrap-page-title">
        <div class="wrap-box">
            <header>
                <h1><?php print $title; ?></h1>
            </header>

            <?php print render($content['field_article_description']); ?>
        </div>
    </section>

    <main class="main-content">
        <div class="single-content">
            <?php print render($content['body']); ?>

            <?php $author = $content['field_article_author'];
                if ($author) { ?>
                <div class="single-author">
                    <span><?php print strip_tags(render($author)); ?></span>
                </div>
            <?php } ?>
        </div>
    </main>

<?php endif; ?>