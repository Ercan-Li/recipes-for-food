<?php snippet('header'); ?>
<?php snippet('menu'); ?>

<div class="content layout-wrapper__child">
  <div class="text">
    <?= $page->main_content()->kt(); ?>
    <br>
    <p>
      <b>Featured Recipes</b>
      <ul>
      <?php foreach($page->featured_recipes()->split() as $recipeName): ?>
        <?php $recipe = $site->find($recipeName); ?>
        <li><a href="<?= $recipe->url(); ?>"><?= $recipe->author(); ?>, <?= $recipe->title(); ?></a></li>
      <?php endforeach; ?>
    </ul>
    </p>
  </div>
</div>

<?php snippet('footer'); ?>
