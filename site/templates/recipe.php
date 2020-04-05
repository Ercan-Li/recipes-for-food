<?php snippet('header'); ?>
<?php snippet('menu'); ?>

<div class="content layout-wrapper__child">
  <div class="text">
    <p id="print"><a href="#" onclick="print()">Print</a></p>
    <p><b><?= $page->author(); ?>, <?= $page->title(); ?></b></p>
    <?= $page->main_content()->kt(); ?>
  </div>
</div>

<?php snippet('footer'); ?>
