"use strict";

_FRAMEWORK={

	init:function(){

		_FRAMEWORK.preLoader();

		_FRAMEWORK.carouselSlider();

		_FRAMEWORK.emailForm();

		_FRAMEWORK.danhgia();

		_FRAMEWORK.searchPage();

		_FRAMEWORK.submitContact();

		_FRAMEWORK.newsLetter();

		_FRAMEWORK.menuMobile();

		_FRAMEWORK.validateForm();

		_FRAMEWORK.tocList();

		// _FRAMEWORK.scrollTo();

		_FRAMEWORK.catology();

		_FRAMEWORK.ajaxMore();

		_FRAMEWORK.magicZoomplus();

		_FRAMEWORK.map();

		_FRAMEWORK.chaychu();

		_FRAMEWORK.active();
		if(BlockCopy){
			_FRAMEWORK.blockcopy();
			_FRAMEWORK.blockSite();
		}
		new WOW().init();

		// _FRAMEWORK.blockSite();

	},
	// mobiTool: function(){
    //     $('.js-mobi-tool').click(function(){
    //         var $this = $(this);
    //         var target = $this.data('target');
    //         var id = $this.attr('id');
    //         $('.js-mobi-tool').each(function(){
    //             if($(this).attr('id') != id & $(this).find('.mobi-tool-act').hasClass('active')){
    //                 var t = $(this).data('target');
    //                 $(this).find('.mobi-tool-act').removeClass('active');
    //                 $(t).removeClass('active');
    //             }
    //         })
    //         $this.find('.mobi-tool-act').toggleClass('active');
    //         $(target).toggleClass('active');
    //     });
    // },
	blockSite:function(){

		if(nonecopy==1){

			function clickIE() {

				if (document.all) {return false;}
	
			}
	
			function clickNS(e) {
	
				if (document.layers||(document.getElementById&&!document.all)) {
	
				if (e.which==2||e.which==3) {return false;}}
	
			}
	
			if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;document.onselectstart=clickIE}document.oncontextmenu=new Function("return false")
	
			function disableselect(e){
	
				return false
	
			}
	
			function reEnable(){
	
				return true
	
			}
	
			document.onselectstart=new Function ("return false")
	
			if (window.sidebar){
	
				document.onmousedown=disableselect
	
				document.onclick=reEnable
	
			}
	
			$(document).keydown(function(event){
	
				if(event.ctrlKey && event.shiftKey && event.keyCode==73)
	
				{        
	
					return false;
	
				}
	
				if (event.ctrlKey && event.shiftKey && event.keyCode == 74) {
	
					return false;
	
				}
	
				if (event.keyCode == 83 && (navigator.platform.match("Mac") ? event.metaKey : event.ctrlKey)) {
	
					return false;
	
				}
	
				// "U" key
	
				if (event.ctrlKey && event.keyCode == 85) {
	
					return false;
	
				}
	
				 if (event.keyCode == 123) {
	
					return false;
	
				}
	
			});
	
		}
   
	},
	blockcopy:()=>{	
		$('*').bind('cut copy paste contextmenu', function (e) {
			e.preventDefault();
		})
		var message="NoRightClicking"; function defeatIE() {if (document.all) {(message);return false;}} function defeatNS(e) {if (document.layers||(document.getElementById&&!document.all)) { if (e.which==2||e.which==3) {(message);return false;}}} if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;} else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;} document.oncontextmenu=new Function("return false") 

		function killCopy(e){
			return false;
		}
	
		function reEnable(){
				return true;
		}
	
		document.onselectstart=new Function ("return false");
	
		if (window.sidebar){
				document.onmousedown=killCopy;
				document.onclick=reEnable;
		}
	},
	toggle: (id) => {
		$(id).toggleClass('active');
	},

	lzload:function(){
		$(window).scroll(function(){
			var top = $(this).scrollTop();
			$('.lzload').each(function(){
				if(top > $(this).offset().top - 400){
					$(this).addClass('loaded');
				};
			});
		});
	},
	fixMenu:function() {

		var nav = $('.menu-sticky');

		var _height=$('.menu-sticky').height();

		var sidebar = $('.sidebar-sticky');

		var _height_side=Math.abs($('.sidebar-sticky').height());

		var _top_side=Math.abs($('.sidebar-sticky').offset().top);

		var nav_m = $('.menu-sticky[mobile]');

		var _height_m = $('.menu-sticky[mobile]').height();

		$(window).scroll(function() {

			if ($(this).scrollTop() > _height) {

				nav.addClass("sticky");

			} else {

				nav.removeClass("sticky");

			}

			if ($(this).scrollTop() > _top_side) {

				sidebar.addClass("sticky");

			} else {

				sidebar.removeClass("sticky");

			}

			if($(this).scrollTop() > _height_m) {

				nav_m.addClass("sticky");

			}else{

				nav_m.removeClass("sticky");

			}

		});

	},
	loadTab:(url,params,tab,overwrite = true)=>{
        $("#loader").addClass('active');
        $.post(url,params,(data,status)=>{
            if(status=='success'){
                if(overwrite){
                    $(tab).html(data);
                }else{
                    $(tab).append(data);
                }
                $("#loader").removeClass('active');
            }
        });
    },
	shadowMenu:function() {

		var nav = $('.shadow-sticky');

		var _height=$('.shadow-sticky').height();

		var nav_m = $('.shadow-sticky[data-mobile]');

		var _height_m = $('.shadow-sticky[data-mobile]').height();

		$(window).scroll(function(e) {

			if ($(e.target).scrollTop() > _height+30) {
				nav.addClass("box-shadow");
				nav.addClass("menu-change");
			} else {
				nav.removeClass("box-shadow");
				nav.removeClass("menu-change");
			}

			if($(e.target).scrollTop() > _height_m) {

				nav_m.addClass("box-shadow");
				

			}else{

				nav_m.removeClass("box-shadow");

			}

		});

	},

	submitFormCheckOut:function(){

        $('#checkout-modal__submit-form').click(function(){

            $("#form-checkout" ).submit();

        });

    },
	checkoutModal:function(){

			$(".js-checkout__tpl").click(function(){

				var name = $('.wrap-input__checkout-name').val();

				var email = $('.wrap-input__checkout-email').val();

				var phone = $('.wrap-input__checkout-phone').val();

				var city = $('.wrap-input__checkout-city').val();

				var dist = $('.wrap-input__checkout-dist').val();

				var address = $('.wrap-input__checkout-address').val();

				var content = $('.wrap-input__checkout-content').val();

				var payship = $('.wrap-input__checkout-payship').val();

				var payment = $('.wrap-input__checkout-payment').val();

				var total = $('.wrap-input__checkout-payment-total').val();

				if (isBlank(name)){

					_FRAMEWORK.showError('Tên không được bỏ trống!!!','error');

					$('.input wrap-input__checkout-name').focus();
	
					return false;
	
				} else if (isBlank(phone)) {

					_FRAMEWORK.showError('Số điện thoại không được bỏ trống!!!','error');
	
					$('.input wrap-input__checkout-phone').focus();
	
					return false;
	
				} else if (!validatePhone(phone)) {

					_FRAMEWORK.showError('Số điện thoại sai định dạng!!!','error');
	
					$('.input wrap-input__checkout-phone').focus();
	
					return false;
	
				}else if (isBlank(city)) {

					_FRAMEWORK.showError('Bạn chưa chọn tỉnh thành!!!','error');
	
					return false
	
				}else if (isBlank(dist)) {

					_FRAMEWORK.showError('Bạn chưa chọn quận huyện!!!','error');
	
					return false
	
				}else if (isBlank(address)) {

					_FRAMEWORK.showError('Địa chỉ không được bỏ trống!!!','error');
	
					return false
	
				}else{

				
				$.post("ajax/modal-checkout.php",{
					name:name,
					phone:phone,
					email:email,
					address:address,
					content:content,
					payship:payship,
					payment:payment,
					total:total
				},
				function(data,status){
					if(status == "success"){
						$("body").append(data);
						_FRAMEWORK.submitFormCheckOut();
						$(".close-modal").click(function(){
							$("#modal-contact").remove();
						})
					}
				});

				}
				
			});
		   
			$("body").click(".modal,.modal-container",function(event){   
				var modals = document.getElementById("modal-contact");   
				var container = document.getElementById("modal-container");
				if(event.target == modals || event.target == container){
					$("#modal-contact").remove();
				}
			})
	},
	pagingData:function(page, per_page, url, id_list,id_cat,type, id_km,tabs){
		$.post(
			"ajax_paging/"+url,
			{
				page: page,
				per_page: per_page, 
				id_list: id_list, 
				id_cat:id_cat,
				id_km:id_km,
				type: type,
			},function(data,status){
				if(status == "success"){
					$(tabs).html(data);

						$(tabs + ' .pagination li.active').click(function() {

						var pager = $(this).attr('p');

						_FRAMEWORK.pagingData(pager, per_page, url, id_list,id_cat,type,id_km, tabs);

						goToByScroll(tabs);

					});
				}
			}
		);
	},
	active:()=>{
		$(".js-cat").click(function(){
			var $this = $(this);
			var targetid = $this.attr("data-target");
			var idlist = $this.attr("data-list");
			var idcat = $this.attr("data-cat");
			var idkm = $this.attr("data-km");
			var type = $this.attr("data-type");
			 $(".js-cat[data-target='" + targetid + "']").removeClass("active");
			// $this.addClass("active-cat");
			_FRAMEWORK.pagingData(1,PAGE_INDEX,"ajax_paging.php",idlist,idcat,type,idkm,targetid);
		});
	},
	cartShoppingDetail:() => {
		$('.js-color').click(function(){
            var target = $(this).data('target');
            var value = $(this).data('value');
            var size=$('.js-size.active').data('value');
            $('.js-color').removeClass('active');
            $(this).addClass('active');
            $(target).val(value);
        });
        $('.js-size').click(function(){
            var target = $(this).data('target');
            var value = $(this).data('value');
            var color=$('.js-color.active').data('value');
			var type = $(this).attr('data-type');
            $('.js-size').removeClass('active');
            $(this).addClass('active');
            $(target).val(value);
            updatePriceDetail(_PID,value,type);
        });
	},
	catology:()=>{
		var a = $('.wrap-navigation__menu').scrollWidth;

		// $('button[data-catology-prev]').click(function(){
		// 	var scroll = $('.wrap-category__index-item-list').scrollLeft();
		// 	$('.wrap-category__index-item-list').animate({scrollLeft: scroll - 200}, 800);
		
		// });

		// $('button[data-catology-next]').click(function(){
		// 	var scroll = $('.wrap-category__index-item-list').scrollLeft();
		// 	$('.wrap-category__index-item-list').animate({scrollLeft: scroll + 200}, 800);
		// });

	},
	overflowscroll:function(){
		// $('a[data-catology-prev]').click(function(){
		// 	var scroll = $(this).next().scrollLeft();
		// 	$(this).next().scrollLeft(scroll-400);
		// });

		// $('a[data-catology-next]').click(function(){
		// 	var scroll = $(this).prev().scrollLeft();
		// 	$(this).prev().scrollLeft(scroll+400);
		// });

	},
	ajaxMore:function(){
		$('.select-lang').on('change',(e)=>{
			var val = $(e.target).val();
			window.location.href="lang?locale="+val;
		});
		$('.yeuthich').click((e)=>{
			var idproduct = $(e.target).attr('data-id');
			$.ajax({



				url:'ajax/ajax_favor.php',



				data:{

					id:idproduct

				},



				type: 'POST',



				dataType: 'json',



				beforeSend: function(){



					$(e.target).addClass('loading');



				},

				success: function(data){

					$('.label-favor__qty').html(data.countfavor);

					$('#view-favor').append(data.html);

					_FRAMEWORK.showError(data.message,'success');

				},

				complete: function(){

					$(e.target).removeClass('loading');

				}



			});
		});

		for (let i = 0; i <= 6; i++) {
			var images = 'images'+i;
			$(`[data-fancybox=${images}]`).fancybox({
				thumbs : {
				  autoStart : true
				},
				buttons : [
				  'zoom',
				  'close'
				]
			  });
			
		}
		
		$('.product__box-content-category').click(function() {
			var $this = $(this);
			if ($this.parent().hasClass('active')) {
				$this.parent().removeClass('active');
				$this.next().slideUp();
				$this.find("i").removeClass('fa-chevron-right');
				$this.find("i").addClass('fa-chevron-down');
			} else {
				$(".product__box-content-category").parent().removeClass('active');
				$(".product__box-content-category").next().slideUp();
				$(".product__box-content-category").find("i").removeClass('fa-chevron-right');
				$(".product__box-content-category").find("i").addClass('fa-chevron-down');
				$this.parent().addClass('active');
				$this.next().slideDown();
				$this.find("i").removeClass('fa-chevron-right');
				$this.find("i").addClass('fa-chevron-down');			
			}
		});

		$('li.favor').click((e)=>{

			if($(e.target).is("li")){

				$('li.question').removeClass("active");
				$(e.target).toggleClass("active");

			}else{

				$('li.question').removeClass("active");
				$(e.target).parent().toggleClass("active");

			}
			
		});
		
		$('li.question').click((e)=>{
			if($(e.target).is("li")){
				$('li.favor').removeClass("active");
				$(e.target).toggleClass("active");
			}else{
				$('li.favor').removeClass("active");
				$(e.target).parent().toggleClass("active");
			}
		});

		$('.nav-question__links').click(function() {
			var $this = $(this);
			if ($this.parent().hasClass('active')) {
				$this.parent().removeClass('active');
				$this.next().slideUp();
				$this.find("i").removeClass('fa-minus');
				$this.find("i").addClass('fa-plus');
			} else {
				$(".nav-question__links").parent().removeClass('active');
				$(".nav-question__links").next().slideUp();
				$(".nav-question__links").find("i").removeClass('fa-minus');
				$(".nav-question__links").find("i").addClass('fa-plus');
				$this.parent().addClass('active');
				$this.next().slideDown();
				$this.find("i").removeClass('fa-plus');
				$this.find("i").addClass('fa-minus');			
			}
		});
		

		if(exists('a.more-paging[data-view]')){

			$('a.more-paging[data-view]').click(function(){



	            var _o=$(this);

	            var type=_o.attr('data-type');

	            var p=_o.attr('data-p');

	            var view=_o.attr('data-view');

				var table = _o.attr('data-table');

	            var item=_o.attr('data-item');


	            var _c=parseInt(p)+1;



	            $.ajax({



	                url:'ajax/loadPaging.php',



	                data:{



	                    p:p,



	                    view:view,



	                    item:item,



	                    type:type,


						table:table,

	                },



	                type: 'POST',



	                dataType: 'json',



	                beforeSend: function(){



	                    _o.addClass('loading');



	                },

	                success: function(data){



	                    _o.attr('data-p',_c);

	                    $('#box').append(data['html']);



	                    if(data['count-list']==0){



	                    	_o.addClass('d-none');



	                    }



	                },

	                complete: function(){

	                    _o.removeClass('loading');

	                }



	            })



	        });

		}

		

        if(exists('#tab-paging')){

			$('body').on('click', '.box-nav-js li[data-tabs]', function() {

		        $('li[data-tabs]').removeClass('active');

		        $(this).addClass('active');

		        var id = $(this).attr('role');

		        getResult("ajax/ajax_paging.php?cateid=" + id,"#view-load-product",0);

		        return false;

		    });

		    $('li[data-tabs]:first').trigger('click');

		}

		$('#form-search__des').click((e)=>{
			$(e.target).toggleClass('fa-times');
			$('.search-top__form').toggleClass('active');
		});

		$('.wp-albums__box-left-content-link').click((e)=>{
			$('.wp-albums__box-left-content-link').removeClass('active');
			$(e.target).toggleClass('active');
		});
		if(exists('#tab-paging')){

			$('body').on('click', 'li.wp-albums__box-left-content-item[data-tabs]', function() {

		        var id = $(this).attr('data-id');

		        getResultStore("ajax/tabstore.php?cateid=" + id,"#view-album-store","#view-img-store",0);

		        return false;

		    });

		    // $('li.[data-tabs-promotion]:first').find('.js-cat').trigger('click');

		}
		$('.support-box__left-items').click((event)=>{
				$('.support-box__left-items').removeClass('active');

				if($(event.target).is('li')){
					$('.support-box__left__links').removeClass('active');
					$(event.target).toggleClass('active');
				}else{
					$(event.target).parent().toggleClass('active');
					$('.support-box__left__links').removeClass('active');
				}
		});
		if(exists('#tab-paging')){

			$('body').on('click', 'li.support-box__left-items[data-tabs]', function(e) {
				
				

		        var id = $(this).attr('data-id');

		        getResultStore("ajax/tabhotro.php?cateid=" + id,"#hotro-view",0);

		        return false;

		    });

		    $('li.support-box__left-items[data-tabs]:first').find('.support-box__left__links').trigger('click');

		}

	},
	chaychu:function(){

		$('.myhouse>p').textillate({
			in: {
				effect: 'fadeInLeft'
			},
			out: {
				effect: 'fadeInRight'
			},
			loop: true
		});

		$('.chaychu > div').textillate({
			in: {
				effect: 'fadeInLeft'
			},
			out: {
				effect: 'fadeInRight'
			},
			loop: true
		});
	},
	map:function(){
		$(".js-active").click(function(){
			var $this = $(this);
			var targetid = $this.attr("data-target");
			$(".js-active").removeClass("active");
			
			$this.addClass("active");
			if(!$(targetid).hasClass("active")){	
				$(targetid).addClass("active");			
			}else{
				$(targetid).removeClass("active");	
			}
		});
		$('body').click(".js-map",function(e){
			var id = e.target.getAttribute('data-id');
			if(id != "" & id != null & id != undefined){
				var params = {id:id};
			}else{
				if(e.target.classList.contains('js-map')){
					params = {};
				}
			}
			if(e.target.classList.contains('js-map')){
				$.post("ajax/loadMap.php",params,
				function(data,status){
					if(status == "success"){
						$("body").append(data);
						$(".close-modal").click(function(){
							$("#modal-map").remove();
						})
					}
				})
				$("body").click(".modalmap,.modalmap-container",function(event){   
					var modals = document.getElementById("modal-map");   
					var container = document.getElementById("modalmap-container");
					if(event.target == modals || event.target == container){
						$("#modal-map").remove();
					}
				})
			}
		});
	},
	preLoader:function(){
		var h_s=$('.h__box__subject').height()/3;
		$('.h__box__subject').css({'max-height':h_s+'px','overflow':'hidden'}).append('<div class="append__subject"><a class="expend"><span>Xem thêm</span>&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></a></div>');
        $('body').on('click','.append__subject a.expend',function(){
        	if(!$(this).hasClass('is-expend')){
        		$(this).addClass('is-expend');
        		$('.h__box__subject').css('max-height','100%');
        		$('.append__subject a.expend span').text('Thu gọn');
        		$('.append__subject a.expend i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
        	}else{
        		$(this).removeClass('is-expend');
        		$('.h__box__subject').css('max-height',h_s);
        		$('.append__subject a.expend span').text('Xem thêm');
        		$('.append__subject a.expend i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
        	}
        	
        });

        $('.marquee').marquee({

            speed: 20000,

            gap: 50,

            delayBeforeStart: 0,

            direction: 'left',

            duplicated: true,

            pauseOnHover: true

        });

		
		$('.popup__close-btn').click(()=>{
			$('.home--popup').remove();
		});

        

    },

    

    magicZoomplus:function(){

    	if(exists('.product-detail-slider')){

		    var owl = $(".product-detail-slider").owlCarousel({

			    autoplay: true,

			    autoplaySpeed: 300,

			    loop: true,

			    navSpeed: 300,

			    items: 4,

			    margin: 2,

			    nav: true,

		        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']

			  });

		}

    },

	// scrollTo:function(){

	// 	$('body').append('<div id="back-to-top" style=""><a class="top arrow"><i class="fa fa-angle-up"></i> <span></span></a></div>');

	//     $(window).scroll(() => {

	//         if ($(window).scrollTop() > 100) {

	//             $('#back-to-top .top').addClass('animate_top');

	//         } else {

	//             $('#back-to-top .top').removeClass('animate_top');

	//         }

	//     });

	//     $(window).scroll(() => {

	//         if ($(window).scrollTop() > 130) {

	//             $('.scroll-fixed').addClass('fixed');

	//         } else {

	//             $('.scroll-fixed').removeClass('fixed');

	//         }

	//     });

	//     $('#back-to-top .top').click(() => {

	//         $('html, body').animate({ scrollTop: 0 }, 500);

	//     });

	// 	$('#slide-menu-right').click(function() {

    //         var container = $('#slide-menu');

    //         sideScroll(container, 'right', 25, 100, $(".slide-menu").width());

    //     });



    //     $('#slide-menu-left').click(function() {

    //         var container = $('#slide-menu');

    //         sideScroll(container, 'left', 25, 100, $(".slide-menu").width());

    //     });

	// },

	validateForm:function(){

		if(exists($('#submit-form'))){

			$('#submit-form').validate({

		        rules: {

		            'fullname': { required: true },

		            'email': { required: true,validateEmail: true,email: true },

		            'phone':{ required:true,validatePhone: true},

		            'address':{ required: true},

		            'services':{ required: true}

		        },

		        messages: {

		            'fullname': { required: 'Bạn chưa nhập họ tên' },

		            'email': { required: 'Bạn chưa nhập email',validateEmail:'Email không đúng định dạng',email:'Email không đúng định dạng' },

		            'phone':{ required:'Bạn chưa nhập điện thoại',validatePhone:'Điện thoại không đúng định dạng'},

		            'address':{ required: 'Bạn chưa nhập địa chỉ'},

		            'services':{ required: 'Bạn chưa chọn dịch vụ'}

		        },

		        submitHandler: function(form) {

		   

		            var thisForm = $(form);

		            if (thisForm.valid()) {

		                $.ajax({

	                    	url: 'ajax/ajaxNewsletter.php',

		                    type: thisForm.attr('method'),

		                    data: thisForm.serialize(),

		                    dataType: 'JSON',

		                    beforeSend:function(){

				                $('#btn-submit').addClass('loading');

				            },

				            error:function(res){

				                $('#btn-submit').removeClass('loading');

				                _FRAMEWORK.showError('server error!', 'error');

				            },

				            success:function(res) {

				                setTimeout(function(){

				                    $('#btn-submit').removeClass('loading');

				                    if(res.status==200){

				                        _FRAMEWORK.showError(res.message, res.error);

				                    }else{

				                        _FRAMEWORK.showError(res.message, res.error);

				                    }

				                },1500);

				            }

		                });

		                return false;

		            }

		        }



		    });

		    $.validator.addMethod("validateEmail", function (value, element) {

	            return this.optional(element) || /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/i.test(value);

	        }, 'Email sai định dạng');

	        $.validator.addMethod("validatePhone", function (value, element) {

	            return this.optional(element) || /^((09|03|07|08|05)+([0-9]{8}))+$/i.test(value);

	        }, 'Điện thoại sai định dạng');

	    }

	},

	blockSite:function(){

	    function clickIE() {

	        if (document.all) {return false;}

	    }

	    function clickNS(e) {

	        if (document.layers||(document.getElementById&&!document.all)) {

	        if (e.which==2||e.which==3) {return false;}}

	    }

	    if (document.layers) {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;document.onselectstart=clickIE}document.oncontextmenu=new Function("return false")

	    function disableselect(e){

	        return false

	    }

	    function reEnable(){

	        return true

	    }

	    document.onselectstart=new Function ("return false")

	    if (window.sidebar){

	        document.onmousedown=disableselect

	        document.onclick=reEnable

	    }

	    $(document).keydown(function(event){

	        if(event.ctrlKey && event.shiftKey && event.keyCode==73)

	        {        

	            return false;

	        }

	        if (event.ctrlKey && event.shiftKey && event.keyCode == 74) {

	            return false;

	        }

	        if (event.keyCode == 83 && (navigator.platform.match("Mac") ? event.metaKey : event.ctrlKey)) {

	            return false;

	        }

	        // "U" key

	        if (event.ctrlKey && event.keyCode == 85) {

	            return false;

	        }

	         if (event.keyCode == 123) {

	            return false;

	        }

	    });

	},

	menuMobile:function(){

		$('div[data-toggle-menu]').click(function() {

	        if (!$(this).hasClass('active')) {

	            $(this).addClass('active');

	            $('body').append('<div class="bg-mask"></div>');

	            $('.box-modal-menu').css({'transform': 'translateX(0)','left':'0'});

	        } else {

	            $(this).removeClass('active');

	            $('.bg-mask').remove();

	            $('.box-modal-menu').css({'transform': 'translateX(-260px)','left':'-260px'});

	        }

	    });

	    $('body').on('click', '.bg-mask', function() {

	        $('.bg-mask').remove();

	        $('.navbar-menu').removeClass('active');

	        $('.box-modal-menu').css({'transform': 'translateX(-260px)','left':'-260px'});

	    });

	    $('span.drop').click(function() {

	        if (!$(this).hasClass('active')) {

	            $(this).removeClass('active');

	            $(this).addClass('active');

	            $(this).closest('li').find('>ul').stop().slideUp();

	            $(this).closest('li').find('>ul').stop().slideDown();

	        } else {

	            $(this).removeClass('active');

	            $(this).removeClass('active');

	            $(this).closest('li').find('>ul').stop().slideUp();

	        }

	    });

	    $('#fabCheckbox').click(function() {

            if (this.checked) {

                $('.mask-overlay').addClass('is-active');

            } else {

                $('.mask-overlay').removeClass('is-active');

            }

        });

	},

	carouselSlider:function(){

		var owlQuick = $('.owl-carousel.quick-slide');

		owlQuick.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-delay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 200,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

					},

					600:{

						items:Number(sm_item),			


					},

					1000:{

						items:Number(md_item)				

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});

		if(exists('#owl__theme-one')){

			$('#owl__theme-one').owlCarousel({
				items:4,
				slideSpeed:1500,
				autoplayHoverPause:true,
				margin:20,
				nav:true,
				navText:['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],
				autoplay:false,
				loop:false,
				dots:false,
				lazyLoad:true,
			    responsiveRefreshRate : 200,
			    responsive:{

					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					},
					1200:{

						items:4

					}

				}
			});
		}

		

	},

	SlickSlider:function(){

		$('.wrap-slide__bannerright').slick({
			dots: false,
			autoplay: true,
			infinite: false,
			speed: 300,
			vertical: true,
			slidesToShow: 2,
			slidesToScroll: 1,
			arrows: false,
			autoplaySpeed: 3000
		});
	
	},

	navBar:function(){

		$('ul.box-nav-js li[data-tabs]').click(function(){

			$('ul.box-nav-js li[data-tabs]').removeClass('active');

			$(this).addClass('active');

			var role=$(this).attr('role');

			$('.tabs-content[data-tabs]').removeClass('active');

			$('.tabs-content[data-view-'+role+']').addClass('active');

		});

	},

	searchPage:function(){
		$('button.btn-search').click(function () {
			var t = $('#keywords');
			searchEnter(t);

		});


		$('button[data-btn-search]').click(function(){
			var t=$('#keywords-f');
			
	        searchEnter(t);

	    });
	    $('button.button-search-m').click(function(){
        	var t=$('#keywords-m');

	        searchEnter(t);

	    });

		$('button.btn--search').click(function(){
        	var t=$('#keywords');

	        searchEnter(t);

	    });
	    

	    $('#keywords-f').keypress(function(e){
			console.log('123');
	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });

		$('#keywords-m').keypress(function(e){
	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });

	    $('input[role="search-input"]').placeholderTypewriter({text: _PLACEHOLDER});

	},

	sortChange:function(){

	    $('select[name="js-sort-by"]').change(function(){

	        var o=$(this);

	        var s=o.val() || '';

	        var k=$('#keyword').val() || '';

	        var h = o.data('href') || '';

	        var p = o.data('page') || 1;

	        var l = o.data('show');

	        var url='';

	        if(k!=''){

	            url+='keywords='+k+'&';

	        }

	        if(s!=''){

	            url+='sortby='+s+'&';

	        }

	        if(l!=0){

	            url+='show='+l+'&';

	        }

	        if(p!=0){

	            url+='page='+p+'&';

	        }

	        var href = $('input[name=href]').val();



	        $('select[name="js-limit-by"]').attr('data-sort',s);



	        var path=url.substr(0,url.length - 1);



	        pushState({sortby: s},'',h + path);



	        doSearch({'href':href,'alias':h,'keywords':k,'sortby':s,'show':l,'page':p});

	        

	    });



	    $('select[name="js-limit-by"]').change(function(){

	        var o=$(this);

	        var s=o.val() || '';

	        var k=$('#keyword').val() || '';

	        var h = o.data('href') || '';

	        var p = o.data('page') || 1;

	        var l =o.data('sort');

	        var url='';

	        if(k!=''){

	            url+='keywords='+k+'&';

	        }

	        if(l!=0){

	            url+='sortby='+l+'&';

	        }

	        if(s!=''){

	            url+='show='+s+'&';

	        }

	        if(p!=0){

	            url+='page='+p+'&';

	        }

	        var href = $('input[name=href]').val();



	        $('select[name="js-sort-by"]').attr('data-show',s);



	        var path=url.substr(0,url.length - 1);



	        pushState({show: s},'',h + path);



	        doSearch({'href':href,'alias':h,'keywords':k,'sortby':l,'show':s,'page':p});

	        

	    });

	    

	},

	showError:function(message,status){



		 $.toast({



	        heading: 'Thông báo',



	        text: message,



	        position: 'top-right',



	        stack: false,



	        icon: status



	    });



	},

	submitContact:function(){

		$('#submit-contact').click(function() {

	        var _o=$(this);

	        var _fn = $('#customername').val();

	        var _el = $('#customerEmail').val();

	        var _pn = $('#customerPhone').val();

	        var _obj = $('#contactSubject').val();

	        var _capcha = $('#contactCapcha').val();

	        if (isBlank(_fn)) {

	            $('#customername').focus();

	            return false;

	        } else if (isBlank(_el)) {

	            $('#customerEmail').focus();

	            return false

	        } else if (!isEmail(_el)) {

	            $('#customerEmail').focus();

	            return false;

	        } else if (isBlank(_pn)) {

	            $('#customerPhone').focus();

	            return false;

	        } else if (!validatePhone(_pn)) {

	            $('#customerPhone').focus();

	            return false;

	        }else if (isBlank(_capcha)) {

	            $('#contactCapcha').focus();

	            return false;

	        }

	        var params={

	            _fn:_fn,

	            _el:_el,

	            _pn:_pn,

	            _obj:_obj,

	            _capcha:_capcha

	        };

	        $.ajax({

	            url:'ajax/ajaxContact.php',

	            dataType:'json',

	            data:params,

	            type:'post',

	            beforeSend:function(){

	                _o.addClass('loading');

	            },

	            error:function(res){

	                _o.removeClass('loading');

	                _FRAMEWORK.showError('server error!', 'error');

	            },

	            success:function(res) {

	                setTimeout(function(){

	                    _o.removeClass('loading');

	                    if(res.status==200){

	                        _FRAMEWORK.showError(res.message, res.error);

	                        $('#customername').val('');

	                        $('#customerEmail').val('');

	                        $('#customerPhone').val('');

	                        $('#contactSubject').val('');

	                        $('#contactMessage').val('');

	                        $('#contactCapcha').val('');

	                    }else{

	                        _FRAMEWORK.showError(res.message, res.error);

	                    }

	                },1500);

	            }

	        })

	    });

	},

	emailForm:function(){

		
		var _o='#btn-newsletter',

        _input_email='input[name="txt-email"]';

	    $(_o).click(function(e){

	        e.preventDefault();

	        var _that=$(this);

	        var _k=$(_input_email).val();

	        if(isBlank(_k)){

	            _FRAMEWORK.showError('Vui lòng nhập số điện thoại !','error');

	            return false;

	        }else if(!validatePhone(_k)){

	            _FRAMEWORK.showError('Số điện thoại không đúng định dạng !','error');

	            return false;

	        }

	            $.ajax({

	                url: 'ajax/ajaxEmail.php',

	                type:'POST',

	                data:{

	                    email:_k,

	                },
	                dataType: "json",

	                beforeSend:function(){

	                    _that.addClass('loading');

	                },

	                success:function(res){

	                    setTimeout(function(){

	                        _that.removeClass('loading');

	                        if(res.status==200){

								_FRAMEWORK.showError(res.message,'success');

	                        }else{

								_FRAMEWORK.showError(res.message,'error');

	                        }

	                    },2000);

	                }

	            });

	            $(_input_email).val('');


	    });

	},
	danhgia:function(){

		
		var _o='#form-danhgia',

        _input_email='input[name="email"]',
		_input_hoten = 'input[name="hoten"]',
		_input_noidung = 'textarea[name="noidung"]',
		_input_product = 'textarea[name="id_product"]';

	    $(_o).click(function(e){

	        e.preventDefault();

	        var _that=$(this);

	        var _m=$(_input_email).val();

			var _t=$(_input_hoten).val();

			var _n = $(_input_noidung).val();

			var id = _that.attr("data-id");


			if (isBlank(_m)) {

	            _FRAMEWORK.showError('Vui lòng nhập Email !','error');

	            return false;

	        } else if (!isEmail(_m)) {

	            _FRAMEWORK.showError('Sai định dạng Email !','error');

	            return false;
			}

	        if(isBlank(_t)){

	            _FRAMEWORK.showError('Vui lòng nhập họ tên!','error');

	            return false;

	        }
			if(isBlank(_n)){

	            _FRAMEWORK.showError('Vui lòng nhập nội dung','error');

	            return false;

	        }

	            $.ajax({

	                url: 'ajax/ajaxDanhGia.php',

	                type:'POST',

	                data:{
	                    email:_m,
						id:id,
						noidung:_n,
						ten:_t
	                },

	                dataType: "json",

	                beforeSend:function(){

	                    _that.addClass('loading');

	                },

	                success:function(res){

	                    setTimeout(function(){

	                        _that.removeClass('loading');

	                        if(res.status==200){

								_FRAMEWORK.showError(res.message,'success');

	                        }else{

								_FRAMEWORK.showError(res.message,'error');

	                        }

	                    },2000);

	                }

	            });

	             $(_input_email).val('');

				$(_input_hoten).val('');

				$(_input_noidung).val('');

				$(_input_product).val('');



	    });

	},

	tocList:function(){

		if(_TOC==1 || _LIST_TOC==1){

			$('#toc').toc({

	            selectors: 'h2, h3, h4, h5, h6',

	            container: $('.content'),

	            status: true

	          });

	          $('a#toc').click(function(){

	            $('.toc-list').toggle(200);

	          });

	        $('.toc-list').find('a').click(function(e) {

	            e.preventDefault();

		        var x = $(this).attr('data-rel');

		        goToByScroll(x);

		    });

	    }

	},

	newsLetter:function(){
	
		var _o='.button-newsletter',

        _input_fullname='input[name="name"]',

        _input_email='input[name="email"]',

        _input_phone='input[name="phone"]',

        _input_content='input[name="noidung"]';


	    $(_o).click(function(e){

	        e.preventDefault();

	        var _that=$(this);

	        var _i=$(_input_fullname).val();

	        var _k=$(_input_email).val();

	        var _s=$(_input_phone).val();

	        var _t=$(_input_content).val();

	        if(isBlank(_i)){

	            _FRAMEWORK.showError('Vui lòng nhập họ tên !','error');

	            $(_input_fullname).focus();

	            return false;

	        }

	        

	        else if (isBlank(_k)) {

	            _FRAMEWORK.showError('Vui lòng nhập email !','error');

	            return false;

	        } 

	        else if (!isEmail(_k)) {

	            _FRAMEWORK.showError('Email không đúng định dạng !','error');

	            $(_input_email).focus();

	            return false;

	        }

	        else if(isBlank(_s)){

	            _FRAMEWORK.showError('Vui lòng nhập số điện thoại !','error');

	            $(_input_phone).focus();

	            return false;

	        }if(!validatePhone(_s)){

	            _FRAMEWORK.showError('Số điện thoại không đúng định dạng !','error');

	            $(_input_phone).focus();

	            return false;

	        }

	        // else if(isBlank(_d)){

	        //     _FRAMEWORK.showError('Vui chọn dịch vụ !','error');

	        //     $(_input_services).focus();

	        //     return false;

	        // }

	        else{

	            $.ajax({

	                url: 'ajax/ajaxNewsletter.php',

	                type:'POST',

	                data:{

	                    fullname:_i,

	                    email:_k,

	                    phone:_s,

	                    content:_t

	                },

	                dataType: 'json',

	                beforeSend:function(){

	                    _that.addClass('loading');

	                },

	                success:function(res){

	                    setTimeout(function(){

	                        _that.removeClass('loading');

	                        if(res.status==200){

	                            _FRAMEWORK.showError(res.message,'success');

	                        }else{

	                            _FRAMEWORK.showError(res.message,'error');

	                        }

	                    },2000);

	                    $(_input_fullname).val('');

			            $(_input_email).val('');

			            $(_input_phone).val('');

			            $(_input_address).val('');


	                }

	            });

	        }

	    });

	},
	addCart:()=>{
		$('body').on('click','.js-addcart',function(e){

			e.preventDefault();
			
			var id = $(this).attr('data-id');

			var qty = $(this).attr('data-qty');
	
			$.ajax({
	
				url:'ajax/addCart.php',
	 
				type:'POST',
	 
				data:{ 
					
					pid:id,

					quality:qty
				},
	 
				dataType:'json',
	 
				beforeSend:function(){

					$('#loader').addClass('active');
	 
				},
	 
				success:function(res){
	 
				$('.viewcart').html(res['total-product']);

				$('.viewcartm').html(res['total-product']);

				$('.view-cart').html(res['total-product']);

				$('.view-cartm').html(res['total-product']);

				$('.view-price').html(res['price-string']);

				$('#total-product').html(res['total-product']);

				$('.numb-cart').html(res['total-product']);

				$('#total-price').html(res['total-price']);

				$('.cart-price').html(res['total-price']);

				$('#js-price-temp').html(res['price-string']);

				$('#js-total-cart').html(res['price-string']);

				$('#js-total-cart-input').html(res['price-string']);

				$('#js-total-cart1').html(res['price-string']);

				$('.body-cart').html(res['html']);

				// _FRAMEWORK.showError(res['total-price'],'success');
					
	 
				},
	 
				complete:function(){
					$('#loader').removeClass('active');
					_FRAMEWORK.showError('Thêm vào giỏ hàng thành công !','success');
	 
				}
	 
			});
			
	
		});
		$('body').on('click','.js-addcart-buynow',function(e){

			e.preventDefault();
			
			var id = $(this).attr('data-id');

			var qty = $(this).attr('data-qty');
	
			$.ajax({
	
				url:'ajax/addCart.php',
	 
				type:'POST',
	 
				data:{ 
					pid:id,
					quality:qty
				},
	 
				dataType:'json',
	 
				beforeSend:function(){

					$('#loader').addClass('active');
	 
				},
				success:function(res){
	 
				$('.viewcart').html(res['total-product']);

				$('.view-price').html(res['price-string']);

				$('#total-product').html(res['total-product']);

				$('.numb-cart').html(res['total-product']);

				$('#total-price').html(res['total-price']);

				$('.cart-price').html(res['total-price']);

				$('#js-price-temp').html(res['price-string']);

				$('#js-total-cart').html(res['price-string']);

				$('#js-total-cart1').html(res['price-string']);

				$('.body-cart').html(res['html']);

				window.location.href = res.url;

				// _FRAMEWORK.showError(res['total-price'],'success');		 
					
	 
				},
	 
				complete:function(){
					
					$('#loader').removeClass('active');
	 
				}
	 
			});
			
	
		});
	}



}

_FRAMEWORK.init();