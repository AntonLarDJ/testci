<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

<?php if (isset($error)) : ?>
    <p><?= $error ?></p>
<?php endif ?>

<form action="" method="post" action="<?= site_url() ?>/login">
    <input type="text" name="email" id="" value="<?= $request['email'] ?>"><br><br>
    <input type="password" name="password" id=""><br><br>
    <input type="submit" value="Войти">
</form>

<?= $this->endSection() ?>