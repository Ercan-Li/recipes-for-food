<?php snippet('header'); ?>
<?php snippet('menu'); ?>

<div class="content layout-wrapper__child">
  <div class="text width-constrained">
    <p id="print"><a href="#" onclick="print()">Print</a></p>
    <p><b><?= $page->author(); ?>, <?= $page->title(); ?></b></p>
    <?= $page->main_content()->kt(); ?>
  </div>
  <ul class="images width-constrained <?= ($page->recipe_images()->toFiles()->count() <= 1) ? 'single' : ''; ?>">
    <?php foreach($page->recipe_images()->toFiles() as $image): ?>
      <li class="images__image">
        <a href="<?= $image->url(); ?>" target="_blank">
          <img src="<?= $image->resize(800)->url(); ?>" loading="lazy">
        </a>
        <?php if ($image->caption()->isNotEmpty()): ?>
          <div class="images__image__caption">
            <?= $image->caption()->kt(); ?>
          </div>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>

<?php snippet('footer'); ?>
