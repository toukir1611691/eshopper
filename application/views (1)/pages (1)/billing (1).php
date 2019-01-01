<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Billing</li>
            </ol>
        </div><!--/breadcrums-->
        <div class="step-one">
            <h2 class="heading">Step2: Billing Method</h2>
        </div>
        <div class="shopper-informations">
            <div class="row">
                <div class="col-sm-12 clearfix">
                    <div class="bill-to">
                        <div class="form-one">
                            <form action="<?php base_url(); ?>update-billing" method="post" name="billing_form">
                                <input type="text" name="customer_name" value="<?php echo $customer_info->customer_name ?>" placeholder="Customer Name">
                                <input type="hidden" name="customer_id" value="<?php echo $customer_info->customer_id ?>">
                                <input type="email" name="email_address" value="<?php echo $customer_info->email_address ?>" placeholder="Email">
                                <input type="text" name="mobile_number" value="<?php echo $customer_info->mobile_number ?>" placeholder="Mobile Number">
                                <input type="text" name="address" value="<?php echo $customer_info->address ?>"  placeholder="Address">
                                <input type="text" name="city" value="<?php echo $customer_info->city ?>" placeholder="City">
                                <input type="text" name="zip_code" value="<?php echo $customer_info->zip_code ?>" placeholder="Zip Code">
                                <select name="country" value="<?php echo $customer_info->country ?>" >
                                    <option>--Select Country Name --</option>
                                    <option value="United_States">United States</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="UK">UK</option>
                                    <option value="India">India</option>
                                </select>
                                <input type="checkbox" name="shipping_status"> <span>Shipping same as Billing</span>
                                <input type="submit" class="btn btn-primary" value="Save & Continue">
                            </form>
                        </div>
                    </div>
                </div>				
            </div>
        </div>
    </div>
</section> <!--/#cart_items-->
<script>
    document.forms['billing_form'].elements['country'].value =<?php echo $customer_info->country; ?>;
</script>