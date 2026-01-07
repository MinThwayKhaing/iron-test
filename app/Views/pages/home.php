<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>

  <?= view('layout/nav') ?>
  <?= view('layout/hero_section') ?>
  <?= view('layout/product_overview') ?>
<?= $this->endSection() ?>
