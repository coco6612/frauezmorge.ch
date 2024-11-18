<?php snippet('header') ?>
<div class="content-wrapper"id="headliners">
  <div class="content-max-width">
    <?php snippet('event-teaser', ['event' => $page, 'subtitle' => 'Frauezmorge', 'type' => 'details']) ?>
    <div class="event-notes">
      <h2><?= $page->notesTitle()->text() ?></h2>
      <p><?= $page->notes()->kirbytext() ?></p>
    </div>
  </div>
</div>
<?php snippet('footer') ?>
