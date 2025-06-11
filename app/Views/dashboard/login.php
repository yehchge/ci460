<?=$header?>

Login

<p>Hint: test@test.com / test</p>
<form action="<?=site_url('dashboard/login/submit') ?>" method="post">
    <?= csrf_field() ?>
    Email: <input type="text" name="email" />
    Password: <input type="password" name="password" />
    <input type="submit" />
</form>

<?=$footer?>