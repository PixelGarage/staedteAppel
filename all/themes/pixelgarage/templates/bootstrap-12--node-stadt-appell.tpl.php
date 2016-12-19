<?php
/**
 * @file
 * Bootstrap 12 template for Display Suite.
 */

$appell_call = t('Appell lesen...');
$appell_short = t("Die USR III schadet {$title}");
$shariff_buttons_title = t('Appell jetzt teilen!');
?>

<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes; ?>">
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  <?php if ($teaser): ?>
    <div class="row">
      <<?php print $central_wrapper; ?> class="col-sm-12 <?php print $central_classes; ?>">
        <div class="appell-call-backdrop"><div class="appell-text"><?php print $appell_call; ?></div></div>
        <?php print $central; ?>
        <div class="field field-name-field-short-appell">
          <div class="field-item"><?php print $appell_short; ?></div>
        </div>
      </<?php print $central_wrapper; ?>>
    </div>
  <?php else: ?>
    <div class="row">
      <<?php print $central_wrapper; ?> class="col-sm-12 <?php print $central_classes; ?>">
        <?php print render($content['body']); ?>
        <div class="shariff-buttons-title"><?php print $shariff_buttons_title; ?></div>
        <?php print render($content['field_shariff_buttons']); ?>
      </<?php print $central_wrapper; ?>>
    </div>
  <?php endif; ?>
</<?php print $layout_wrapper ?>>


<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
