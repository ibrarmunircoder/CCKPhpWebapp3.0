    </main>
<?php 
$data5 = mysqli_query($conn,"select * from contact_details where id=1");
$data = mysqli_fetch_assoc($data5);
?>
    <footer class="footer-area pt-80">
        <div class="footer-widget">
            <div class="container">
                <div class="row justify-content-between footer-widget-wrapper pb-50">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="index.php" class="footer-logo">
							    <!-- <img src="assets/img/logo/logo-w.png" alt="Footer Logo"> -->
                                <h2 class="text-white mb-20"><?= $data['logo_heading']; ?></h2>
							</a>
                            <p class="mb-20">
                               <?= $data['short_heading']; ?>
                            </p>
                            
                            <ul class="footer-social">
                                <li><a href="<?= $data['facebook']; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?= $data['twitter']; ?>"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="<?= $data['linkedin']; ?>"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="request-a-quote.php">Request a Quote</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Services Links</h4>
                            <ul class="footer-list">
                                <li><a href="feasibility_study.php">EV Charging Feasibility Study</a></li>
                                <li><a href="project_management.php">EV Charging Project Management</a></li>
                                <li><a href="design_engineering.php">EV Charging Design and Engineering</a></li>
                                <li><a href="program_management.php">EV Charging Program Management</a></li>
                                <li><a href="charging_installation.php">DC Fast Charging Installation</a></li>
                                <li><a href="writing.php">EV Blog Writing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Contact Us</h4>
                            <ul class="footer-contact g-1">
                                <li><i class="far fa-map-marker"></i> <a href="#"><?= $data['address']; ?></a></li>
                                <li><i class="far fa-phone fa-rotate-90"></i> <a href="#"><?= $data['phone']; ?></a></li>
                                <li><i class="far fa-envelope"></i> <a href="#"><?= $data['email']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 align-self-center">
                        <p class="copyright-text text-center">
                            &copy; Copyright <span id="date"></span> <a href="https://jetwebsolution.in/"> JET WEB SOLUTION </a> - All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <a href="#" id="scroll-top"><i class="far fa-angle-double-up"></i></a>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>