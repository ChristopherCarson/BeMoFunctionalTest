<?php snippet('header') ?>

<?php if (!$kirby->user()) go('/login') ?>
<?php echo $page->MetaTags() ?>

<! –– navigation menu jquery ––>
    <script>
    $('#mainLink').addClass('current');
    </script>

    <! –– main image and text container ––>
        <div id="container">
            <?php if($image = $page->image("cda-interview-guide.jpg")): ?>
            <img src="<?= $image->url() ?>" alt="">
            <?php endif ?>
            <div class="centered">CDA Interview Guide
                <hr />
            </div>

            <! –– load text ––>
                <div class="homeText">
                    <?= $page->text()->kt() ?>
                </div>


                <?php snippet('footer') ?>