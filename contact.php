<?php
$title = 'Contact — Triassic Technologies';
require_once 'inc/header.php';
?>

<div id="contact">
<section id="hero" class="align-items-center dark pb-100 pt-100">
    <div class="container h-75 pb-lg-250 pb-md-250 pb-sm-250 pt-lg-250 pt-md-250 pt-sm-100 ">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-12">
                <h1 class="mb-20">Get In Touch</h1>
                <p class="mb-0">Lets work together on the next big thing. Contact us through any of the provided channels below to get started.</p>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12">
            </div>
        </div>
        
    </div>
    <div class="bg-wrap">
        <div class="bg"></div>
    </div>
</section>

<section id="details" class="pt-100 pb-100 light hidden-md hidden-sm">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-4 col-sm-12 contact-details">
                <div class="row mb-50">
                    <div class="col-12">
                        <h3>South Africa</h3>
                        <p>9 Caroline Crescent, Randburg, Johannesburg, Gauteng 2194, South Africa.</p>
                        <p><strong>Telephone</strong><br>+27 87 568 7199 | +27 84 941 6082</p>
                        <p><strong>Email</strong><br>email@redpagesconsulting.com</p>
                    </div>
                </div>
                <div class="row mb-50">
                    <div class="col-12">
                        <h3>Nigeria</h3>
                        <p>Ground Floor, The Oakland Center Aguiyi Ironsi Way, Maitama. Abuja, Nigeria.</p>
                        <p><strong>Telephone</strong><br>+234 703 808 4549</p>
                    </div>
                </div>
                <div class="row mb-50">
                    <div class="col-12">
                        <h3>Social</h3>
                        <div>
                            <a class="pr-30" href="#"><img src="assets/images/icons/facebook.svg" height="15px" alt="Facebook"></a>
                            <a class="pr-30" href="#"><img src="assets/images/icons/twitter.svg" height="15px" alt="Twitter"></a>
                            <a class="pr-30" href="#"><img src="assets/images/icons/linkedin.svg" height="15px" alt="LinkedIn"></a>
                            <a class="pr-30" href="#"><img src="assets/images/icons/email.svg" height="15px" alt="Email"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12 pb-sm-50 pl-100">
                <div class="contactform ml-auto rounded shadow">
                    <div class="align-items-center col-12 contactform-top ml-0 mr-0 pl-0 pr-0 row support">
                        <div class="col-3 pl-50 pr-50">
                            <img src="assets/images/mail.svg" alt="" style="width: 60px;">
                        </div>
                        <div class="col-9 pl-0 pr-50">
                            <p class="pb-0">Write us a few words about your project and we’ll prepare a proposal for you within 24 hours.</p>
                        </div>
                    </div>
                    <div class="contactform-body padding-x3 pb-75 support">
                        <form action="contact.php" method="post" class="contact_form form-vertical dark text-left" id="contact-center-form-form">
                            <div class="form-group mb-20">
                                <input type="text" class="form-control spr-form-required" placeholder="Name / Company" name="name" size="10">
                            </div>
                            <div class="form-group mb-20">
                                <input type="email" class="spr-email-field form-control spr-form-required" placeholder="Email" name="email" size="10">
                            </div>
                            <div class="form-group mb-20">
                                <input type="text" class="form-control " placeholder="Phone Number" name="phone" size="10">
                            </div>
                            <div class="form-group mb-20">
                                <select class="form-control" name="">
                                    <option selected="">Type of Project</option>
                                    <option>Mobile App</option>
                                    <option>Website</option>
                                </select>
                            </div>
                            <div class="form-group mb-20">
                                <textarea class="form-control spr-form-required" placeholder="Your Message" rows="7" name="message" style="resize: none;"></textarea>
                            </div>
                            <button type="submit" data-loading-text="•••" data-complete-text="Completed!" data-reset-text="Try again later..." class="btn-block btn red-cta">Send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-wrap">
        <div class="bg"></div>
    </div>
</section>

<section id="details" class="pt-100 pb-100 light hidden-xl hidden-lg">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-8 col-sm-12 pb-sm-100">
                <div class="contactform ml-auto rounded shadow">
                    <div class="align-items-center col-12 contactform-top support pt-30 pb-30" style="height: auto;">
                        <div class="col-2 pr-0 pl-0 pb-20">
                            <img src="assets/images/mail.svg" alt="" style="width: 60px;">
                        </div>
                        <div class="col-12 pl-0 pr-0">
                            <p class="pb-0">Write us a few words about your project and we’ll prepare a proposal for you within 24 hours.</p>
                        </div>
                    </div>
                    <div class="contactform-body padding-x3 pb-75 support" style="padding-bottom: 75px;">
                        <form action="index.php" class="contact_form form-vertical dark text-left" id="contact-center-form-form">
                            <div class="form-group mb-20">
                                <input type="text" class="form-control spr-form-required" placeholder="Name / Company" name="name" size="10">
                            </div>
                            <div class="form-group mb-20">
                                <input type="email" class="spr-email-field form-control spr-form-required" placeholder="Email" name="email" size="10">
                            </div>
                            <div class="form-group mb-20">
                                <input type="text" class="form-control " placeholder="Phone Number" name="phone" size="10">
                            </div>
                            <div class="form-group mb-20">
                                <select class="form-control" name="">
                                    <option selected="">Type of Project</option>
                                    <option>Mobile App</option>
                                    <option>Website</option>
                                </select>
                            </div>
                            <div class="form-group mb-20">
                                <textarea class="form-control spr-form-required" placeholder="Your Message" rows="7" name="message" style="resize: none;"></textarea>
                            </div>
                            <button type="submit" data-loading-text="•••" data-complete-text="Completed!" data-reset-text="Try again later..." class="btn-block btn red-cta">Send message</button>
                        </form>
                    </div>
                </div>
            </div><div class="col-lg-4 col-sm-12">
                <div class="row mb-50">
                    <div class="col-12">
                        <h3>South Africa</h3>
                        <p>9 Caroline Crescent, Randburg, Johannesburg, Gauteng 2194, South Africa.</p>
                        <p><strong>Telephone</strong><br>+27 87 568 7199 | +27 84 941 6082</p>
                        <p><strong>Email</strong><br>email@redpagesconsulting.com</p>
                    </div>
                </div>
                <div class="row mb-50">
                    <div class="col-12">
                        <h3>Nigeria</h3>
                        <p>Ground Floor, The Oakland Center Aguiyi Ironsi Way, Maitama. Abuja, Nigeria.</p>
                        <p><strong>Telephone</strong><br>+234 703 808 4549</p>
                    </div>
                </div>
                <div class="row mb-50">
                    <div class="col-12">
                        <h3>Social</h3>
                        <div>
                            <a class="pr-30" href="#"><img src="assets/images/icons/facebook.svg" height="15px" alt="Facebook"></a>
                            <a class="pr-30" href="#"><img src="assets/images/icons/twitter.svg" height="15px" alt="Twitter"></a>
                            <a class="pr-30" href="#"><img src="assets/images/icons/linkedin.svg" height="15px" alt="LinkedIn"></a>
                            <a class="pr-30" href="#"><img src="assets/images/icons/email.svg" height="15px" alt="Email"></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="bg-wrap">
        <div class="bg"></div>
    </div>
</section>
</div>

<?php
require_once 'inc/footer.php';
?>