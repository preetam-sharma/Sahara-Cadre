<?php include 'head.php';?>
<?php include 'header.php';?>
<main class="site-main  woocommerce single single-product">
    <section>
        <div class="container">
            <div class="row just_center">
                <div class="col-md-8">
                    <div class="section-heading center-heading">
                    <h3>Registration</h3>
                </div>
                    <form method="post" class="woocommerce-form woocommerce-form-register register">
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label>Contact Number&nbsp;<span class="required">*</span></label>
                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="contact" id="" autocomplete="pcontact" value="" placeholder="Contact ">
                        </p>
                        <p class="woocommerce-FormRow form-row">
                            <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="b1c661ab82"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                            <button type="submit" class="woocommerce-Button button" name="register" value="Register">Register</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php';?>