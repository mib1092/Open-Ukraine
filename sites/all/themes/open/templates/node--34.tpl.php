<section class="wrap-page-title">
    <div class="wrap-box">
        <header>
            <h1><?php print $title; ?></h1>
        </header>

        <?php print render($content['field_description']); ?>
    </div>
</section>

<main class="main-content">
    <div class="wrap-contact-us">
        <div class="contact-list wrap-box">
            <?php print render($content['body']); ?>
        </div>
    </div><!--end WRAP-CONTACT-US-->
</main>