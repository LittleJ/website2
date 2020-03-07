<?= $this->extend('ci4-theme/layout') ?>

<?= $this->section('content') ?>

<!--
|--------------------------------------------------------------------------
| Recent Community Info
|--------------------------------------------------------------------------
 -->

<section>

  <div class="content">

    <div class="row">
      <div class="col-1-2">
        <h3><?= esc(lang('Home.recent')) ?></h3>
        <?= view_cell('\App\Libraries\Forums::news', 'limit=5') ?>
      </div>
      <div class="col-1-2">
        <h3><?= esc(lang('Home.threads')) ?></h3>
        <?= view_cell('\App\Libraries\Forums::posts', 'limit=5') ?>
      </div>
    </div>

  </div>

</section>

<!--
|--------------------------------------------------------------------------
| Big Links
|--------------------------------------------------------------------------
 -->

<section>

  <div class="content">

    <?php foreach($biglinks as $link) : ?>
      <span class="glyphicon glyphicon-<?= $link['icon'] ?>"></span>
      <a href="<?= esc($link['link'], 'attr') ?>"><?= esc($link['label']) ?></a>
      <?= $link['text'] ?>
      <br />
    <?php endforeach ?>

  </div>

</section>

<!--
|--------------------------------------------------------------------------
| Features
|--------------------------------------------------------------------------
 -->

<section>

  <div class="content">

    <h2><?= esc(lang('Home.why')) ?></h2>

    <div class="row">
        <div class="col-1-2">
            <?php foreach($features1 as $feature) : ?>
              <span class="glyphicon glyphicon-<?= $feature['icon'] ?>"></span>
              <h5><?= esc($feature['label']) ?></h5>
              <p><?= esc($feature['text']) ?></p>
            <?php endforeach ?>
        </div>
        <div class="col-1-2">
            <?php foreach($features2 as $feature) : ?>
                <span class="glyphicon glyphicon-<?= $feature['icon'] ?>"></span>
                <h5><?= esc($feature['label']) ?></h5>
                <p><?= esc($feature['text']) ?></p>
            <?php endforeach ?>
        </div>
    </div>

  </div>

</section>

<?= $this->endSection() ?>
