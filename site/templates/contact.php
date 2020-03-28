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

<?php $email = $site->ContactFormEmail() ?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.4.1/dist/email.min.js"></script>
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
        this.contact_number.value = Math.random() * 100000 | 0;
        this.to_email.value = email
        emailjs.sendForm('default_service', 'template_lCLMKCYL', this)
            .then(() => {
                $('#contact-message').append("<p>Email Successfully sent!</p>");
            })
            .catch((e) => {
                $('#contact-message').append("<p>Email Not Sent. Something went WRONG!</p>");
                console.log("error", e)
            });
    });
}
</script>

<div class="formDiv">
<h3 id="contact-message"></h3>
    <form id="contact-form">
        <input type="hidden" name="contact_number">
        <input type="hidden" name="to_email">
        <label>Name</label>
        <input class="contact" type="text" name="from_name">
        <br/><br/>
        <label>Email</label>
        <input class="contact" type="email" name="reply_to">
        <br/><br/>
        <label>Message</label>
        <textarea class="contact" name="message"></textarea>
        <br/><br/>
        <input class="contactButton" type="submit" value="Send">
        <br/><br/>
    </form>
</div>

<?php snippet('footer') ?>