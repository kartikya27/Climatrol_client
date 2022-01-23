
        <!-- Main Content Section -->
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center">
                <h2 class="title"> Contact us </h2>
                <p class="description light"> Holisticly brand sustainable solutions rather than clicks-and-mortar applications.
                    <br> Phosfluorescently whiteboard fully tested initiatives. </p>
            </div>
            <!-- Page Title -->
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href="index"> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> Contact </span>
                </div>
            </div>
            <!-- Breadcrumbs -->


            <div class="container">
                <section class="contact">
                    <div class="row contact-centers">
                        <div class="col-md-4">
                            <div class="contact-area-box">
                                <h4 class="contact-title subtitle">HEAD OFFICE</h4>
                                <div class="address">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p>108A Madangir,
<br>New Delhi-110062</p>
                                </div>
                              
                               
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="contact-area-box">
                                <h4 class="contact-title subtitle">CALL US</h4>
                                
                                <div class="phone">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p>SUPPORT: +91 9871869666<br>
OFFICE: +91 11 40775500</p>
                                </div>
                               
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="contact-area-box">
                                <h4 class="contact-title subtitle">EMAIL US</h4>
                                
                              
                                <div class="email">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p> <a href="mailto:info@climatrol.in"> info@climatrol.in<br>
support@climatrol.in </a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="contact-form">
                    <div class="row form">
                        <div class="col-md-6">
                            <h2 class="title-2"> Send us a message </h2>
                            <form id="contact_form" class="form well-form" action="php/contact.php" method="post">
                                <!-- Text input-->
                                <div class="form-group">
                                    <input name="name" placeholder="Full Name" class="form-control" type="text" required title="Please enter your full name">
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <input name="email" placeholder="Email Address" class="form-control" type="email" required title="Please enter your email address" data-msg-email="Ouch, that doesn't look like an email">
                                </div>

                                <!-- Phone Number-->
                                <div class="form-group">
                                    <input name="phone" placeholder="Phone Number" class="form-control" type="text" data-rule-phoneUS="false" title="Please enter your phone number" data-msg-phoneUS="Ouch, that doesn't look like a valid phone number" required>
                                </div>

                                <!-- Text area -->
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Message" required data-rule-minlength="10" data-msg-minlength="Please enter atleast 10 characters" title="Please enter your message"></textarea>
                                </div>
                                <!-- Button -->
                                <button type="submit" class="btn btn-block btn-warning" id="js-contact-btn"> SEND MESSAGE </button>

                                <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>

                            </form>
                        </div>

                        <div class="col-md-6 contact-map">
                            <h2 class="title-2"> View Map </h2>
                            <ul class="nav nav-pills" id="map-address">
                                <li class="active">
                                    <a href="#" data-latitude="37.7620375" data-longitude="-122.4369531" data-map-title="United States" data-map-zoom="11" data-toggle="tab">United States</a>
                                </li>
                                <li>
                                    <a href="#" data-latitude="51.4845012" data-longitude="-0.0941221" data-map-title="United Kingdom" data-map-zoom="16" data-toggle="tab">United Kingdom</a>
                                </li>
                                <li>
                                    <a href="#" data-latitude="-37.8111937" data-longitude="144.958988" data-map-title="Australia" data-map-zoom="5" data-toggle="tab">Australia</a>
                                </li>
                            </ul>

                            <!-- Google Map will load programatically inside this div. 
                                You may change the Default Latitude and Longitude here. For multiple locations, change above.  -->

                            <div id="google-map" class="google-map" data-latitude="37.7620375" data-longitude="-122.4369531" data-map-title="United States" data-map-zoom="11">
                            </div>

                        </div>
                    </div>

                </section>
            </div>
        </main>
        <!-- Main Content Section -->
