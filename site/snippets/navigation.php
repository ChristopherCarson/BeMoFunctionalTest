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
                            <! –– Mpbile navigation menu ––>
                                <nav role="navigation">
                                    <div id="menuToggle">
                                        <input type="checkbox" />
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <ul id="menu">
                                            <li id="mainLinkM"><a href="home" rel="self">
                                                    <h1 style="font-size:40px;">Heading</h1>
                                                </a></li><br />
                                            <li id="contactLinkM"><a href="contact" rel="self">
                                                    <h1 style="font-size:40px;">Contact Us</h1>
                                                </a></li><br />
                                            <?php if ($user = $kirby->user()): ?>
                                            <li>
                                                <a href="<?= url('logout') ?>">
                                                    <h1 style="font-size:40px;">Logout</h1>
                                                </a>
                                            </li>
                                            <?php endif ?>

                                        </ul>
                                    </div>
                                </nav>
                    </div>
                </div>
            </header>