<section class="contact-area pt-120 pb-120">
    <div class="container">
    <div class="row">
        <div class="col-lg-6" id="enquire">
            <div class="col-lg-12">
                <div class="contact-wrapper-form pt-10 pb-70 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4 class="contact-title pb-10"><i class="lni-envelope">
                        </i> Leave <span>A Message.</span>
                    </h4>

                    <form id="contact-form" name="contact-form" action="components/submit.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-form mt-20">
                                    <label class="labelText">Company Name <span style="color: red;">*<span></label>
                                    <input class="textInput" type="text" name="cname" id="cname"
                                        placeholder="Enter your company name" required>
                                </div> <!-- contact-form -->
                            </div>

                            <div class="col-md-6">
                                <div class="contact-form mt-20">
                                    <label class="labelText">Full Name <span style="color: red;">*<span></label>
                                    <input class="textInput" type="text" name="name" id="name"
                                        placeholder="Enter your name" required>
                                </div> <!-- contact-form -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-form mt-20">
                                    <label class="labelText">Email <span style="color: red;">*<span></label>
                                    <input class="textInput" type="email" name="email" id="email"
                                        placeholder="Enter your email" required>
                                </div> <!-- contact-form -->
                            </div>

                            <div class="col-md-6">  
                                <div class="contact-form mt-20">
                                    <label class="labelText">Mobile Number <span style="color: red;">*<span></label>
                                    <div style="display: flex;">
                                        <input class="textInput" type="tel" name="number" id="number"
                                        placeholder="Enter Your Mobile Number" required>
                                    </div>
                                </div> <!-- contact-form -->
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-md-12">
                            <div class="contact-form mt-20">
                                <label class="labelText">Services <span style="color: red;">*<span></label>
                                <select id="multiple-checkboxes" name=service[] multiple="multiple" required>
                                    <option value="Graphic Services">Graphic </option>
                                    <option value="Marketing Services">Marketing Services</option>
                                    <option value="Development Services">Development Services</option>
                                    <option value="User Interface & Experience Services">User Interface & Experience Services</option>
                                    <option value="Management Services">Management Services</option>
                                    <option value="Optimizing Services">Optimizing Services</option>
                                </select>
                            </div> <!-- contact-form -->
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-md-12">
                            <div class="contact-form mt-20">
                                <label class="labelText">Message</label>
                                <textarea name="message" id="message" placeholder="Enter your message..."></textarea>
                            </div> <!-- contact-form -->
                        </div>
                        <p class="form-message"></p>
                        <div class="col-md-12">
                            <div class="contact-form mt-20">
                                <button id="submitBtn" name="Submit" class="main-btn" value="Submit">Submit</button>
                            </div> <!-- contact-form -->
                        </div>
                        </div>
                    </form>
                </div> <!-- row -->
                
            </div> <!-- contact wrapper form -->
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12 mt-50">
                    <div class="contact-map  wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.3s">
                        <iframe id="gmap_canvas"
                            src="https://maps.google.com/maps?&q=Pune&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-6 col-md-4">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.3s">
                            <div class="contact-info-icon">
                                <i class="lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">Bapushet Estate, Ganesh Nagar, Near Lokmanya Hospital Chinchwad Pune -
                                    411033.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.6s">
                            <div class="contact-info-icon">
                                <i class="lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <a class="link-without-underline" href="mailto:connect@growdigis.com">connect@growdigis.com	</a>
                            </div>
                        </div> <!-- single contact info -->
                        <div class="single-contact-info contact-color-3 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.9s">
                            <div class="contact-info-icon">
                                <i class="lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <a class="link-without-underline" href="tel:+(91)8248061976">+91 8248061976</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-4">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex  wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.9s">
                            <div class="contact-info-icon">
                                <i class="lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <a href="tel:+(91)8248061976">+91 8248061976</a>
                            </div>
                        </div>
                    </div> -->
                </div> <!-- row -->
            </div> <!-- contact info -->
        </div>
    </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->