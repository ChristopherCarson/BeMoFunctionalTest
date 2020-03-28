<?php snippet('header') ?>

<script>
 $('#mainLink').addClass('currentLink');
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