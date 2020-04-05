<div class="menu--mobile">
  <div class="menu__toggle">
    <a href="javascript:void(0);">Recipes</a>
  </div>
  <div class="menu--mobile__header">
    <a href="/"><?= $site->title(); ?></a>
  </div>
</div>
<div class="menu layout-wrapper__child">
  <div class="menu__header">
    <div class="menu__toggle">
      <a href="javascript:void(0);">Recipes</a>
    </div>
    <a href="/"><?= $site->title(); ?></a>
  </div>
  <ul class="menu__contents">
    <?php foreach ($site->index()->template('recipe')->listed() as $recipe): ?>
      <li class="menu__item">
        <?php
          $active = '';
          if ($page->slug() == $recipe->slug()) {
            $active = 'active';
          }
        ?>
        <a class="menu__item__link <?= $active; ?>" href="<?= $recipe->url(); ?>#active" id="<?= $active; ?>">
          <p><b><?= $recipe->title(); ?></b></p>
          <p><?= $recipe->author(); ?></p>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
  <ul class="menu__footer">
    <?php foreach ($site->pages()->listed() as $additionalPage): ?>
      <li class="menu__footer__item"><a href="<?= $additionalPage->url(); ?>"><?= $additionalPage->title(); ?></a></li>
    <?php endforeach; ?>
  </ul>
</div>
