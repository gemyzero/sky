<?php

include('header.php');

?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0 wow fadeIn" data-wow-delay="0.1s" style="background-image: url(img/carousel-2.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container py-5">
                <h1 class="display-1 text-white animated slideInDown">Contact</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb text-uppercase mb-0">
                        <li class=""><a class="text-white mx-2" href="index.php">Home</a></li>  /
                                                <li class=""><a class="text-white mx-2" href="about.php">About</a></li>  /

                        <li class=""><a class="text-white mx-2" href="floor.php">Floor</a></li>  /
                        <li style="color: rgb(27, 27, 224);" class=" active mx-2" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Contact Us</h4>
                <h1 class="display-5 mb-4">If You Have Any Query, Please Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                            <i class="fa fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Address</p>
                            <h3 class="mb-0">123 Street, New York, USA</h3>
                        </div>
                    </div>
                    <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Call Us Now</p>
                            <h3 class="mb-0">+012 345 6789</h3>
                        </div>
                    </div>
                    <div class="bg-light d-flex align-items-center w-100 p-4 mb-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Mail Us Now</p>
                            <h3 class="mb-0"><a href="https://demo.htmlcodex.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e676068614e6b766f637e626b206d6163">[email&#160;protected]</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="contact-form wow fadeInUp" data-wow-delay="0.2s">
                        <div id="alertMessage"></div>
                        <form id="contactForm" novalidate="novalidate">
                            <div class="row gx-3">
                                <div class="col-md-6 control-group">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name">
                                        <label for="name">Your Name</label>
                                    </div>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-md-6 control-group">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email">
                                        <label for="email">Your Email</label>
                                    </div>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-12 control-group">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-12 control-group">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" required="required" data-validation-required-message="Please enter your message" style="height: 165px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" id="sendMessageButton">
                                        <span>Send Message</span>
                                        <div class="d-none spinner-border spinner-border-sm text-light ms-3" role="status"></div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Google Map Start -->
    <div class="container-xxl pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <iframe class="w-100 mb-n2" style="height: 450px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Google Map End -->




<?php
include('footer.php');

?>