<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

<?php if (!empty($errors)) : ?>
    <ul>
        <?php foreach($errors as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>


<form action="" method="post" action="<?= site_url() ?>/registration">
    <input type="text" name="name" maxlength="50" value="<?= $oldRequest['name'] ?>"><br><br>
    <input type="text" name="email" maxlength="50" value="<?= $oldRequest['email'] ?>"><br><br>
    <input type="password" name="password" maxlength="50"><br><br>
    <input type="submit" value="Зарегистрироваться">
</form>
 <?= $this->endSection() ?>