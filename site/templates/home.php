<?php snippet('header') ?>
<?php if (!$kirby->user()) go('/login') ?>

<! –– place meta tags for page ––>
    <?php echo $page->MetaTags() ?>

    <?php snippet('facebook') ?>
    </head>

    <body>
        <?php snippet('navigation') ?>

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