<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Payment</li>
            </ol>
        </div><!--/breadcrums-->


        <div class="review-payment">
            <h2>Your Order</h2>
        </div>

        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $contents = $this->cart->contents();

                        foreach($contents as $value_contents) { 
					?>
                        <tr>
                            <td class="cart_product">
                                <a href=""><img height=50px, width=50px, src="<?php echo base_url().$value_contents['options']['image'];?>" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href=""><?php echo $value_contents['name'];?></a></h4>
                                
                            </td>
                            <td class="cart_price">
                                <p>BDT <?php echo $value_contents['price'];?></p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <form action="<?php echo base_url();?>update-product-cart-qty" method="post">
                                    <input class="cart_quantity_input" type="text" name="qty" value="<?php echo $value_contents['qty'];?>" autocomplete="off" size="2">
                                    <input type="hidden" name="rowid" value="<?php echo $value_contents['rowid'];?>">
                                    <input type="submit" name="btn" value="Update">
                                    </form>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">BDT <?php echo $value_contents['subtotal'];?></p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="<?php echo base_url();?>delete-from-cart/<?php echo $value_contents['rowid']; ?>"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
							
					<?php } ?>

                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Cart Sub Total</td>
                                    <td>
                                        BDT <?php echo $this->cart->total();?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vat(5%)</td>
                                    <td>
                                    <?php
										$vat = ($this->cart->total()*5)/100;
										echo 'BDT '.$vat;
									?>
                                    </td>
                                </tr>
                                <tr class="shipping-cost">
                                    <td>Shipping Cost</td>
                                    <td>
                                        <?php 
									    	$shipping = 100;
											echo 'BDT '.$shipping;
										?>
                                    </td>										
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>
                                        <?php
											$g_total = $this->cart->total() + $vat + $shipping;
											echo $g_total;
										?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="payment-options">
            <form action="<?php echo base_url();?>place-order" method="post">
                <span>
                    <label><input type="radio" name="payment_type" value="cash_on_delivery"> Cash On Delivery</label>
                </span>
                <span>
                    <label><input type="radio" name="payment_type" value="ssl_commerz" > Ssl Commerz</label>
                </span>
                <span>
                    <label><input type="radio" name="payment_type" value="paypal"> Paypal</label>
                </span>
                <p style="text-align:center">
                    <input type="submit" class="btn-btn-primary" value="Place Order">
                </p>
            </form>
        </div>
    </div>
</section> <!--/#cart_items-->