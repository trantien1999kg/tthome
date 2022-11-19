$.fn.closePopup=(id)=>{

	$(id).remove();

}

$.fn.showPopup=(html)=>{

	$('body').append(html);

}

function loadCart() {

    $.ajax({

        url: _ROOT + 'carts.js',

        type: 'post',

        data: { src: 'loadCart' },

        dataType: 'json',

        success: function(data) {

        	if(data['count-cart']==0){

        		$.confirm({

				    title: lang.thong_bao,

				    content: lang.gio_hang_rong,

				    buttons: {

				    	success: {

		                    text: lang.xem_san_pham,

		                    btnClass: 'btn-blue',

		                    action: function(){

								redirect(data['url']);

		                    }

		                },

		                cancel: {   

		                    text: lang.huy_ngay,

		                    btnClass: 'btn-red'

		                }

				    }

				});

        	}else{

            	$(this).showPopup(data['html']);

            }

        }

    });

}

function funcAddCart(el){

	$.ajax({

		url:_ROOT+'carts.js',

		type:'post',

		data:$(el).serialize(),

		dataType:'json',

		success:function(data){

			$.confirm({

				title: lang.thong_bao,

				content: lang.cam_on_ban_da_mua,

                icon: 'fa fa-check-circle-o',

                theme: 'modern',

                closeIcon: true,

                animation: 'scale',

                type: 'green',

                buttons: {

                		success: {

		                    text: lang.xem_gio_hang,

		                    btnClass: 'btn-blue',

		                    action: function(){

								$(this).showPopup(data['html']);

		                    }

		                },

		                cancel: {   

		                    text: lang.thoat,

		                    btnClass: 'btn-red'

		                }

				    }

            });

		}

	});

}

function addCartPayMent(el) {

    $.ajax({

        url: _ROOT + 'carts.js',

        type: 'post',

        data: $(el).serialize(),

        dataType: 'json',

        success: function(data) {

            redirect(data['url']);

        }

    });

}

function upCart(el) {
	$.ajax({

        url: _ROOT + 'carts.js',

        type: 'post',

        data: $(el).serialize(),

        dataType: 'json',

        success: function(data) {

            _FRAMEWORK.showError("Thêm vào giỏ hàng thành công!","succes");

			$('.viewcart').html(data.total);

        }

    });
}

function upCart1(el) {
	$.ajax({

        url: _ROOT + 'carts.js',

        type: 'post',

        data: el,

        dataType: 'json',

        success: function(data) {

            _FRAMEWORK.showError("Thêm vào giỏ hàng thành công!","succes");

			$('.viewcart').html(data.total);

        }

    });
}

function funcUpdateCart(code, qty, pid, element) {

    var params = {

       	code:code,

        qty: qty,

        pid:pid,

        src:'updateCart'

    }

    $.ajax({

	   	url:_ROOT+'carts.js',

	   	type:'post',

	   	data:params,

	   	dataType:'json',

	   	beforeSend:function(){

	   		$('.popup-content').addClass('loading');

	   	},

	   	success:function(res){

	   		

	   		$('.viewcart').html(res['total']);

	   		$('.view-price').html(res['price-string']);

	   		$('#total-product').html(res['total-product']);

	   		$('.numb-cart').html(res['total-product']);

			$('.cart-price').html(res['price-string']);

	   		$('#total-price').html(res['price-string']);

	   		$('#js-price-temp').html(res['price-string']);

	   		$('#js-total-cart').html(res['price-string']);

			$('#itemprice'+pid).html(res['item-total']);

	   		// if(!isMobile){

	   		// 	$('.body-cart').html(res['html']);

	   		// }else{

	   		// 	$('.body-cart').html(res['html_m']);

	   		// }

	   	},

	   	complete:function(){

	   		$('.popup-content').removeClass('loading');

			element.prop("disabled",false);

	   	}

   });

}

function funcDeleteCart(code,src) {

    var params = {

       	code:code,

        src: src

    }

    $.ajax({

	   	url:_ROOT+'carts.js',

	   	type:'post',

	   	data:params,

	   	dataType:'json',

	   	beforeSend:function(){

	   		$('.popup-content').addClass('loading');

	   	},

	   	success:function(res){

	   		

	   		if(res['count-cart']==0){



	   			redirect(res['url']);



	   		}else{

	   			$('.viewcart').html(res['total-price']);

	   			$('.view-price').html(res['price-string']);

		   		$('#total-product').html(res['total-product']);

		   		$('.numb-cart').html(res['total-product']);

		   		$('#total-price').html(res['total-price']);

		   		$('#js-price-temp').html(res['price-string']);

		   		$('#js-total-cart').html(res['price-string']);

		   		$('.body-cart').html(res['html']);

		   	}

	   	},

	   	complete:function(){

	   		$('.popup-content').removeClass('loading');

	   	}

   });

}

"use strict"

if(typeof _CART ==='undefined'){

	var _CART={};

}

_CART.eventCart=()=>{



	$('.radio-item').click(function(){



		if(!$(this).next('.show-hover-box').hasClass('active')){



			$('.radio-item+.show-hover-box').removeClass('active');



			$('.radio-item+.show-hover-box').stop().slideUp();



			$(this).next('.show-hover-box').stop().slideDown();



		}else{



			$('.radio-item+.show-hover-box').stop().slideDown();



			$(this).next('.show-hover-box').stop().slideUp();



		}



	});



}

_CART.addCart=()=>{

	$('body').on('click','.btn-buyCart',function(e){

		e.preventDefault();

		var el=$(this).data('el');

		funcAddCart(el);

	});

	$('body').on('click','.btn-buynow',function(e){

		e.preventDefault();

		var el=$(this).data('el');

		addCartPayMent(el);

	});

	$('body').on('click','.js-addcart',function(e){

		e.preventDefault();

		var id = $(this).attr('data-id');
		var qty = $(this).attr('data-qty');

		$.post({

			url:'ajax/addCart.php',
 
			type:'post',
 
			data:{ 
				pid:id,
				quality:qty
			},
 
			dataType:'json',
 
			beforeSend:function(){
 
 
			},
 
			success:function(res){

				$('.viewcart').html(res['total']);
 
			},
 
			complete:function(){
 
				_FRAMEWORK.showError('Thêm vào giỏ hàng thành công !','success');
 
			}
 
		});
		

	});

	$('body').on('click','.btn-addcart',function(e){

		e.preventDefault();

		var el=$(this).data('el');

		upCart(el);

	});

}

_CART.updateCart=()=>{

}

_CART.deleteCart=()=>{

	if(exists('#deleteall')){

		$('body').on('click','#deleteall',function(){

			var code=$('.check-o input[type="checkbox"]:checked').map(function(){

				return this.value;

			}).get().join(',');

			if(code==''){

				$.confirm({

				    title: lang.thong_bao,

				    content: lang.chua_chon_san_pham,

				    buttons: {

		                cancel: {   

		                    text: lang.huy_ngay,

		                    btnClass: 'btn-red'

		                }

				    }

				});

			}else{

				$.confirm({

				    title: lang.xac_nhan,

				    content: lang.ban_co_chac_muon_xoa_muc_nay,

				    buttons: {

				       	success: {

		                    text: lang.dong_y,

		                    btnClass: 'btn-blue',

		                    action: function(){

		                    	funcDeleteCart(code,'deleteAll');

		                    }

		                },

		                cancel: {   

		                    text: lang.huy_ngay,

		                    btnClass: 'btn-red'

		                }

				    }

				});

			}

		});

	}

	if(exists('.delCart')){

		$('body').on('click','.delCart',function(){

			var code=$(this).data('code');

			$.confirm({

			    title: lang.xac_nhan,

			    content: lang.ban_muon_xoa_san_pham,

			    buttons: {

			       	success: {

	                    text: lang.dong_y,

	                    btnClass: 'btn-blue',

	                    action: function(){

	                       funcDeleteCart(code,'deleteCart');

	                    }

	                },

	                cancel: {   

	                    text:  lang.huy_ngay,

	                    btnClass: 'btn-red'

	                }

			    }

			});



		});

	}

}

_CART.popupCart=()=>{

	$('body').on('click','.checker.all input[type="checkbox"]',function(){

		if($(this).is(':checked')){

			$('.tbody .checker input.check--box').prop('checked',true);

		}else{

			$('.tbody .checker input.check--box').prop('checked',false);

		}

	});

	$('body').on('click','a.close',function(){

		$(this).closePopup('#popup');

	});

	$('body').on('click','.popupC-control .close',function(){

		$(this).closePopup('.popupC');

	});

	$('.view-cart-fixed[data-view-id]').click(function(){loadCart();});

}



_CART.validate=()=>{



	if(exists($('#form-checkout'))){

		$('#form-checkout').validate({

	        rules: {

	            'fullname': { required: true },

	            'email': { required: true,validateEmail: true,email: true },

	            'phone':{ required:true,validatePhone: true},

	            'id_city':{ required: true},

	            'id_dist':{ required: true},

	            'address':{ required: true}

	        },

	        messages: {

	            'fullname': { required: lang.chua_nhap_ho_ten },

	            'email': { 

	            	required: lang.chua_nhap_email,

	            	validateEmail:lang.email_sai_dinh_dang,

	            	email:lang.email_sai_dinh_dang

	            },

	            'phone':{ 

	            	required:lang.chua_nhap_dien_thoai,

	            	validatePhone:lang.dinh_dang_dien_thoai

	            },

	            'id_city':{ required: lang.chua_chon_tinh_thanh},

	            'id_dist':{ required: lang.chua_chon_quan_huyen},

	            'address':{ required: lang.chua_nhap_dia_chi}

	        },

	        submitHandler: function(form) {

	   

	            var thisForm = $(form);

	            if (thisForm.valid()) {

	                thisForm.submit();

	            }

	        }



	    });

	    $.validator.addMethod("validateEmail", function (value, element) {

            return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/i.test(value);

        }, lang.email_sai_dinh_dang);

        $.validator.addMethod("validatePhone", function (value, element) {

            return this.optional(element) || /^((09|03|07|08|05)+([0-9]{8}))+$/i.test(value);

        }, lang.dinh_dang_dien_thoai);

    }



}



$(document).ready(function(){

	_CART.addCart();

	_CART.updateCart();

	_CART.deleteCart();

	_CART.popupCart();

	_CART.validate();

	_CART.eventCart();

})