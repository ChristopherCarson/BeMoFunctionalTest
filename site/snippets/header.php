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
        //Start Section for Google Analytics
        var id = "<?php echo $id ?>";
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

        <!-- Facebook Pixel Code -->
        <script>
        var url = "https://www.facebook.com/tr?id="+fpID+"&ev=PageView&noscript=1";
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', fpID);
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                src=url /></noscript>
        <!-- End Facebook Pixel Code -->
</head>

<! –– top of page / header ––>
    <div id="wrapper">
        <div id="hwrap">
            <header class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
                <div id="headwrap">
                    <div id="titlelogo">
                        <div id="logo">
                            <?php if($image = $site->image('bemo-logo2.png')): ?>
                            <img src="<?= $image->url() ?>" alt="Site logo" width="167" height="100">
                            <?php endif ?>
                        </div>

                        <! –– navigation menu ––>
                            <div id="nwrap">
                                <nav>
                                    <ul class="navigation">
                                        <li id="mainLink"><a href="home" rel="self">Main</a></li>
                                        <li id="contactLink"><a href="contact" rel="self">Contact Us</a></li>
                                        <?php if ($user = $kirby->user()): ?>
                                        <li>
                                            <a href="<?= url('logout') ?>">Logout</a>
                                        </li>
                                        <?php endif ?>
                                    </ul>
                                </nav>
                            </div>

                    </div>
                </div>
            </header>

            <body>