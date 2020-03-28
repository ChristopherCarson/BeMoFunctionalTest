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
        <script type="text/javascript">
        //get ids for Google and Facebook Pixel in Javascript here
        var gaID = "<?php echo $gaID ?>";
        var fpID = "<?php echo $fpID ?>";
        //Start Section for Google Analytics
        var script = document.createElement('script');
        script.src = "https://www.googletagmanager.com/gtag/js?id=" + gaID;
        document.getElementsByTagName('script')[0].parentNode.appendChild(script);

        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', gaID);

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

            <?= css("assets/css/index.css") ?>