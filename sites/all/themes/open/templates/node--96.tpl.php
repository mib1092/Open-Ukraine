<section class="wrap-page-title">
    <div class="wrap-box">
        <header>
            <h1><?php print $title; ?></h1>
        </header>

        <?php print render($content['field_description']); ?>
    </div>
</section>

<main class="main-content">
    <?php
    $block = module_invoke('views', 'block_view', 'news-block_1');
    print render($block['content']);
    ?>
</main>