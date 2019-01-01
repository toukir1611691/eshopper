<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Shopping Cart</li>
			</ol>
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
						
				</tbody>
			</table>
		</div>
	</div>
</section> <!--/#cart_items-->

<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3>What would you like to do next?</h3>
			<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		</div>
		<div class="row">
			
			

			<div class="col-sm-12">
				<div class="total_area">
					<form action="<?php echo base_url();?>update-payment" method="post" >
					<ul>	
						<!-- <li>Cart Sub Total <span>BDT <?php echo $this->cart->total();?></span></li> -->
						<li>
						<label class="control-label" for="typeahead">Cart Sub Total</label>
						<span> BDT
						<input type="text" name="product_amount" value="<?php echo $this->cart->total();?>" readonly >
						</span>
						</li>
						<li>Vat(5%) <span>
									<?php
										$vat = ($this->cart->total()*5)/100;
										echo 'BDT '.$vat;
										?>
									</span>
						</li>
						<li>Shipping Cost <span>
										<?php 
											$shipping = 100;
											echo 'BDT '.$shipping;
										?>
										</span>
						</li>
						<li>Total <span>
									<?php
										$g_total = $this->cart->total() + $vat + $shipping;
										echo $g_total;
									?>
									</span>
						</li>
					</ul>
					</form>	
						<a class="btn btn-default check_out" href="<?php echo base_url();?>checkout">Check Out</a>
				</div>
			</div>
		</div>
	</div>
</section><!--/#do_action-->