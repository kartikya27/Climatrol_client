
        <!-- Main Content Section -->
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center">
                <h2 class="title"> Enquire Now </h2>
                <p class="description light"> </p>
            </div>
            <!-- Page Title -->
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href="index"> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> Enquiry </span>
                </div>
            </div>
            <!-- Breadcrumbs -->


            <div class="container">
                

                <section class="contact-form">
                    <div class="row form">
                        <div class="col-md-12">
                            <h2 class="title-2"> Send Your Enquiry </h2>
                            <form id="contact_form" class="form well-form" action="Home/sendEnquiry" method="post">
                                <!-- Text input-->
                                <div class="form-group">
                                    <input name="fullname" placeholder="Full Name" class="form-control" type="text" required title="Please enter your full name">
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
                                    <textarea class="form-control" name="msg" placeholder="Message" required data-rule-minlength="10" data-msg-minlength="Please enter atleast 10 characters" title="Please enter your message"></textarea>
                                </div>
                                <!-- Button -->
                                <button type="submit" class="btn btn-block btn-warning" id="js-contact-btn"> SEND MESSAGE </button>

                                <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>

                            </form>
                        </div>

                        
                    </div>

                </section>
            </div>
        </main>
        <!-- Main Content Section -->
