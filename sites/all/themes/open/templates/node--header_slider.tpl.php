<div class="slide-description">
    <h2><?php print $title; ?></h2>
    <p><?php print strip_tags(render($content['body']));?></p>
</div>
<?php print render($content['field_slider_picture']); ?>