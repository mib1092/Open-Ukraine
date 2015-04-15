<article>
    <header>
        <h3><?php print $title; ?></h3>
    </header>

    <div class="start-video">
        <?php print render($content['field_video']); ?>
    </div>

    <p><?php print strip_tags(render($content['body'])); ?></p>
</article>