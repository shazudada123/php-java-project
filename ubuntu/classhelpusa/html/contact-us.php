<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
	<meta name="description" content="">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
	
	<?php include('header.php') ?>
    
    <div id="contact-course-banner" class="container-fluid px-0">
        <div class="service-inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h1 class="banner-heading">Contact Us</h1>
                    </div>
                    <div class="col-md-6 col-lg-6">
                    </div>
                </div>    
            </div>
        </div>
    </div>
    

    <section class="pt-5 pb-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="web-title contact-us-title text-center">
                        <h2>HOW TO <span>GET IN TOUCH</span></h2>
                        <p class="contact-us-sub-text">You can request any information from Law Essay Pros professionals by filling out the form below.</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container">
            <div class="row justify-content-center contact_form">
                <div class="col-md-8 mt-5 mb-5">
                    <div class="form-area">
                        <div class="send-us">
                            <p>Send Us Message</p>
                        </div>
                        <div class="form-inner">
                            <form>
                                <div class="row">
                                    <!-- First Name -->
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="First Name*" value="" />
                                    </div>
                                    
                                    <!-- Last Name -->
                                    <div class="col-sm-12 col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Last Name*" value="" />
                                    </div>
                                </div>
                            
                                <!-- Email -->
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email*" name="name">
                                </div>
                            
                                <!-- Phone Number -->
                                <div class="form-group">
                                    <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number*" name="name">
                                </div>
                            
                                <!-- Message -->
                                <div class="form-group">
                                    <textarea id="" class="form-control" name="" rows="4" placeholder="Message..."></textarea>
                                </div>
                            
                                <!-- Submit Button -->
                                <div class="contact-form-inputs contact-us-form-inps">
                                    <button type="submit" class="form-submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 padding-left-side">
                    <div class="contact-us-right-section">
                        <div class="contact-us-inner-section">
                            <!-- <p class="contact-right-heading">Telephone</p>
                            <p class="contact-right-details">UK: (+44) 20 4519 3286</p> -->
                            <p class="contact-right-heading">Email:</p>
                            <p class="contact-right-details">info@classhelpusa.com</p>
                            <p class="contact-right-heading">Our office address is:</p>
                            <p class="contact-right-details">4461 Wayside Lane Richmond California</p>
                            <p class="contact-right-heading">Our phone support is available from:</p>
                            <p class="contact-right-details" style="margin-bottom: 0px;">Monday - Friday: 09:00 - 21:00 (GMT)</p>
                            <p class="contact-right-details">Saturday &amp; Sunday: 10:00 - 18:00 (GMT)</p>
                            <p class="contact-right-heading">Please note:</p>
                            <p class="contact-right-details">Even when our phone lines close for the evening, you can still place an order with us online or start a chat on our website with an agent. You can also initiate WhatsApp chat for personalized support 24/7. The consultant will help with the process of advice or asset ordering online.</p>
                            
                            <div class="text-left py-2">
								<a class="btn-primary place-on-button" style="margin-right: 15px;" href="https://www.lawessaypros.co.uk/order-now">PLACE AN ORDER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    
    
   <?php include('footer.php') ?>  
   
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
   
   <script>
   // -----Country Code Selection
    $("#mobile_code").intlTelInput({
    	initialCountry: "in",
    	separateDialCode: true,
    	// utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
    });
   </script>
   