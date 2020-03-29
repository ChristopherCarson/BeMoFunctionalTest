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
                $('#contactLink').addClass('current');
                $('#contactLinkM').addClass('current');
                </script>

                <! –– load iamge and text for page ––>
                    <?php if($image = $page->image("contact-us.png")): ?>
                    <img src="<?= $image->url() ?>" alt="" width=100%>
                    <?php endif ?>
                    <div class="homeText">
                        <?= $page->text()->kt() ?>
                    </div>

                    <! –– begin contact form ––>
                        <?php $email = $site->ContactFormEmail() ?>
                        <script type="text/javascript"
                            src="https://cdn.jsdelivr.net/npm/emailjs-com@2.4.1/dist/email.min.js">
                        </script>
                        <script type="text/javascript">
                        var email = "<?php echo $email ?>";

                        (function() {
                            emailjs.init('user_iNLf3EzcnOpYBuz2jXsPr');
                        })();
                        </script>
                        <script type="text/javascript">
                        window.onload = function() {
                            document.getElementById('contact-form').addEventListener('submit', function(event) {
                                event.preventDefault();

                                // if the required fiels are not present, alert user - do not sent form
                                if (this.from_name.value !== "" && this.reply_to.value !== "" && this
                                    .message
                                    .value !== "") {
                                    this.contact_number.value = Math.random() * 100000 | 0;
                                    this.to_email.value = email
                                    emailjs.sendForm('default_service', 'template_lCLMKCYL', this)
                                        .then(() => {
                                            $('#contact-message').text("Email Successfully sent!");
                                        })
                                        .catch((e) => {
                                            $('#contact-message').text(
                                                "Email Not Sent. Something went WRONG!");
                                            console.log("error", e)
                                        });
                                } else {
                                    $('#contact-message').text("All requried fields must be filled out.");
                                }
                            });
                        }
                        </script>

                        <! –– form itself ––>
                            <div class="formDiv">
                                <h3 id="contact-message"></h3>
                                <form id="contact-form">
                                    <input type="hidden" name="contact_number">
                                    <input type="hidden" name="to_email">
                                    <label>Name*</label><br />
                                    <input class="form-input-field" type="text" name="from_name">
                                    <br /><br />
                                    <label>Email*</label><br />
                                    <input class="form-input-field" type="email" name="reply_to">
                                    <br /><br />
                                    <label>Message*</label><br />
                                    <textarea class="form-input-field" name="message"></textarea>
                                    <br /><br />
                                    <input class="form-input-button" type="submit" value="Send">
                                    <br /><br />
                                </form>
                            </div>

                            <?php snippet('footer') ?>