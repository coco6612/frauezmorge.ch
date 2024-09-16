<?php snippet('header') ?>

<script>
var i = 0;
var h = 0;
var speed = 250;
var speedText = 50;
var headliners = [];

var cursor = true;
setInterval(() => {
  if(cursor) {
    document.getElementById('cursor').style.opacity = 0;
    cursor = false;
  } else {
    document.getElementById('cursor').style.opacity = 1;
    cursor = true;
  }
}, speed);

function typeWriter() {
  if (i < headliners[h].length) {
    document.getElementById("headliner-text").innerHTML += headliners[h].charAt(i);
    i++;
    setTimeout(typeWriter, speedText);
  } else {
    i = 0;
    if (h == headliners.length -1) {
      h = 0;
    } else {
      h++;
    }
    setTimeout(() => {
      document.getElementById("headliner-text").innerHTML = "";
      typeWriter();
    }, 3000);
  }
}

document.addEventListener('DOMContentLoaded', function() {
    const headlinerData = document.getElementById("headliner-data");
    for (const child of headlinerData.children) {
      headliners.push(child.innerHTML);
    }
    typeWriter();
}, false);

</script>

<div class="content-wrapper"id="headliners">
  <div class="content-max-width">
    <?php if($nextEvent = $page->nextEvent()->toPage()): ?>
      <?php snippet('event-teaser', ['event' => $nextEvent, 'subtitle' => 'Nächster Frauezmorge', 'type' => 'teaser']) ?>
    <?php endif ?>
  </div>
</div>

<div class="content-wrapper">
  <div class="content-max-width past-events">
    <h1>Vergangene Zmorgen</h1>
    <div class="past-events">
      <?php foreach ($page->events()->toPages() as $event): ?>
        <?php snippet('event-thumbnail', ['event' => $event]) ?>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<?php snippet('footer') ?>