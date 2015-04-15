    <section class="wrap-page-title">
        <div class="wrap-box">
            <header>
                <h1><?php print $title; ?></h1>
            </header>

            <?php print render($content['field_description']); ?>
        </div>
    </section>

    <main class="main-content">
        <div class="single-content">
            <?php print render($content['body']); ?>
        </div>
    </main>

<?php endif; ?>