
        <!-- Footer Section -->
        <footer>
            <div class="footer">
                <div class="container">
                    <!-- Prefooter Section -->
                    <div class="row pre-footer">
                        <div class="col-md-4">
                            <div class="contact-box">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="contact-details">
                                    <h4 class="pre-footer-title">HEAD OFFICE</h4>
                                    <p>Climatrol Corporation<br> 108A Madangir, <br>New Delhi - 110062 </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-box">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div class="contact-details">
                                    <h4 class="pre-footer-title">CALL US</h4>
                                    <p>Office&nbsp;&nbsp;&nbsp;&nbsp; : +91 11 40775500
                                        <br style="display:block !important">Support : +91 9818881544 <br>
                                        Whatsapp :- +91 9871869666
                                        </p>
                                </div>
                            </div>
                        </div> 

                        <div class="col-md-4">
                            <div class="contact-box">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <div class="contact-details">
                                    <h4 class="pre-footer-title">EMAIL US</h4>
                                    <p>info@climatrol.in<br>salesupport@climatrol.in
                                    <br><br>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Prefooter Section -->

                    <!-- Footer widgets -->
                    <div class="row widgets">
                        <div class="col-md-4 col-sm-6">
                            <div class="about-txt widget">
                                <img width="50%" src="images/img/climatrol_logo_w.png" alt="logo" />

                                <p style="text-align:justify;">We have more than 1500 units running successfully at our esteemed customer’s sites. We provide after sales service, warranty, support including installation, testing and commissioning.</p>

                                <div class="widgets-social">
                                    <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                                    <!--<a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>-->
                                    <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="quick-links widget">
                                <h2 class="widget-title">QUICK LINKS</h2>
                                <ul>
                                    <li> <a href="about?section=about"> About Us </a> </li>
                                    <li> <a href="service"> Service Infrastructure </a> </li>
                                    <li> <a href="enquiry">Enquiry </a> </li>
                                     <li> <a href="careers">Career </a> </li>
                                    <li> <a href="contact"> Contact </a> </li>
                                  
                                </ul>
                            </div>
                        </div>

                        <div class="spacer-50 visible-sm"></div>

                        <div class="col-md-3 col-sm-6">
                            <div class="our-services widget">
                                <h2 class="widget-title">OUR PRODUCTS</h2>
                                <ul>
                                    <li> <a href="product_details?product=Water Cooler"> Water Cooler </a> </li>
                                <li> <a href="product_details?product=Purifier RO and UV"> Water Cooler With UV & RO </a> </li>
                                <li> <a href="product_details?product=Cold Rooms"> Cold Rooms</a> </li>
                               
                                <li> <a href="product_details?product=Deep Freezers"> Deep Freezer </a> </li>
                                 
                                <li> <a href="product_details?product=Mortuary"> Mortuary Cabinet</a> </li>
                                 <li> <a href="product_details?product=Boxcold"> Boxcold (Italy)</a> </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="newsletter widget">
                                <h2 class="widget-title">Newsletter</h2>
                                <p>Subscribe to our newsletters to receive latest news and updates.</p>
                                <!-- ============= Mailchimp Subscribe Form ============= -->

                                <form action="<?php echo base_url() ?>Home/newsletter" id="subscribeform" method="post">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" title="Please enter your email" data-msg-email="Please enter a valid email">
                                    </div>
                                    <button type="submit" class="btn btn-block" > Subscribe Now! </button>
                                    <p>
                                    <?php $msg = $this->session->flashdata('msg');
	                                    if ($msg != ''){
	                                            echo  '<span style="color:green">'.$msg.'</span>';
	                                                    }
	                                ?></p>
                                    <!--<div id="js-subscribe-result" data-success-msg="Done. Subscribed" data-error-msg="Oops. Error!"></div>-->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Footer widgets -->
                </div>
            </div>
            <!-- Copyright -->
            <div class="copyright" style="padding:0;">
                <div class="container">
                    <div class="row copyright-bar">
                        <div class="col-md-5" style="padding: 20px 0;">
                            <p>Copyright © 2016 Climatrol Industries. All rights reserved.</p>
                            </div>
                            <div class="col-md-3" style="padding: 5px 0;">
                                <span class="helper">
                            <img src="<?php echo base_url();?>images/111.png">
                            </span>
                            </div>
                        
                        <div class="col-md-4 text-right" style="padding: 20px 0;">
                            <p> <a href="#"> Terms of use</a> <a href="#">Privacy Policy</a> <span> </p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer Section -->

        <!-- back-to-top link -->
        <a href="#0" class="cd-top"> Top </a>

   
    
    
    
    
 </div>
    <!-- Page Wrapper
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <div id="enquiryPop" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Send Your Enquiry </h4>
      </div>
      <div class="modal-body">
       <div class="container">
                

                <section class="contact-form">
                    <div class="row form">
                        <div class="col-md-12">
                           
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
                                
                                
                                  <div class="form-group" required>
                                    <select class="form-control" style="padding: 12px;" name='subject'>
                                          <option class="form-control" value=" ">Select Product</option>
                                        <option class="form-control" value="Water Cooler">Water Cooler</option>
                                        <option value="Water Cooler With UV & RO">Water Cooler With UV & RO </option>
                                        <option value="Deep Freeze">Deep Freeze</option>
                                        <option value="Cold Room">Cold Room</option>
                                        <option value="Mortuary">Mortuary</option>
                                         <option value="Others">Others</option>
                                    </select>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
<!---------------Service Enquiry------------->
 <div id="servicePop" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Send Your Enquiry For Service </h4>
      </div>
      <div class="modal-body">
       <div class="container">
                

                <section class="contact-form">
                    <div class="row form">
                        <div class="col-md-12">
                           
                            <form id="contact_form" class="form well-form" action="Home/sendServiceEnq" method="post">
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
                                
                                
                                  <div class="form-group" required>
                                    <select class="form-control" style="padding: 12px;" name='subject'>
                                         <option class="form-control" value="">Select Product</option>
                                        <option value="Water Cooler">Water Cooler</option>
                                        <option value="Water Cooler With UV & RO">Water Cooler With UV & RO</option>
                                        <option value="Deep Freeze">Deep Freeze</option>
                                        <option value="Cold Room">Cold Room</option>
                                        <option value="Mortuary">Mortuary</option>
                                         <option value="Others">Others</option>
                                    </select>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 


<!--------Upload resumme---------->
 <div id="careerUpload" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Send Your Resume </h4>
      </div>
      <div class="modal-body">
       <div class="container">
                

                <section class="contact-form">
                    <div class="row form">
                        <div class="col-md-12">
                           
                            <form id="contact_form" class="form well-form" action="careerUpload" method="post" enctype='multipart/form-data'>
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
                                
                                
                                  <div class="form-group" required>
                                    <select class="form-control" style="padding: 12px;" name="job_title">
                                        <option class="form-control">Select  Post...</option>
                                        <option>Marketing &amp; Sales</option>
                                        <option>Information Technology</option>
                                        <option>Production Engineering</option>
                                        
                                    </select>
                                </div>
                                

                                <!-- Text area -->
                                <div class="form-group">
                                   <input type="file" name="resume_file" class="form-control" required>
                                    <span style="color:red;font-size:12px;margin-top:1rem;"><sup>*</sup>Upload resume in pdf format</span>
                                </div>
                               
                                <!-- Button -->
                                <button type="submit" class="btn btn-block btn-warning" id="js-contact-btn"> SEND MESSAGE </button>

                             

                            </form>
                        </div>

                        
                    </div>

                </section>
            </div>
      </div>
     
    </div>

  </div>
</div> 
<!--------Upload resumme---------->
    <!-- Javascripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Jquery Library -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jQuery Flex Slider -->
    <script src="js/jquery.flexslider-min.js"></script>

    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- Counter JS -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>

    <!-- Back to top -->
    <script src="js/back-to-top.js"></script>

    <!-- Form Validation -->
    <script src="js/validate.js"></script>

    <!-- Subscribe Form JS -->
    <script src="js/subscribe.js"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>

</body>

</html>
