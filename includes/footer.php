<div id="contact" class="paddsection">
    <div class="container">
        <div class="contact-block1">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-contact">
                        <h2 class="mb-30">CONTACT</h2>

                        <ul class="contact-details">
                            <li><span>402 Glencairn Drive</span></li>
                            <li><span>Moncton, Canada, E1G 1Y4</span></li>
                            <li><span>(506) 875-8286</span></li>
                            <li><span>sonnguyenpham@gmail.com</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="./includes/sendEmail.php" method="POST" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Name is required" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6">
                                <div class="form-group contact-block1">
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Your Email" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                            </div> -->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="from_email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Subject is required" />
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for me ^^" placeholder="Message"></textarea>
                                    <div class="validate"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-defeault btn-send" value="Send message" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Section -->
</main>
<!-- End #main -->



</div>
<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/typed/typed.js"></script>
<script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>

</html>