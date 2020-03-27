<?php snippet('header') ?>

<?php if($image = $page->image("contact-us.png")): ?>
    <img src="<?= $image->url() ?>" alt="" width=100%>
    <?php endif ?>
    <div class="homeText">
        <?= $page->text()->kt() ?>
    </div>
    
<?php snippet('footer') ?>