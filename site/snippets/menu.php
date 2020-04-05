<div class="menu--mobile">
  <div class="menu__toggle">
    <a href="javascript:void(0);">Recipes</a>
  </div>
  <div class="menu--mobile__header">
    <a href="/"><b><?= $site->title(); ?></b></a>
  </div>
</div>
<div class="menu layout-wrapper__child">
  <div class="menu__header">
    <div class="menu__toggle">
      <a href="javascript:void(0);">Recipes</a>
    </div>
    <a href="/"><b><?= $site->title(); ?></b></a>
  </div>
  <ul class="menu__contents">
    <?php foreach ($site->index()->template('recipe')->listed() as $recipe): ?>
      <li class="menu__item">
        <?php if ($page->slug() == $recipe->slug()): ?>
          <a class="anchor" id="active"></a>
          <a class="menu__item__link active" href="<?= $recipe->url(); ?>#active">
        <?php else: ?>
          <a class="menu__item__link" href="<?= $recipe->url(); ?>#active">
        <?php endif; ?>
            <p><b><?= $recipe->title(); ?></b></p>
            <p><?= $recipe->author(); ?></p>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
  <div class="menu__footer">
    <ul class="menu__footer__contents">
      <?php foreach ($site->pages()->listed() as $additionalPage): ?>
        <li class="menu__footer__item"><a href="<?= $additionalPage->url(); ?>"><?= $additionalPage->title(); ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
