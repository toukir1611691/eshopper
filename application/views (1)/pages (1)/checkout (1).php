<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div><!--/breadcrums-->
        <div class="step-one">
            <h2 class="heading">Step1: Checkout Method</h2>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h4>Create New Customer</h4>
                <p>If you have shopped with us before, please enter details in the box below.</p>
                <!--            <div class="shopper-informations">-->
                <div class="shopper-info">
                    <form action="<?php echo base_url(); ?>customer-registration" method="post">
                        <input type="text" name="customer_name" placeholder="Customer Name"> 
                        <input type="mail" name="email_address" placeholder="Email Address">
                        <input type="password" name="password" placeholder="Password">
                        <input type="password" placeholder="Confirm password">
                        <input type="submit" name="registration_btn" class="btn btn-primary"  value="Register">
                    </form>
                </div>
            </div><!--/col-sm-6-->
            <div class="col-sm-6">
                <h4>Login To Your Account</h4>
                <div class="shopper-info">

                    <form class="form-horizontal" action="<?php echo base_url();?>customer-to-billing" method="post">
                        <input type="mail" name="email_address" placeholder="Email Address">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit" class="btn btn-primary">Login</button>
					</form>

                </div>
            </div>
        </div>
        <div class="step-one">
            <h2 class="heading"></h2>
<!--            <h2 class="heading">Step1: Checkout Method</h2>-->
        </div>
    </div>
</section> <!--/#cart_items-->