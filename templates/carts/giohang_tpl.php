<section class="carts pt10 pb20 bg-bray">

	<div class="container">

		<div class="row10 d-flex flex-wrap">

			<div class="item10 col-12 w-100-m mb20 mt20">

				<div class="wrap__paymentstep">

					<div class="row10 d-flex flex-wrap">

						<div class="item10 col-4 <?php if($com=='carts' && $_GET["src"]=='gio-hang'){echo "bg-step__active";}?> w-100-m">

							<a href="javascript:void(0)" class="wrap__paymentstep-links <?php if($com=='carts' && $_GET["src"]=='gio-hang'){echo "cl-white";}?>"><i class="fa-solid fa-cart-plus"></i> Giỏ hàng</a>

						</div>

						<div class="item10 col-4 <?php if($com=='carts' && $_GET["src"]=='thanh-toan'){echo "bg-step__active";}?> d-none-m">

							<a href="javascript:void(0)" class="wrap__paymentstep-links <?php if($com=='carts' && $_GET["src"]=='thanh-toan'){echo "cl-white";}?>"><i class="fa-solid fa-money-check"></i> Giao hàng thanh toán</a>

						</div>

						<div class="item10 col-4 d-none-m">

							<a href="javascript:void(0)" class="wrap__paymentstep-links"><i class="fa-solid fa-circle-check"></i> Hoàn tất</a>

						</div>

					</div>

				</div>

			</div>
			<div class="item10 col-9 w-100-m">
			<?php if($deviceType=='computer'){?>

				<?=$cart->getTemplateCart($lang)?>

			<?php }else{?>

				<?=$cart->getTemplateCart_m($lang)?>

			<?php }?>
			</div>
			<div class="item10 col-3 w-100-m">
				<div class="box-total-cart-price mt10 sticky-cart">
		            <div class="shadown--cart">
		                <ul class="prices__items">
		                    <li class="prices__item"><span class="prices__text">Tạm tính</span><span class="prices__value"><span id="js-price-temp"><?=$cart->numbMoney($cart->getTotalOrder(),' ₫')?></span></span>
		                    </li>
		                </ul>
		                <div class="prices__total">
		                    <span class="prices__text">Thành tiền</span>
		                    <span class="prices__value prices__value--final"><span id="js-total-cart"><?=$cart->numbMoney($cart->getTotalOrder(),' ₫')?></span><i>(Đã bao gồm VAT nếu có)</i>
		                    </span>
		                </div>
		            </div>
		            <a href="carts?src=thanh-toan" class="cart__submit cs--btn-cart t-uppercase checkout-test-submit">Thanh toán đơn hàng</a>
		        </div>
			</div>
		</div>
	</div>
</section>