<?php snippet('header') ?>
<?php if (!$kirby->user()) go('/login') ?>

<! –– place meta tags for page ––>
    <?php echo $page->MetaTags() ?>

    <! –– Create no-index tag ––>
        <?php 
        $noIndex = $page->noIndex();

        if ($noIndex == 'true') {
            echo "<meta name='robots' content='noindex'>";
        }
        ?>

        <?php snippet('facebook') ?>
        </head>

        <body>
            <?php snippet('navigation') ?>

            <! –– navigation menu jquery ––>
                <script>
                $('#mainLink').addClass('current');
                </script>

                <! –– main image and text container ––>
                    <?php if($image = $page->image("cda-interview-guide.jpg")): ?>
                    <div id="container">
                        <img src="<?= $image->url() ?>" alt="">
                        <span class="centered">CDA Interview Guide
                            <hr />
                        </span>
                        <?php endif ?>

                        <! –– load text ––>
                            <div class="homeText">
                                <?= $page->text()->kt() ?>
                            </div>


                            <?php snippet('footer') ?>