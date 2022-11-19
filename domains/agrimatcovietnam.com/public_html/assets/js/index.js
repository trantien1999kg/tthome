"use strict";

_FRAMEWORK={

	init:function(){

		_FRAMEWORK.preLoader();

		_FRAMEWORK.carouselSlider();

		_FRAMEWORK.carouselSlick();

		_FRAMEWORK.navBar();

		_FRAMEWORK.searchPage();

		// _FRAMEWORK.submitContact();

		_FRAMEWORK.newsLetter();

		_FRAMEWORK.menuMobile();

		_FRAMEWORK.validateForm();

		_FRAMEWORK.tocList();

		_FRAMEWORK.scrollTo();

		_FRAMEWORK.ajaxMore();

		_FRAMEWORK.checkDomain();

		_FRAMEWORK.custom.init();

		_FRAMEWORK.shadowMenu();

		_FRAMEWORK.wow();

	},
	wow:function(){

		new WOW().init();

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
	fixMenu:function() {

		var nav = $('.menu-sticky');

		var _height=$('.menu-sticky').height();

		var nav_m = $('.menu-sticky[mobile]');

		var _height_m = $('.menu-sticky[mobile]').height();

		$(window).scroll(function() {

			if ($(this).scrollTop() > _height) {

				nav.addClass("sticky");

			} else {

				nav.removeClass("sticky");

			}

			if($(this).scrollTop() > _height_m) {

				nav_m.addClass("sticky");

			}else{

				nav_m.removeClass("sticky");

			}

		});

	},
	custom:{
		init: function(){
			_FRAMEWORK.custom.active();
			_FRAMEWORK.custom.checkSeoImg();
			_FRAMEWORK.custom.map();
			_FRAMEWORK.custom.contact();
			_FRAMEWORK.custom.sendMail();
			_FRAMEWORK.custom.chaychu();
		},
		map:function(){
			$(".js-map").click(function(){
				$.post("ajax/loadMap.php",{		
				},
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
			});
		},
		chaychu:function(){
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
		quantity:function(){
			$('.js-plus').click(function(){
				var target = $(this).data("target");
				var qty = parseInt($(target).val());
				var newqty = qty+1;
				if(newqty < 999){
					$(target).val(newqty);
				}
			});
			$('.js-minus').click(function(){
				var target = $(this).data("target");
				var qty = parseInt($(target).val());
				var newqty = qty-1;
				if(newqty>0){
					$(target).val(newqty);
				}
			});
		},
		tabtoggle: function(){
			$('.js-droptab').click(function() {
				var $this = $(this);
				if ($this.parent().hasClass('active')) {
					$this.parent().removeClass('active');
					$this.next().slideUp();
					$this.find("i").removeClass('fa-minus');
					$this.find("i").addClass('fa-plus');
				} else {
					$(".js-droptab").parent().removeClass('active');
					$(".js-droptab").next().slideUp();
					$(".js-droptab").find("i").removeClass('fa-minus');
					$(".js-droptab").find("i").addClass('fa-plus');
					$this.parent().addClass('active');
					$this.next().slideDown();
					$this.find("i").removeClass('fa-plus');
					$this.find("i").addClass('fa-minus');			
				}
			});
		},
		checkSeoImg:function(){
			$('img').each(function(){
				var alter = $(this).attr('alt');
				if(alter == "" || alter == null || alter == undefined){
					$(this).attr('alt',"I-WEB");
				}
			})
		},
		contact:function(){
			$(".js-contact").click(function(){
				var strclass = "btn-booking";
				$.post("ajax/contact-form.php",{
					strclass: strclass
				},
				function(data,status){
					if(status == "success"){
						$("body").append(data);
						$(".close-modal").click(function(){
							$("#modal-contact").remove();
						})
					}
				})
			});
		   
		},
		sendMail:function(){
			
			
			$('body').click('.btn-booking',function(e){
				if($(e.target).hasClass('btn-booking')){
				var _that = $(e.target);
				var _input_fullname_modal='input.booking-input[name="fullname"]';
				var _input_email_modal='input.booking-input[name="email"]';
				var _input_phone_modal='input.booking-input[name="phone"]';
				var _input_address_modal='input.booking-input[name="address"]';
				var _input_content_modal='textarea.booking-input[name="content"]';
				e.preventDefault();
				var _that=$(this);
				var _i=$(_input_fullname_modal).val();
				var _k=$(_input_email_modal).val();
				var _p=$(_input_address_modal).val();
				var _s=$(_input_phone_modal).val();
				var _t=$(_input_content_modal).val();
				if(isBlank(_i)){
				    _FRAMEWORK.showError('Vui lòng nhập họ tên !','error');
				    $(_input_fullname_modal).focus();
				    return false;
				}
				
				else 
				if (isBlank(_k)) {
					_FRAMEWORK.showError('Vui lòng nhập email !','error');
					return false;
				} 
				else if (!isEmail(_k)) {
					_FRAMEWORK.showError('Email không đúng định dạng !','error');
					$(_input_email_modal).focus();
					return false;
				}
				else if(isBlank(_p)){
				    _FRAMEWORK.showError('Vui lòng nhập địa chỉ !','error');
				    $(_input_address_modal).focus();
				    return false;
				}
				else if(isBlank(_s)){
				    _FRAMEWORK.showError('Vui lòng nhập số điện thoại !','error');
				    $(_input_phone_modal).focus();
				    return false;
				}if(!validatePhone(_s)){
				    _FRAMEWORK.showError('Số điện thoại không đúng định dạng !','error');
				    $(_input_phone_modal).focus();
				    return false;
				}
				if (isBlank(_t)) {
				    _FRAMEWORK.showError('Vui lòng nhập nội dung !','error');
				    $(_input_content_modal).focus();
				    return false;
				} 
				else{
					$.ajax({
						url: 'ajax/ajaxNewsletter.php',
						type:'POST',
						data:{
							fullname:_i,
							email:_k,
							address:_p,
							phone:_s,
							content:_t,
							type:'dat-lich'
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
								$("#modal-contact").remove();	
							},2000);
						}
					});
					$(_input_fullname_modal).val('');
					$(_input_email_modal).val('');
					$(_input_phone_modal).val('');
					$(_input_address_modal).val('');
					$(_input_content_modal).val('');
				}
			}
			});
		},
		pagingData:function(page, per_page, url, id_list,id_cat,type, tabs){
			$.post(
				"ajax_paging/"+url,
				{
					page: page,
					per_page: per_page, 
					id_list: id_list, 
					id_cat:id_cat,
					type: type
				},function(data,status){
					if(status == "success"){
						$(tabs).html(data);

							$(tabs + ' .pagination li.active').click(function() {

							var pager = $(this).attr('p');

							_FRAMEWORK.custom.pagingData(pager, per_page, url, id_list,id_cat,type, tabs);

							_FRAMEWORK.goToByScroll(tabs);

            			});
					}
				}
			);
		},
		overflowscroll:function(){
			$('a[data-catology-prev]').click(function(){
				var scroll = $(this).next().scrollLeft();
				$(this).next().scrollLeft(scroll-400);
			});

			$('a[data-catology-next]').click(function(){
				var scroll = $(this).prev().scrollLeft();
				$(this).prev().scrollLeft(scroll+400);
			});

		},
		active:function(){
			$(".js-active").click(function(){
				var $this = $(this);
				var targetid = $this.attr("data-target");
				$(".js-active").removeClass("active");
				$this.addClass("active");
				$(".js-tab-active").removeClass("active");
				$(targetid).addClass("active");
			});
			$(".js-cat").click(function(){
				var $this = $(this);
				var targetid = $this.attr("data-target");
				var idlist = $this.attr("data-list");
				var idcat = $this.attr("data-cat");
				var type = $this.attr("data-type");
 				$(".js-cat[data-target='" + targetid + "']").removeClass("active");
				$this.addClass("active");
				_FRAMEWORK.custom.pagingData(1,PAGE_INDEX,"ajax_paging.php",idlist,idcat,type,targetid);
			});
			$(".toggle-btn").click(function(e){
				e.preventDefault();
				var $next = $(this).parent().next();
				var $grandparent = $(this).parent().parent().parent();
				if($next.hasClass("show")){
					$next.removeClass("show");
					$next.slideUp(350);
					$(this).find(">i").attr("class","fa fa-chevron-down");
				}else{
					$grandparent.find("li .inner").removeClass("show");
					$grandparent.find("li .inner").slideUp(350);
					$grandparent.find("i").attr("class","fa fa-chevron-down");
					$next.slideDown(350);
					$(this).find(">i").attr("class","fa fa-chevron-up");
					$next.addClass("show");
				}
				
			});
		}
	},
	ajaxMore:function(){

		$('a.more-paging[data-view]').click(function(){



            var _o=$(this);



            var type=_o.attr('data-type');



            var p=_o.attr('data-p');



            var table=_o.attr('data-view');



            var item=_o.attr('data-item');



            var _c=parseInt(p)+1;



            $.ajax({



                url:'ajax/loadPaging.php',



                data:{



                    p:p,



                    table:table,



                    item:item,



                    type:type

                },



                type: 'POST',



                beforeSend: function(){



                    _o.addClass('loading');



                },

                success: function(data){



                    _o.attr('data-p',_c);



                    $('.box-row[data-paging-load]').append(data);



                },

                complete: function(){

                    _o.removeClass('loading');

                }



            })



        });

	},

	preLoader:function(){

        $(document).ready(function(){

            var x=1;

            setInterval(function(){

                var step='.process'+x;

                $('.process-line').removeClass('active');

                $(step).addClass('active');

                x++;

                if(x==7){ x=1}

                

            },1000);

        });
        

    },

    checkDomain:function(){

    	$('#domain').keypress(function(e) {

	        if(e.which==13){

	            var domain = $(this).val();

	            if (domain == '') {

	                $(this).focus();

	                return false;

	            }



	            if (domain.length <= 2) {

	                alert('Tên miền phải lớn hơn 2 ký tự!');

	                $(this).focus();

	                return false;

	            }

	            if (domain.length > 63) {

	                alert('Tên miền phải nhỏ hơn 63 ký tự');

	                $(this).focus();

	                return false;

	            } else {

	                window.location.href = "whois?domain=" + domain;

	            }

	        }

	    });

	    $('button#btn-check,.btn-check-domain').click(function() {

		    var domain = $('#domain').val();

	        if (domain == '') {

	            $('#domain').focus();

	            return false;

	        }



	        if (domain.length <= 2) {

	            alert('Tên miền phải lớn hơn 2 ký tự!');

	            $('#domain').focus();

	            return false;

	        }

	        if (domain.length > 63) {

	            alert('Tên miền phải nhỏ hơn 63 ký tự');

	            $('#domain').focus();

	            return false;

	        } else {

	            window.location.href = "whois?domain=" + domain;

	        }

		});

		var res='';

	    $('ul li[data-domain]').each(function(i, v) {

	        var v = $(this).attr('data-domain');

	        var v_v = '.' + v;

	        var domain=_DOMAIN;

	        res += '<li data-domain="'+v+'">\
				<div class="left-res">'+domain+'<span>'+v_v+'</span></div>\
					<div class="right-res"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>\
				</li>';

	    });

	    $('ul li[data-domain]').each(function(i, v) {

	        var v = $(this).attr('data-domain');

	        var v_v = '.' + v;

	        var str=_DOMAIN;

	        var mang=str.split('.');

	        var domain=mang[0];

	        $.ajax({

	            url: 'ajax/domain.php',

	            type: 'POST',

	            data: {

	                domain: domain,

	                ext: v

	            },

	            success: function(data) {

	                var elem = $("li[data-domain=\"" + v + "\"]");

	                data = $.parseJSON(data);

	                if (data.status == "1") {

	                    elem.find('.left-res').html('<div class="left-res">' + domain +

	                        '<span class="text-success">' + v_v + '</span></div>');

	                    elem.find(".right-res").html(

	                        "<a class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#ModalNotice\">" +

	                        "Chưa đăng ký" + "</a>");

	                } else {

	                    elem.find('.left-res').html('<div class="left-res">' + domain +

	                        '<span class="text-danger">' + v_v + '</span></div>');

	                    elem.find(".right-res").html("<a class=\"btn btn-danger\">" +

	                        "Đã đăng ký" + "</a>");

	                }

	            }

	        });

	    });

	    var html_result = '<ul class="domainResults">'+res+'</ul>';

		$('#domainCheckResults').html(html_result);

    },

	scrollTo:function(){

		$('body').append('<div id="back-to-top" style=""><a class="top arrow"><i class="fa fa-angle-up"></i> <span></span></a></div>');

	    $(window).scroll(() => {

	        if ($(window).scrollTop() > 100) {

	            $('#back-to-top .top').addClass('animate_top');

	        } else {

	            $('#back-to-top .top').removeClass('animate_top');

	        }

	    });

	    $('#back-to-top .top').click(() => {

	        $('html, body').animate({ scrollTop: 0 }, 500);

	    });

		$('.slide-menu-right').click(function() {

            var id=$(this).attr('data-id');

            var container = $('#slide-menu'+id);

            sideScroll(container, 'right', 25, 100, $(".slide-menu"+id).width());

        });



        $('.slide-menu-left').click(function() {

            var id=$(this).attr('data-id');

            var container = $('#slide-menu'+id);

            sideScroll(container, 'left', 25, 100, $(".slide-menu"+id).width());

        });

	},

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

	carouselSlick:function(){

		if ($('.slide-news').length > 0) {
            $('.slide-news').slick({
                autoplay: true,
				arrows: false,
				dots: false,
				slidesToShow: 3,
				centerPadding: "10px",
				draggable: false,
				infinite: true,
				pauseOnHover: false,
				swipe: false,
				touchMove: false,
				vertical: true,
				speed: 1000,
				autoplaySpeed: 4000,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            slidesToShow: 3
                        }
                    }
                ]
            });
        }

	},

	carouselSlider:function(){

		var owl = $('.owl-carousel.in-home');

	  		owl.each( function(){

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

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),	

						nav:0,

						dot:0

					},

					600:{

						items:Number(sm_item),			

						nav:0,

						dot:0

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

		if(exists("#sync1")){
			var sync1 = $("#sync1 .owl-theme");
		    var sync2 = $("#sync2 .owl-theme");
		    var slidesPerPage = 5;
		    var syncedSecondary = true;
		    sync1.owlCarousel({
			    items : 1,
			    slideSpeed : 2000,
			    nav: true,
			    navText:['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],
			    center: false,
			    autoplay: true,
			    autoplayHoverPause: true,
			    dots: false,
			    loop: true,
			    lazyLoad:true,
			    responsiveRefreshRate : 200
			    
		    }).on('changed.owl.carousel', syncPosition);
		  
		    sync2
		      .on('initialized.owl.carousel', function () {
		        sync2.find(".owl-item").eq(0).addClass("synced");
		      })
		      .owlCarousel({
				items : slidesPerPage,
				dots: false,
				margin:10,
				nav: false,
				loop: false,
				center: false,
				smartSpeed: 200,
				slideSpeed : 500,
				slideBy: slidesPerPage,
				responsiveRefreshRate : 100,
				responsive:{

					0:{
						items:2
					},
					600:{
						items:2
					},
					1000:{
						items:3
					},
					1200:{

						items:4

					}

				}
		    }).on('changed.owl.carousel', syncPosition2);
		  
		    function syncPosition(el) {
		      var count = el.item.count-1;
		      var current = Math.round(el.item.index - (el.item.count/2) - .5);
		      
		      if(current < 0 && 1 < 2) {
		        current = count;
		      }
		      if(current > count) {
		        current = 0;
		      }
		  
		      sync2
		        .find(".owl-item")
		        .removeClass("synced")
		        .eq(current)
		        .addClass("synced");
		      var onscreen = sync2.find('.owl-item.active').length - 1;
		      var start = sync2.find('.owl-item.active').first().index();
		      var end = sync2.find('.owl-item.active').last().index();
		      
		      if (current > end) {
		        sync2.data('owl.carousel').to(current, 100, true);
		      }
		      if (current < start && 1 < 2) {
		        sync2.data('owl.carousel').to(current - onscreen, 100, true);
		      }
		    }
		    
		    function syncPosition2(el) {
		      if(syncedSecondary) {
		        var number = el.item.index;
		        sync1.data('owl.carousel').to(number, 100, true);
		      }
		    }
		    
		    sync2.on("click", ".owl-item", function(e){
		      e.preventDefault();
		      var number = $(this).index();
		      sync1.data('owl.carousel').to(number, 300, true);
		    });
		}

	  	if(exists('#synced')){
			var owl1=$('#synced').owlCarousel({
				items:4,
				slideSpeed:1500,
				margin:20,
				autoplayHoverPause:true,
				nav:true,
				navText:['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],
				autoplay:true,
				loop:false,
				dots:false,
				responsiveRefreshRate:200,
				responsive:{

					0:{
						items:2
					},
					600:{
						items:2
					},
					1000:{
						items:3
					},
					1200:{
						items:4
					},
					1440:{
						items:5
					}
				}
			});
		}
		if(exists('#synced-news')){
			var owl1=$('#synced-news').owlCarousel({
				items:4,
				slideSpeed:1500,
				margin:10,
				autoplayHoverPause:true,
				nav:true,
				navText:['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],
				autoplay:true,
				loop:false,
				dots:false,
				responsiveRefreshRate:200,
				responsive:{

					0:{
						items:2
					},
					600:{
						items:2
					},
					1000:{
						items:3
					},
					1200:{
						items:4
					},
					1440:{
						items:4
					}
				}
			});
		}

	},

	navBar:function(){

		$('.box-nav-js ul li[data-construct]').click(function(){

			$('.box-nav-js ul li[data-construct]').removeClass('active');

			$(this).addClass('active');

			var role=$(this).attr('role');

			$('.tabs-content[data-construct]').removeClass('active');

			$('.tabs-content[data-view-'+role+']').addClass('active');

		});

		$('.box-nav-js ul li[data-view]').click(function(){

			$('.box-nav-js ul li[data-view]').removeClass('active');

			$(this).addClass('active');

			var role=$(this).attr('role');

			$('.tabs-content[data-nav-content]').removeClass('active');

			$('.tabs-content[data-view-id-'+role+']').addClass('active');

		});

	},

	searchPage:function(){

		$('button[data-btn-search]').click(function(){

        	var t=$(this).prev();

	        searchEnter(t);

	    });

	    $('#keywords').keypress(function(e){

	        if(e.which==13){


	            searchEnter($(this));

	        }

	    });

		$('input[data-input-search]').keypress(function(e){
			if(e.which==13){


	            searchEnter($(this));

	        }
		})

		$('input[data-input-search]').on('keyup',function(){
			var target = $(this).attr('data-target');
			var value = $(this).val();
			if($(this).val() != ""){
				$(".search[data-box='"+target+"']").addClass('active');
			}else if($(this).val() == ''){
				$(".search[data-box='"+target+"']").removeClass('active');
			}
			$.post(
				"ajax/loadSearch.php",
				{
					keyword:value
				},function(data,status){
					if(status == "success"){
						$(".search[data-box='"+target+"']").html(data);
					}
				}
			)
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

		var _o='.submit-mail',

        _input_email='input[name="txt-email"]'

	    $(_o).click(function(e){

	        e.preventDefault();

	        var _that=$(this);

	        var _k=$(_input_email).val();

	        if (isBlank(_k)) {

	            _FRAMEWORK.showError('Vui lòng nhập email !','error');

	            return false;

	        } else if (!isEmail(_k)) {

	            _FRAMEWORK.showError('Email không đúng định dạng !','error');

	            $(_input_email).focus();

	            return false;

	        }else{

	            $.ajax({

	                url: 'ajax/ajaxEmail.php',

	                type:'POST',

	                data:{

	                    email:_k,

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

	                }

	            });

	            $(_input_email).val('');

	        }

	    });

	},

	tocList:function(){

		if(_TOC==1 || _LIST_TOC==1){

			$('#toc').toc({

	            selectors: 'h2, h3, h4, h5, h6',

	            container: $('.wrapper-toc>.content'),

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

		var _o='.btn-newsletter',

        _input_phone='input[name="phone1"]';

	    $(_o).click(function(e){

	        e.preventDefault();

	        var _that=$(this);

	        var _s=$(_input_phone).val();

	        if(isBlank(_s)){

	            _FRAMEWORK.showError('Vui lòng nhập số điện thoại !','error');

	            $(_input_phone).focus();

	            return false;

	        }if(!validatePhone(_s)){

	            _FRAMEWORK.showError('Số điện thoại không đúng định dạng !','error');

	            $(_input_phone).focus();

	            return false;

	        }


	        else{

	            $.ajax({

	                url: 'ajax/ajaxNewsletter.php',

	                type:'POST',

	                data:{

	                    phone:_s,

						type:'ho-tro'

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

			            $(_input_phone).val('');

	                }

	            });

	        }

	    });

	}



}

_FRAMEWORK.init();