<?php snippet('header') ?>

<?php if (!$kirby->user()) go('/login') ?>

<script>
$('#mainLink').addClass('current');
</script>

<div id="container">

    <?php if($image = $page->image("cda-interview-guide.jpg")): ?>
    <img src="<?= $image->url() ?>" alt="">
    <?php endif ?>
    <div class="centered">CDA Interview Guide
        <hr />
    </div>


    <div class="homeText">
        <?= $page->text()->kt() ?>
    </div>


    <?php snippet('footer') ?>