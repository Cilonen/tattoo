<div data-0="position: static;" data-335="width:100%; position: fixed; top:71px; left=:0; right:0; font-size: 22px;" data-336="font-size: 18px;" id="block-<?php print $block->module .'-'. $block->delta ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
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