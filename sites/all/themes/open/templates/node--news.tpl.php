<?php if ($teaser): ?>

    <a href="<?php print $node_url; ?>">
        <div class="where-img">
            <?php print render($content['field_photos_news']); ?>
        </div>
    </a>

    <div class="where-text">
        <h2>
            <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
        </h2>

        <p><?php print strip_tags(render($content['body'])); ?></p>

        <div class="read-more-box">
            <a href="<?php print $node_url; ?>" class="read-more">Read More</a>
        </div>
    </div>


<?php else: ?>

    <section class="wrap-page-title">
        <div class="wrap-box">
            <header>
                <h1><?php print $title; ?></h1>
            </header>

            <?php print render($content['field_news_description']); ?>
        </div>
    </section>


    <div class="single-content">
        <?php print render($content['body']); ?>

        <?php $author = $content['field_news_author'];
            if ($author) { ?>
            <div class="single-author">
                <span><?php print strip_tags(render($author)); ?></span>
            </div>
        <?php } ?>
    </div>


<?php endif; ?>