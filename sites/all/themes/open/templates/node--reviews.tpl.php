<div class="review-text">
    <h3><?php print $title; ?></h3>
    <p><?php print strip_tags(render($content['body'])); ?></p>
</div>

<div class="review-author">
    <span class="author-photo">
        <?php print render($content['field_author_photo']); ?>
    </span>
    <span class="author-name"><?php print strip_tags(render($content['field_author_name']));?></span>
    <span class="about-author"><?php print strip_tags(render($content['field_about_author']));?></span>
</div>