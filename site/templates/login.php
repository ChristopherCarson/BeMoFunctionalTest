<?php snippet('header') ?>

<div class="login">
    <h1><?= $page->title()->html() ?></h1>
    <br /><br />
    <?php if($error): ?>
    <div class="alert"><?= $page->alert()->html() ?></div>
    <?php endif ?>
    <form method="post" action="<?= $page->url() ?>">
        <br /><br />
        <div>
            <label for="email"><?= $page->username()->html() ?></label>
            <input type="email" id="email" name="email" value="<?= esc(get('email')) ?>">
        </div>
        <div>
            <label for="password"><?= $page->password()->html() ?></label>
            <input type="password" id="password" name="password" value="<?= esc(get('password')) ?>">
        </div>
        <div>
            <input type="submit" name="login" value="<?= $page->button()->html() ?>">
        </div>
</div>
</form>

<?php snippet('footer') ?>