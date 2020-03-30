<!doctype html>

<html lang="en">

<head>

<?php 
    // grab the google analytics id and facebook pixel id here
    $gaID = $site->GoogleAnalyticsID();
    $fpID = $site->FacebookPixelID();
?>
<! –– imports ––>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.4.1/dist/email.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Work+Sans:400,600" rel="stylesheet">
    <?= css("assets/css/index.css") ?>
    <script type="text/javascript">
    //get ids for Google and Facebook Pixel in Javascript here
    var gaID = "<?php echo $gaID ?>";
    var fpID = "<?php echo $fpID ?>";

    //Function for white bar fade in effect at top of page
    $(document).ready(function() {

        $('#titlelogo').css("background-color", "rgb(255, 255, 255, 0)");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 100) {
                $('#titlelogo').css("background-color", "rgb(255, 255, 255, .8)");
            } else if (scroll < 100) {
                $('#titlelogo').css("background-color", "rgb(255, 255, 255, 0)");
            }
        });

    });
    </script>

    <title>BeMo Functional Test </title>

<! –– place meta tags for page ––>
    <?php echo $page->MetaTags() ?>

<! –– Create no-index tag ––>
    <?php 
        $noIndex = $page->noIndex();

        if ($noIndex == 'true') {
            echo "<meta name='robots' content='noindex'>";
        }
    ?>

<! –– Insert Google Analytics and Facebook Pixel ––>
    <?php snippet('google') ?>
    <?php snippet('facebook') ?>
</head>

<body>
    <?php snippet('navigation') ?>