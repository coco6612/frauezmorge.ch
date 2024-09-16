<?= css('assets/css/snippets/event-teaser.css') ?>
<div class="event-teaser">
  <div class="event-teaser__text">
    <div class="teaser-head"><?= $subtitle ?></div>
    <h1 class="teaser-title"><?= $event->name() ?></h1>
    <h2>Samstag - <?= $event->date()->toDate('d.m.Y') ?></h2>
    <p><?= $event->speaker()->kirbytext() ?></p>
    <p><?= $event->abstract() ?></p>
    <?php if($type == 'teaser'): ?>
      <?php snippet('more-link', ['text' => 'Mehr Informationen', 'linkedUrl' => $event->url()]) ?>
    <?php endif ?>
    <?php if($type == 'details'): ?>
      <p><?= $event->details()->kirbytext() ?></p>
      <?php if(!empty($event->subscribeUrl())): ?>
        <?php snippet('more-link', ['text' => 'Jetzt anmelden', 'linkedUrl' => $event->subscribeUrl()]) ?>
      <?php endif ?>
    <?php endif ?>
  </div>
  <?php if($image = $event->eventImage()->toFile()): ?>
  <div class="event-teaser__img">
      <img class="rellax" src="<?= $image->url() ?>" alt="" data-rellax-speed="0" data-rellax-zindex="10">
      <div class="event-teaser__shape rellax" data-rellax-speed="1" data-rellax-zindex="10">
          <?= svg('assets/images/Shape4.svg') ?>
      </div>
    </div>
  <?php endif ?>
</div>