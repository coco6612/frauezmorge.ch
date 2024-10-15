<?php snippet('header') ?>

<div class="content-wrapper">
  <div class="content-max-width">
   <h1>Egger Frauezmorge</h1>
   <div class="">
    <?= $page->intro()->kirbytext() ?>
  </div>
  </div>
</div>

<div class="content-wrapper">
  <div class="content-max-width">
    <h1>Das Team</h1>
    <div class="">
      <?= $page->dasTeam()->kirbytext() ?>
    </div>
  </div>
</div>

<div class="content-wrapper">
  <div class="content-max-width">
    <h1>Die Geschichte des Frauenzmorge</h1>
    <div class="">
      <?= $page->history()->kirbytext() ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>