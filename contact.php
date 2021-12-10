<?php include 'head.php';?>
<?php include 'header.php';?>
<section class="page-header">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-8">
        <div class="title-block">
          <h1>Contact Us</h1>
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a href="index.php">Home</a>
            </li>
             <li class="list-inline-item">/</li>
            <li class="list-inline-item">
                Contact
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Map section start -->
<section class="map">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
                <div class="w-100">
                <div class="section-heading center-heading">
                    <h3>Corporate Office Location</h3>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d56245.424081578676!2d76.7891504216101!3d28.227388440178036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d28.2264585!2d76.7913552!4m5!1s0x390d37f20ae8a09b%3A0x7a0c0abcac992e5!2sHGF-37%2C%20Capital%20High%20Street%2C%20Phool%20Bagh%20Bhiwadi!3m2!1d28.2118269!2d76.86033479999999!5e0!3m2!1sen!2sin!4v1637239445061!5m2!1sen!2sin" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                
           </div>
       </div>
   </div>
</section>
<!-- Map section End -->

<!-- Contact section start -->
<section class="contact section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7 col-xl-7">
                <div class="section-heading center-heading">
                    <span class="subheading">contact</span>
                    <h3>For any query, please get in touch</h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="contact-item">
                            <p>Email Us</p>
                            <h4><a href="mailto: saharabhiwadi476@outlook.com" class="__cf_email__">saharabhiwadi476@outlook.com</a></h4>
                        </div>
                    </div>
                     <div class="col-lg-12 col-md-6">
                        <div class="contact-item">
                            <p>Make a Call</p>
                            <h4>+91 8852810720</h4>
                            <h4>+91 8053963268</h4>
                        </div>
                    </div>
                     <div class="col-lg-12 col-md-6">
                        <div class="contact-item">
                            <p>Corporate Office</p>
                            <h4>HGF-37, Capital High Street, Phool Bagh Bhiwadi</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="contact__form form-row " method="post" action="" id="contactForm">
                    <div class="row">
                       <div class="col-12">
                           <div class="alert alert-success contact__msg" style="display: none" role="alert">
                               Your message was sent successfully.
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="col-lg-6">
                           <div class="form-group">
                               <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                           </div>
                       </div>
                       
                       <div class="col-lg-6">
                           <div class="form-group">
                               <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                           </div>
                       </div>
                       <div class="col-lg-12">
                           <div class="form-group">
                               <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                           </div>
                       </div>
                       
                       <div class="col-lg-12">
                           <div class="form-group">
                               <textarea id="message" name="message" cols="30" rows="6" class="form-control" placeholder="Your Message"></textarea>    
                           </div>
                       </div>
                   </div>

                   <div class="col-lg-12">
                       <div class="mt-4 ">
                           <button class="btn btn-main" id="contact-form-submit-button" type="button">Send Message</button>
                       </div>
                   </div>
               </form> 
            </div>
        </div>
    </div>
</section>
<script>
    $("#contact-form-submit-button").on('click',function(){
        $.ajax({
            url: "mail.php",
            type: "POST",
            data: $('#contactForm').serialize(),
            dataType: "JSON",
            beforeSend:function(){
                $("#contact-form-submit-button").prop("disabled",true);
            },
            success: function (data)
            {
                if(data.status){
                    $("#contactForm")[0].reset();
                    alert("Message Sent Successfully.");
                }else{
                    alert("Something Error, Please try again.");
                }
                $("#contact-form-submit-button").prop("disabled",false);
                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                $("#contact-form-submit-button").prop("disabled",false);
                alert("Something Error, Please try again.");
            }
        }); 
    });
</script>
<?php include 'footer.php';?>