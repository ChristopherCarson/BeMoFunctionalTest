<!doctype html>

<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
    $(document).ready(function() {

        $('#titlelogo').css("background-color", "rgb(255, 255, 255, 0)");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll > 100) {
                $('#titlelogo').css("background-color", "rgb(255, 255, 255, .8)");
            } else if (scroll < 100) {
                $('#titlelogo').css("background-color", "rgb(255, 255, 255, 0)");
            }
            position = scroll;
        });

    });
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description"
        content="FREE Ultimate Guide to CDA Interviews: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Structured Interview. " />

    <title>BeMo Functional Test </title>

    <?= css("assets/css/index.css") ?>
</head>

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


                    <div id="nwrap">
                        <nav>
                            <ul class="navigation">
                                <li id="mainLink"><a  href="home" rel="self">Main</a></li>
                                <li id="contactLink"><a  href="contact" rel="self">Contact Us</a></li>
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