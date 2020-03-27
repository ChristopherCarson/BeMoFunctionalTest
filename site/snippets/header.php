<!doctype html>

<html lang="en">

<head>

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
                                <li><a href="home" rel="self" id="current">Main</a></li>
                                <li><a href="contact" rel="self">Contact Us</a></li>
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