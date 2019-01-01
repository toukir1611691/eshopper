<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shipping</li>
            </ol>
        </div><!--/breadcrums-->
        <div class="step-one">
            <h2 class="heading">Step3: Shipping Method</h2>
        </div>
        <div class="shopper-informations">
            <div class="row">
                <div class="col-sm-12 clearfix">
                    <div class="bill-to">
                        <div class="form-one">
                            <form action="<?php echo base_url(); ?>save-shipping" method="post" name="shipping_form">
                                <input type="text" name="customer_name"placeholder="Customer Name">
                                <input type="email" name="email_address" placeholder="Email*">
                                <input type="text" name="mobile_number" placeholder="Mobile Number*">
                                <input type="text" name="customer_address" placeholder="Address *">
                                <input type="text" name="city" placeholder="City">
                                <input type="text" name="zip_code" placeholder="Zip / Postal Code *">
                                <select name="country">
                                    <option>--Select Country Name --</option>
                                    <option value="United_States">United States</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="UK">UK</option>
                                    <option value="India">India</option>
                                </select><br/><br/>
                                <input type="submit" name="btn" value="Save & Continue" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>				
            </div>
        </div>
    </div>
</section> <!--/#cart_items-->
<!-- <script>
    document.forms['billing_info'].elements['country'].value =<?php echo $customer_info->country ?>;
</script> -->