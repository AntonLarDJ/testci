<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

    <p>Домашняя страница</p>
    <?php if ($isLogin) : ?>
        <a href="<?=site_url('admin/')?>">Перейти в админку</a>
    <?php else : ?>
        <a href="<?=site_url('login')?>">Вход</a> <br>
        <a href="<?=site_url('registration')?>">Регистрация</a>
    <?php endif ?>
    <br><br>

<?= $this->endSection() ?>