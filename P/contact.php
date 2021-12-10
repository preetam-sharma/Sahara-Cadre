<?php include("header.php") ?>
<main>
    <div class="slider-area hero-height2">
        <div class="slider-active">

        <div class="single-slider">
            <div class="slider-cap-wrapper">
            <div class="hero-caption">
                <h1 data-animation="fadeInUp" data-delay=".2s">Contact Us</h1>
                <p data-animation="fadeInUp" data-delay=".6s">Feel free to connect with us anytime, anywhere.</p>
            </div>
            <div class="hero-img hero-img2 position-relative">
                <img src="assets/img/hero/contact.png" alt="" data-animation="fadeInRight"
                data-transition-duration="5s">
            </div>
            </div>
        </div>
        </div>
    </div>
    
    <?php
        if(isset($_POST['send'])){
            echo '1';
            $from = "info@trutools.in";
            $to = "preetamsharma915@gmail.com";
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $email = $_POST['email'];
            $name = $_POST['name'];
            $headers = "From: Trutools <yadavsushant1992@gmail.com> \r\n";
	// 'Cc: info@trutools.in'. "\r\n" export@trutools.in;
            
            $updated_message = "Name : ".$name. ", Email: ".$email.", Message: ".$message;
            
            mail($to,$subject,$updated_message,$headers);
        }    
    ?>

    <section class="contact-section" id="get-in-touch">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" method="post"
                            id="contactForm" novalidate>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30"
                                            rows="9" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter Message'"
                                            placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                            placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" name="send" id="send" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Work At- Miller Ganj St No- 5-1/2 (141003), Ludhiana</h3>
                                <p>Office - LAXMI NAGAR B-5979/3 JASSIAN ROAD 141001</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>0161-4609013, 9041482859</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><a href="mailto:info@truetools.in">info@truetools.in</a>
                                </h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</main>

<?php include("footer.php") ?>