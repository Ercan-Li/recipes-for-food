<?php snippet('header'); ?>
<?php snippet('menu'); ?>

<div class="content layout-wrapper__child">
  <div class="text">
    <?= $page->main_content()->kt(); ?>
    <br>
    <p>
      <b>Featured Recipes</b>
      <ul>
      <?php foreach($page->featured_recipes()->toPages() as $recipe): ?>
        <li><a href="<?= $recipe->url(); ?>"><?= $recipe->author(); ?>, <em><?= $recipe->title(); ?></em></a></li>
      <?php endforeach; ?>
    </ul>
    </p>
  </div>
</div>

<?php snippet('footer'); ?>
