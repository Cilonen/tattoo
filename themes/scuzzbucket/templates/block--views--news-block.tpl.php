<div data-0="margin-top:65px;" data-334="margin-top:65px;" data-335="margin-top:95px;" id="block-<?php print $block->module .'-'. $block->delta ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="block-inner">

    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <h2 class="block-title"<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
    <?php endif;?>
    <?php print render($title_suffix); ?>


    <div class="content" <?php print $content_attributes; ?>>
      <?php print $content; ?>
    </div>

  </div>
</div> <!-- /block-inner /block -->