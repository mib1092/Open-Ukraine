<div class="slides-js">
    <?php foreach ($items as $delta => $item): ?>
        <div>
            <?php print render($item); ?>
        </div>
    <?php endforeach; ?>
</div>
