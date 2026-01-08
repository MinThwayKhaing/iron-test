<?= $this->extend('layout/base') ?>

<?= $this->section('content') ?>

  <?= view('layout/nav') ?>
  <?= view('layout/hero_section') ?>
  <?= view('layout/product_overview') ?>
  <?= view('layout/product-benefits') ?>
  <?= view('layout/early-access-program') ?>
<?= $this->endSection() ?>
