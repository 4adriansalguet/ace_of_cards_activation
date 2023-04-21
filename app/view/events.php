<section id="about" class="inner-pages">
    <h1>EVENTS</h1>
    <p>Information Coming Soon</p>

</section>

<div class="contact_us">
    <h2>GET A QUOTE</h2>
    <h3>CONTACT US</h3>
    <p>Please fill out the form below and we will get back to you as soon as we can with a reply.
        Thank you.
    </p>
    <form action="sendContactForm" method="post" class="sends-email ctc-form">
        <!-- <label for="name" class="screen-reader-text">Name</label> -->
        <input type="text" class="form-control" name="name" id="name" placeholder="Name:">
        <input type="email" class="form-control" name="email" placeholder="Email:">
        <input type="number" class="form-control" name="phone" placeholder="Phone:">
        <textarea cols="30" rows="6" class="form-control" name="message" placeholder="Message / Questions:"></textarea>
        <label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>
        <div class="g-recaptcha"></div>
        <label>
            <input type="checkbox" name="consent" class="consentBox"> I hereby consent to having this website
            store my submitted information so that they can respond to my inquiry.
        </label><br>
        <?php if ($this->siteInfo['policy_link']): ?>
            <label>
                <input type="checkbox" name="termsConditions" class="termsBox" /> I hereby confirm that I have
                read and understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy
                    Policy.</a>
            </label>
        <?php endif ?>
        <div class="submit_btn">
            <button type="submit" class="contact_us_btn ctcBtn">Submit form</button>
        </div>
    </form>
</div>