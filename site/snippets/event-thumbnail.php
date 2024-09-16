<?= css('assets/css/snippets/event-thumbnail.css') ?>
<div class="event-thumbnail">
  <?php if($image = $event->eventImage()->toFile()): ?>
    <img class="rellax" src="<?= $image->url() ?>" alt="" data-rellax-speed="0" data-rellax-zindex="10">
  <?php endif ?>
  <div class="thumbnail-date"><?= $event->date()->toDate('d.m.Y') ?></div>
  <h3 class="thumbnail-title"><?= $event->name() ?></h3>
  <div class="thumbnail-subtitle"><?= $event->subtitle() ?></div>
</div>