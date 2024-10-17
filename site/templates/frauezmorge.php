<?php snippet('header') ?>

<script>
  function setMainImage(index, srcNewMain) {
    var mainElement = document.getElementById('image0');
    var clickedElement = document.getElementById('image' + index);
    if (mainElement && clickedElement) {
      var srcMain = mainElement.src;
      var srcClicked = clickedElement.src;
      clickedElement.src = srcMain;
      mainElement.src = srcClicked;
    }
  }
</script>

<div class="content-wrapper">
  <div class="content-max-width">
   <h1>Der Egger Frauezmorge</h1>
   <div class="">
    <?= $page->intro()->kirbytext() ?>
  </div>
  </div>
</div>

<div class="content-wrapper" id="impressionen">
  <div class="content-max-width">
  <div class="showroom-gallery">
  <?php
    $files = $page->impressionImage()->toFiles();
    $index = 0;
  ?>
  <?php
    foreach($files as $key => $image):?>
      <div class="gallery-image">
        <img id="<?= 'image' . $index ?>" src="<?= $image->resize(1200)->url() ?>" /> 
      </div>
      <?php $index++;?>
  <?php endforeach ?>
  </div>
  </div>
</div>

<?php snippet('footer') ?>