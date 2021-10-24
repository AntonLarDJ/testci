<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <p>Добро пожаловать, <?= $userData['name'] ?></p>
    <a href="<?= site_url() ?>admin/logout">Выйти</a>
<?= $this->endSection() ?>