<?php snippet('header') ?>
<?php if (!$kirby->user()) go('/login') ?>

<script>
$('#contactLink').addClass('current');
</script>

<?php if($image = $page->image("contact-us.png")): ?>
<img src="<?= $image->url() ?>" alt="" width=100%>
<?php endif ?>
<div class="homeText">
    <?= $page->text()->kt() ?>
</div>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.4.1/dist/email.min.js"></script>
    <script type="text/javascript">
        (function(){
           emailjs.init('YOUR_USER_ID');
        })();
    </script>
    <script type="text/javascript">
        window.onload = function() {
            document.getElementById('contact-form').addEventListener('submit', function(event) {
                event.preventDefault();
                // generate the contact number value
                this.contact_number.value = Math.random() * 100000 | 0;
                emailjs.sendForm('contact_service', 'contact_template', this);
            });
        }
    </script>

    <form id="contact-form">
        <input type="hidden" name="contact_number">
        <label>Name</label>
        <input type="text" name="user_name">
        <label>Email</label>
        <input type="email" name="user_email">
        <label>Message</label>
        <textarea name="message"></textarea>
        <input type="submit" value="Send">
    </form>





<?php snippet('footer') ?>