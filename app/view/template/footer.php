<footer id="footer">
    <div class="footer_container">
        <div class="flex">
            <div class="logo_container">
                <img src="./public/images/common/footer_logo.png" alt="logo">
            </div>
            <div class="info_container">
                <div class="info">
                    <div>
                        <p class="phone">346-757-0078</p>
                        <a class="email" href="mailto:info@aceofclubssportslounge.com">info@aceofclubssportslounge.com</a>
                    </div>
                    <div>
                        <p class=" address"> 3230 S. Main St. Stafford, Texas 77477</p>
                            <div class="social-icons">
                                <img src="./public/images/common/fb.png" alt="fb">
                                <img src="./public/images/common/ig.png" alt="ig">
                                <img src="./public/images/common/yt.png" alt="yt">
                                <img src="./public/images/common/twet.png" alt="twet">
                                <img src="./public/images/common/gogel.png" alt="gogel">
                            </div>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li <?php $this->helpers->isActiveMenu("home"); ?> class="active-menu"><a href="home#content">HOME</a>
                        </li>
                        <li <?php $this->helpers->isActiveMenu("menu"); ?>><a href="menu#content">MENU</a></li>
                        <li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="reviews#content">REVIEWS</a></li>
                        <li <?php $this->helpers->isActiveMenu("about"); ?>><a href="about#content">ABOUT US</a></li>
                        <li <?php $this->helpers->isActiveMenu("events"); ?>><a href="events#content">EVENTS</a></li>
                        <li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="contact#content">CONTACT US</a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright"> ©
                    <?php echo date("Y"); ?> Ace of Clubs Sports Lounge. All Rights Reserved
                </p>
            </div>
            <div class="text_container">
                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
            </div>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if ($this->siteInfo['cookie']): ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if (in_array($view, ["home", "contact"])): ?>
    <textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
    <script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
    <script>
        var captchaCallBack = function () {
            $('.g-recaptcha').each(function (index, el) {
                var recaptcha = grecaptcha.render(el, {
                    'sitekey': '<?php $this->info("site_key"); ?>'
                });
                $('.destroy-on-load').remove();
            })
        };


        $('.consentBox').click(function () {
            if ($(this).is(':checked')) {
                if ($('.termsBox').length) {
                    if ($('.termsBox').is(':checked')) {
                        $('.ctcBtn').removeAttr('disabled');
                    }
                } else {
                    $('.ctcBtn').removeAttr('disabled');
                }
            } else {
                $('.ctcBtn').attr('disabled', true);
            }
        });

        $('.termsBox').click(function () {
            if ($(this).is(':checked')) {
                if ($('.consentBox').is(':checked')) {
                    $('.ctcBtn').removeAttr('disabled');
                }
            } else {
                $('.ctcBtn').attr('disabled', true);
            }
        });
    </script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
    <script src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
    <script src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
    <script>
        $('#gall1').pajinate({
            num_page_links_to_display: 3,
            items_per_page: 10
        });
        $('.fancy').fancybox({
            helpers: {
                title: {
                    type: 'over'
                }
            }
        });
    </script>
<?php endif; ?>

<a class="cta" href="tel:<?php $this->info("phone"); ?>"><span
        style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./public/scripts/slick.js"></script>
<script type="text/javascript" src="./public/scripts/custom.js"></script>
<?php $this->checkSuspensionFooter(); ?>
</body>

</html>