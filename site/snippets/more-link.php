<?= css('assets/css/snippets/more-link.css') ?>
<?php
$link = '#';

if (isset($linkedUrl)) {
  $link = $linkedUrl;
}

if (isset($linkedPage)) {
  $link = $linkedPage->toPages()->first();
}

?>
<div class="more-link">
  <a class="margin-lg py-2 px-4" href="<?= $link ?>">
    <span><?= $text ?></span>
  </a>
</div>