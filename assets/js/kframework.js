"use strict";
K_FRAMEWORK = {
    init:()=>{
        K_FRAMEWORK.carouselSlider();
        K_FRAMEWORK.carouselMultiple();
        K_FRAMEWORK.controlCarousel();
        K_FRAMEWORK.carouselUnique();
        K_FRAMEWORK.carouselProductNews();
        K_FRAMEWORK.carouselParty();
        K_FRAMEWORK.carouselPartners();
        K_FRAMEWORK.fileterShow();
        // K_FRAMEWORK.carouselCategory();
        // K_FRAMEWORK.scrollLeftMenu();
    },
    carouselSlider:function(){

        //Banner carousel

		var owl = $('.owl-carousel.banner-home');

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



			if (loop == 1){ loop = true; }else{ loop = false; }

			if (dot == 1){ dot = true; }else{ dot = false; }

			if (nav == 1){ nav = true; }else{ nav = false; }

			if (play == 1){ play = true; }else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

                animateOut: 'fadeOut',

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],

				autoplay:play,

				autoplayTimeout: 10000,

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item)				

					},

					600:{

						items:Number(sm_item)				

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

	},

    carouselMultiple:function(){

    var el = $('.carousel-product');
  
    var carousel;

    var carouselOptions = {};

    el.each( function(){

        var xs_item = $(this).attr('data-xs-items');

        var md_item = $(this).attr('data-md-items');

        var lg_item = $(this).attr('data-lg-items');

        var sm_item = $(this).attr('data-sm-items');	

        var xs_row = $(this).attr('data-xs-row');

        var md_row = $(this).attr('data-md-row');

        var lg_row = $(this).attr('data-lg-row');

        var sm_row = $(this).attr('data-sm-row');

        var margin=$(this).attr('data-margin');

        var dot=$(this).attr('data-dot');

        var nav=$(this).attr('data-nav');

        var height=$(this).attr('data-height');

        var play=$(this).attr('data-play');

        var loop=$(this).attr('data-loop');

        

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



        if (loop == 1){ loop = true; }else{ loop = false; }

        if (dot == 1){ dot = true; }else{ dot = false; }

        if (nav == 1){ nav = true; }else{ nav = false; }

        if (play == 1){ play = true; }else{ play = false; }

        carouselOptions = {

                loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],

				autoplay:play,

				autoplayTimeout: 10000,

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),
                        rows:Number(xs_row)			

					},

					600:{

						items:Number(sm_item),
                        rows:Number(sm_row)				

					},

					1000:{

						items:Number(md_item),
                        rows:Number(md_row)				

					},

					1200:{

						items:Number(lg_item),
                        rows:Number(lg_row)				

					}

				}
        };

    });

    //Taken from Owl Carousel so we calculate width the same way
    var viewport = function() {
        var width;
        if (carouselOptions.responsiveBaseElement && carouselOptions.responsiveBaseElement !== window) {
        width = $(carouselOptions.responsiveBaseElement).width();
        } else if (window.innerWidth) {
        width = window.innerWidth;
        } else if (document.documentElement && document.documentElement.clientWidth) {
        width = document.documentElement.clientWidth;
        } else {
        console.warn('Can not detect viewport width.');
        }
        return width;
    };

    var severalRows = false;
    var orderedBreakpoints = [];
    for (var breakpoint in carouselOptions.responsive) {
        if (carouselOptions.responsive[breakpoint].rows > 1) {
        severalRows = true;
        }
        orderedBreakpoints.push(parseInt(breakpoint));
    }
  
    //Custom logic is active if carousel is set up to have more than one row for some given window width
    if (severalRows) {
        orderedBreakpoints.sort(function (a, b) {
        return b - a;
        });
        var slides = el.find('[data-slide-index]');
        var slidesNb = slides.length;
        if (slidesNb > 0) {
        var rowsNb;
        var previousRowsNb = undefined;
        var colsNb;
        var previousColsNb = undefined;

        //Calculates number of rows and cols based on current window width
        var updateRowsColsNb = function () {
            var width =  viewport();
            for (var i = 0; i < orderedBreakpoints.length; i++) {
            var breakpoint = orderedBreakpoints[i];
            if (width >= breakpoint || i == (orderedBreakpoints.length - 1)) {
                var breakpointSettings = carouselOptions.responsive['' + breakpoint];
                rowsNb = breakpointSettings.rows;
                colsNb = breakpointSettings.items;
                break;
            }
            }
        };

        var updateCarousel = function () {
            updateRowsColsNb();

            //Carousel is recalculated if and only if a change in number of columns/rows is requested
            if (rowsNb != previousRowsNb || colsNb != previousColsNb) {
            var reInit = false;
            if (carousel) {
                //Destroy existing carousel if any, and set html markup back to its initial state
                carousel.trigger('destroy.owl.carousel');
                carousel = undefined;
                slides = el.find('[data-slide-index]').detach().appendTo(el);
                el.find('.fake-col-wrapper').remove();
                reInit = true;
            }


            //This is the only real 'smart' part of the algorithm

            //First calculate the number of needed columns for the whole carousel
            var perPage = rowsNb * colsNb;
            var pageIndex = Math.floor(slidesNb / perPage);
            var fakeColsNb = pageIndex * colsNb + (slidesNb >= (pageIndex * perPage + colsNb) ? colsNb : (slidesNb % colsNb));

            //Then populate with needed html markup
            var count = 0;
            for (var i = 0; i < fakeColsNb; i++) {
                //For each column, create a new wrapper div
                var fakeCol = $('<div class="fake-col-wrapper"></div>').appendTo(el);
                for (var j = 0; j < rowsNb; j++) {
                //For each row in said column, calculate which slide should be present
                var index = Math.floor(count / perPage) * perPage + (i % colsNb) + j * colsNb;
                if (index < slidesNb) {
                    //If said slide exists, move it under wrapper div
                    slides.filter('[data-slide-index=' + index + ']').detach().appendTo(fakeCol);
                }
                count++;
                }
            }
            //end of 'smart' part

            previousRowsNb = rowsNb;
            previousColsNb = colsNb;

            if (reInit) {
                //re-init carousel with new markup
                carousel = el.owlCarousel(carouselOptions);
            }
            }
        };

        //Trigger possible update when window size changes
        $(window).on('resize', updateCarousel);

        //We need to execute the algorithm once before first init in any case
        updateCarousel();
        }
    }

    //init
    carousel = el.owlCarousel(carouselOptions);

    },

    carouselUnique:function(){

    var el = $('.carousel-unique');
  
    var carousel;

    var carouselOptions = {};

    el.each( function(){

        var xs_item = $(this).attr('data-xs-items');

        var md_item = $(this).attr('data-md-items');

        var lg_item = $(this).attr('data-lg-items');

        var sm_item = $(this).attr('data-sm-items');	

        var xs_row = $(this).attr('data-xs-row');

        var md_row = $(this).attr('data-md-row');

        var lg_row = $(this).attr('data-lg-row');

        var sm_row = $(this).attr('data-sm-row');

        var margin=$(this).attr('data-margin');

        var dot=$(this).attr('data-dot');

        var nav=$(this).attr('data-nav');

        var height=$(this).attr('data-height');

        var play=$(this).attr('data-play');

        var loop=$(this).attr('data-loop');

        

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



        if (loop == 1){ loop = true; }else{ loop = false; }

        if (dot == 1){ dot = true; }else{ dot = false; }

        if (nav == 1){ nav = true; }else{ nav = false; }

        if (play == 1){ play = true; }else{ play = false; }

        carouselOptions = {

                loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],

				autoplay:play,

				autoplayTimeout: 10000,

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),
                        rows:Number(xs_row)			

					},

					600:{

						items:Number(sm_item),
                        rows:Number(sm_row)				

					},

					1000:{

						items:Number(md_item),
                        rows:Number(md_row)				

					},

					1200:{

						items:Number(lg_item),
                        rows:Number(lg_row)				

					}

				}
        };

    });

    //Taken from Owl Carousel so we calculate width the same way
    var viewport = function() {
        var width;
        if (carouselOptions.responsiveBaseElement && carouselOptions.responsiveBaseElement !== window) {
        width = $(carouselOptions.responsiveBaseElement).width();
        } else if (window.innerWidth) {
        width = window.innerWidth;
        } else if (document.documentElement && document.documentElement.clientWidth) {
        width = document.documentElement.clientWidth;
        } else {
        console.warn('Can not detect viewport width.');
        }
        return width;
    };

    var severalRows = false;
    var orderedBreakpoints = [];
    for (var breakpoint in carouselOptions.responsive) {
        if (carouselOptions.responsive[breakpoint].rows > 1) {
        severalRows = true;
        }
        orderedBreakpoints.push(parseInt(breakpoint));
    }
  
    //Custom logic is active if carousel is set up to have more than one row for some given window width
    if (severalRows) {
        orderedBreakpoints.sort(function (a, b) {
        return b - a;
        });
        var slides = el.find('[data-slide-index]');
        var slidesNb = slides.length;
        if (slidesNb > 0) {
        var rowsNb;
        var previousRowsNb = undefined;
        var colsNb;
        var previousColsNb = undefined;

        //Calculates number of rows and cols based on current window width
        var updateRowsColsNb = function () {
            var width =  viewport();
            for (var i = 0; i < orderedBreakpoints.length; i++) {
            var breakpoint = orderedBreakpoints[i];
            if (width >= breakpoint || i == (orderedBreakpoints.length - 1)) {
                var breakpointSettings = carouselOptions.responsive['' + breakpoint];
                rowsNb = breakpointSettings.rows;
                colsNb = breakpointSettings.items;
                break;
            }
            }
        };

        var updateCarousel = function () {
            updateRowsColsNb();

            //Carousel is recalculated if and only if a change in number of columns/rows is requested
            if (rowsNb != previousRowsNb || colsNb != previousColsNb) {
            var reInit = false;
            if (carousel) {
                //Destroy existing carousel if any, and set html markup back to its initial state
                carousel.trigger('destroy.owl.carousel');
                carousel = undefined;
                slides = el.find('[data-slide-index]').detach().appendTo(el);
                el.find('.fake-col-wrapper').remove();
                reInit = true;
            }


            //This is the only real 'smart' part of the algorithm

            //First calculate the number of needed columns for the whole carousel
            var perPage = rowsNb * colsNb;
            var pageIndex = Math.floor(slidesNb / perPage);
            var fakeColsNb = pageIndex * colsNb + (slidesNb >= (pageIndex * perPage + colsNb) ? colsNb : (slidesNb % colsNb));

            //Then populate with needed html markup
            var count = 0;
            for (var i = 0; i < fakeColsNb; i++) {
                //For each column, create a new wrapper div
                var fakeCol = $('<div class="fake-col-wrapper"></div>').appendTo(el);
                for (var j = 0; j < rowsNb; j++) {
                //For each row in said column, calculate which slide should be present
                var index = Math.floor(count / perPage) * perPage + (i % colsNb) + j * colsNb;
                if (index < slidesNb) {
                    //If said slide exists, move it under wrapper div
                    slides.filter('[data-slide-index=' + index + ']').detach().appendTo(fakeCol);
                }
                count++;
                }
            }
            //end of 'smart' part

            previousRowsNb = rowsNb;
            previousColsNb = colsNb;

            if (reInit) {
                //re-init carousel with new markup
                carousel = el.owlCarousel(carouselOptions);
            }
            }
        };

        //Trigger possible update when window size changes
        $(window).on('resize', updateCarousel);

        //We need to execute the algorithm once before first init in any case
        updateCarousel();
        }
    }

    //init
    carousel = el.owlCarousel(carouselOptions);

    $('.category-prev-unique').click(function() {

        el.trigger('prev.owl.carousel');

    });
    $('.category-next-unique').click(function() {

        el.trigger('next.owl.carousel');

    });

    },
    carouselParty:function(){

        var el = $('.carousel-party');
      
        var carousel;
    
        var carouselOptions = {};
    
        el.each( function(){
    
            var xs_item = $(this).attr('data-xs-items');
    
            var md_item = $(this).attr('data-md-items');
    
            var lg_item = $(this).attr('data-lg-items');
    
            var sm_item = $(this).attr('data-sm-items');	
    
            var xs_row = $(this).attr('data-xs-row');
    
            var md_row = $(this).attr('data-md-row');
    
            var lg_row = $(this).attr('data-lg-row');
    
            var sm_row = $(this).attr('data-sm-row');
    
            var margin=$(this).attr('data-margin');
    
            var dot=$(this).attr('data-dot');
    
            var nav=$(this).attr('data-nav');
    
            var height=$(this).attr('data-height');
    
            var play=$(this).attr('data-play');
    
            var loop=$(this).attr('data-loop');
    
            
    
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
    
    
    
            if (loop == 1){ loop = true; }else{ loop = false; }
    
            if (dot == 1){ dot = true; }else{ dot = false; }
    
            if (nav == 1){ nav = true; }else{ nav = false; }
    
            if (play == 1){ play = true; }else{ play = false; }
    
            carouselOptions = {
    
                    loop: loop,
    
                    margin:Number(margin),
    
                    responsiveClass:true,
    
                    dots:dot,
    
                    nav:nav,
    
                    navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],
    
                    autoplay:play,
    
                    autoplayTimeout: 10000,
    
                    smartSpeed: 2000,
    
                    autoplayHoverPause:true,
    
                    autoHeight:false,
    
                    responsive:{
    
                        0:{
    
                            items:Number(xs_item),
                            rows:Number(xs_row)			
    
                        },
    
                        600:{
    
                            items:Number(sm_item),
                            rows:Number(sm_row)				
    
                        },
    
                        1000:{
    
                            items:Number(md_item),
                            rows:Number(md_row)				
    
                        },
    
                        1200:{
    
                            items:Number(lg_item),
                            rows:Number(lg_row)				
    
                        }
    
                    }
            };
    
        });
    
        //Taken from Owl Carousel so we calculate width the same way
        var viewport = function() {
            var width;
            if (carouselOptions.responsiveBaseElement && carouselOptions.responsiveBaseElement !== window) {
            width = $(carouselOptions.responsiveBaseElement).width();
            } else if (window.innerWidth) {
            width = window.innerWidth;
            } else if (document.documentElement && document.documentElement.clientWidth) {
            width = document.documentElement.clientWidth;
            } else {
            console.warn('Can not detect viewport width.');
            }
            return width;
        };
    
        var severalRows = false;
        var orderedBreakpoints = [];
        for (var breakpoint in carouselOptions.responsive) {
            if (carouselOptions.responsive[breakpoint].rows > 1) {
            severalRows = true;
            }
            orderedBreakpoints.push(parseInt(breakpoint));
        }
      
        //Custom logic is active if carousel is set up to have more than one row for some given window width
        if (severalRows) {
            orderedBreakpoints.sort(function (a, b) {
            return b - a;
            });
            var slides = el.find('[data-slide-index]');
            var slidesNb = slides.length;
            if (slidesNb > 0) {
            var rowsNb;
            var previousRowsNb = undefined;
            var colsNb;
            var previousColsNb = undefined;
    
            //Calculates number of rows and cols based on current window width
            var updateRowsColsNb = function () {
                var width =  viewport();
                for (var i = 0; i < orderedBreakpoints.length; i++) {
                var breakpoint = orderedBreakpoints[i];
                if (width >= breakpoint || i == (orderedBreakpoints.length - 1)) {
                    var breakpointSettings = carouselOptions.responsive['' + breakpoint];
                    rowsNb = breakpointSettings.rows;
                    colsNb = breakpointSettings.items;
                    break;
                }
                }
            };
    
            var updateCarousel = function () {
                updateRowsColsNb();
    
                //Carousel is recalculated if and only if a change in number of columns/rows is requested
                if (rowsNb != previousRowsNb || colsNb != previousColsNb) {
                var reInit = false;
                if (carousel) {
                    //Destroy existing carousel if any, and set html markup back to its initial state
                    carousel.trigger('destroy.owl.carousel');
                    carousel = undefined;
                    slides = el.find('[data-slide-index]').detach().appendTo(el);
                    el.find('.fake-col-wrapper').remove();
                    reInit = true;
                }
    
    
                //This is the only real 'smart' part of the algorithm
    
                //First calculate the number of needed columns for the whole carousel
                var perPage = rowsNb * colsNb;
                var pageIndex = Math.floor(slidesNb / perPage);
                var fakeColsNb = pageIndex * colsNb + (slidesNb >= (pageIndex * perPage + colsNb) ? colsNb : (slidesNb % colsNb));
    
                //Then populate with needed html markup
                var count = 0;
                for (var i = 0; i < fakeColsNb; i++) {
                    //For each column, create a new wrapper div
                    var fakeCol = $('<div class="fake-col-wrapper"></div>').appendTo(el);
                    for (var j = 0; j < rowsNb; j++) {
                    //For each row in said column, calculate which slide should be present
                    var index = Math.floor(count / perPage) * perPage + (i % colsNb) + j * colsNb;
                    if (index < slidesNb) {
                        //If said slide exists, move it under wrapper div
                        slides.filter('[data-slide-index=' + index + ']').detach().appendTo(fakeCol);
                    }
                    count++;
                    }
                }
                //end of 'smart' part
    
                previousRowsNb = rowsNb;
                previousColsNb = colsNb;
    
                if (reInit) {
                    //re-init carousel with new markup
                    carousel = el.owlCarousel(carouselOptions);
                }
                }
            };
    
            //Trigger possible update when window size changes
            $(window).on('resize', updateCarousel);
    
            //We need to execute the algorithm once before first init in any case
            updateCarousel();
            }
        }
    
        //init
        carousel = el.owlCarousel(carouselOptions);
    
        $('.category-prev-unique').click(function() {
    
            el.trigger('prev.owl.carousel');
    
        });
        $('.category-next-unique').click(function() {
    
            el.trigger('next.owl.carousel');
    
        });
    
    },
    carouselPartners:function(){

        var el = $('.carousel-partners');
      
        var carousel;
    
        var carouselOptions = {};
    
        el.each( function(){
    
            var xs_item = $(this).attr('data-xs-items');
    
            var md_item = $(this).attr('data-md-items');
    
            var lg_item = $(this).attr('data-lg-items');
    
            var sm_item = $(this).attr('data-sm-items');	
    
            var xs_row = $(this).attr('data-xs-row');
    
            var md_row = $(this).attr('data-md-row');
    
            var lg_row = $(this).attr('data-lg-row');
    
            var sm_row = $(this).attr('data-sm-row');
    
            var margin=$(this).attr('data-margin');
    
            var dot=$(this).attr('data-dot');
    
            var nav=$(this).attr('data-nav');
    
            var height=$(this).attr('data-height');
    
            var play=$(this).attr('data-play');
    
            var loop=$(this).attr('data-loop');
    
            
    
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
    
    
    
            if (loop == 1){ loop = true; }else{ loop = false; }
    
            if (dot == 1){ dot = true; }else{ dot = false; }
    
            if (nav == 1){ nav = true; }else{ nav = false; }
    
            if (play == 1){ play = true; }else{ play = false; }
    
            carouselOptions = {
    
                    loop: loop,
    
                    margin:Number(margin),
    
                    responsiveClass:true,
    
                    dots:dot,
    
                    nav:nav,
    
                    navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],
    
                    autoplay:play,
    
                    autoplayTimeout: 10000,
    
                    smartSpeed: 2000,
    
                    autoplayHoverPause:true,
    
                    autoHeight:false,
    
                    responsive:{
    
                        0:{
    
                            items:Number(xs_item),
                            rows:Number(xs_row)			
    
                        },
    
                        600:{
    
                            items:Number(sm_item),
                            rows:Number(sm_row)				
    
                        },
    
                        1000:{
    
                            items:Number(md_item),
                            rows:Number(md_row)				
    
                        },
    
                        1200:{
    
                            items:Number(lg_item),
                            rows:Number(lg_row)				
    
                        }
    
                    }
            };
    
        });
    
        //Taken from Owl Carousel so we calculate width the same way
        var viewport = function() {
            var width;
            if (carouselOptions.responsiveBaseElement && carouselOptions.responsiveBaseElement !== window) {
            width = $(carouselOptions.responsiveBaseElement).width();
            } else if (window.innerWidth) {
            width = window.innerWidth;
            } else if (document.documentElement && document.documentElement.clientWidth) {
            width = document.documentElement.clientWidth;
            } else {
            console.warn('Can not detect viewport width.');
            }
            return width;
        };
    
        var severalRows = false;
        var orderedBreakpoints = [];
        for (var breakpoint in carouselOptions.responsive) {
            if (carouselOptions.responsive[breakpoint].rows > 1) {
            severalRows = true;
            }
            orderedBreakpoints.push(parseInt(breakpoint));
        }
      
        //Custom logic is active if carousel is set up to have more than one row for some given window width
        if (severalRows) {
            orderedBreakpoints.sort(function (a, b) {
            return b - a;
            });
            var slides = el.find('[data-slide-index]');
            var slidesNb = slides.length;
            if (slidesNb > 0) {
            var rowsNb;
            var previousRowsNb = undefined;
            var colsNb;
            var previousColsNb = undefined;
    
            //Calculates number of rows and cols based on current window width
            var updateRowsColsNb = function () {
                var width =  viewport();
                for (var i = 0; i < orderedBreakpoints.length; i++) {
                var breakpoint = orderedBreakpoints[i];
                if (width >= breakpoint || i == (orderedBreakpoints.length - 1)) {
                    var breakpointSettings = carouselOptions.responsive['' + breakpoint];
                    rowsNb = breakpointSettings.rows;
                    colsNb = breakpointSettings.items;
                    break;
                }
                }
            };
    
            var updateCarousel = function () {
                updateRowsColsNb();
    
                //Carousel is recalculated if and only if a change in number of columns/rows is requested
                if (rowsNb != previousRowsNb || colsNb != previousColsNb) {
                var reInit = false;
                if (carousel) {
                    //Destroy existing carousel if any, and set html markup back to its initial state
                    carousel.trigger('destroy.owl.carousel');
                    carousel = undefined;
                    slides = el.find('[data-slide-index]').detach().appendTo(el);
                    el.find('.fake-col-wrapper').remove();
                    reInit = true;
                }
    
    
                //This is the only real 'smart' part of the algorithm
    
                //First calculate the number of needed columns for the whole carousel
                var perPage = rowsNb * colsNb;
                var pageIndex = Math.floor(slidesNb / perPage);
                var fakeColsNb = pageIndex * colsNb + (slidesNb >= (pageIndex * perPage + colsNb) ? colsNb : (slidesNb % colsNb));
    
                //Then populate with needed html markup
                var count = 0;
                for (var i = 0; i < fakeColsNb; i++) {
                    //For each column, create a new wrapper div
                    var fakeCol = $('<div class="fake-col-wrapper"></div>').appendTo(el);
                    for (var j = 0; j < rowsNb; j++) {
                    //For each row in said column, calculate which slide should be present
                    var index = Math.floor(count / perPage) * perPage + (i % colsNb) + j * colsNb;
                    if (index < slidesNb) {
                        //If said slide exists, move it under wrapper div
                        slides.filter('[data-slide-index=' + index + ']').detach().appendTo(fakeCol);
                    }
                    count++;
                    }
                }
                //end of 'smart' part
    
                previousRowsNb = rowsNb;
                previousColsNb = colsNb;
    
                if (reInit) {
                    //re-init carousel with new markup
                    carousel = el.owlCarousel(carouselOptions);
                }
                }
            };
    
            //Trigger possible update when window size changes
            $(window).on('resize', updateCarousel);
    
            //We need to execute the algorithm once before first init in any case
            updateCarousel();
            }
        }
    
        //init
        carousel = el.owlCarousel(carouselOptions);
    
        $('.category-prev-unique').click(function() {
    
            el.trigger('prev.owl.carousel');
    
        });
        $('.category-next-unique').click(function() {
    
            el.trigger('next.owl.carousel');
    
        });
    
    },
    carouselProductNews:function(){

        var el = $('.carousel-prouduct-news');
      
        var carousel;
    
        var carouselOptions = {};
    
        el.each( function(){
    
            var xs_item = $(this).attr('data-xs-items');
    
            var md_item = $(this).attr('data-md-items');
    
            var lg_item = $(this).attr('data-lg-items');
    
            var sm_item = $(this).attr('data-sm-items');	
    
            var xs_row = $(this).attr('data-xs-row');
    
            var md_row = $(this).attr('data-md-row');
    
            var lg_row = $(this).attr('data-lg-row');
    
            var sm_row = $(this).attr('data-sm-row');
    
            var margin=$(this).attr('data-margin');
    
            var dot=$(this).attr('data-dot');
    
            var nav=$(this).attr('data-nav');
    
            var height=$(this).attr('data-height');
    
            var play=$(this).attr('data-play');
    
            var loop=$(this).attr('data-loop');
    
            
    
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
    
    
    
            if (loop == 1){ loop = true; }else{ loop = false; }
    
            if (dot == 1){ dot = true; }else{ dot = false; }
    
            if (nav == 1){ nav = true; }else{ nav = false; }
    
            if (play == 1){ play = true; }else{ play = false; }
    
            carouselOptions = {
    
                    loop: loop,
    
                    margin:Number(margin),
    
                    responsiveClass:true,
    
                    dots:dot,
    
                    nav:nav,
    
                    navText: ["<div class='arrowleft'><svg viewBox='0 0 16000 16000'><polyline class='a' points='11040,1920 4960,8000 11040,14080'></polyline></svg></div>","<div class='arrowright'><svg viewBox='0 0 16000 16000' style='position:absolute;top:0;left:0;width:100%;height:100%;'><polyline class='a' points='4960,1920 11040,8000 4960,14080'></polyline></svg></div>"],
    
                    autoplay:play,
    
                    autoplayTimeout: 10000,
    
                    smartSpeed: 2000,
    
                    autoplayHoverPause:true,
    
                    autoHeight:false,
    
                    responsive:{
    
                        0:{
    
                            items:Number(xs_item),
                            rows:Number(xs_row)			
    
                        },
    
                        600:{
    
                            items:Number(sm_item),
                            rows:Number(sm_row)				
    
                        },
    
                        1000:{
    
                            items:Number(md_item),
                            rows:Number(md_row)				
    
                        },
    
                        1200:{
    
                            items:Number(lg_item),
                            rows:Number(lg_row)				
    
                        }
    
                    }
            };
    
        });
    
        //Taken from Owl Carousel so we calculate width the same way
        var viewport = function() {
            var width;
            if (carouselOptions.responsiveBaseElement && carouselOptions.responsiveBaseElement !== window) {
            width = $(carouselOptions.responsiveBaseElement).width();
            } else if (window.innerWidth) {
            width = window.innerWidth;
            } else if (document.documentElement && document.documentElement.clientWidth) {
            width = document.documentElement.clientWidth;
            } else {
            console.warn('Can not detect viewport width.');
            }
            return width;
        };
    
        var severalRows = false;
        var orderedBreakpoints = [];
        for (var breakpoint in carouselOptions.responsive) {
            if (carouselOptions.responsive[breakpoint].rows > 1) {
            severalRows = true;
            }
            orderedBreakpoints.push(parseInt(breakpoint));
        }
      
        //Custom logic is active if carousel is set up to have more than one row for some given window width
        if (severalRows) {
            orderedBreakpoints.sort(function (a, b) {
            return b - a;
            });
            var slides = el.find('[data-slide-index]');
            var slidesNb = slides.length;
            if (slidesNb > 0) {
            var rowsNb;
            var previousRowsNb = undefined;
            var colsNb;
            var previousColsNb = undefined;
    
            //Calculates number of rows and cols based on current window width
            var updateRowsColsNb = function () {
                var width =  viewport();
                for (var i = 0; i < orderedBreakpoints.length; i++) {
                var breakpoint = orderedBreakpoints[i];
                if (width >= breakpoint || i == (orderedBreakpoints.length - 1)) {
                    var breakpointSettings = carouselOptions.responsive['' + breakpoint];
                    rowsNb = breakpointSettings.rows;
                    colsNb = breakpointSettings.items;
                    break;
                }
                }
            };
    
            var updateCarousel = function () {
                updateRowsColsNb();
    
                //Carousel is recalculated if and only if a change in number of columns/rows is requested
                if (rowsNb != previousRowsNb || colsNb != previousColsNb) {
                var reInit = false;
                if (carousel) {
                    //Destroy existing carousel if any, and set html markup back to its initial state
                    carousel.trigger('destroy.owl.carousel');
                    carousel = undefined;
                    slides = el.find('[data-slide-index]').detach().appendTo(el);
                    el.find('.fake-col-wrapper').remove();
                    reInit = true;
                }
    
    
                //This is the only real 'smart' part of the algorithm
    
                //First calculate the number of needed columns for the whole carousel
                var perPage = rowsNb * colsNb;
                var pageIndex = Math.floor(slidesNb / perPage);
                var fakeColsNb = pageIndex * colsNb + (slidesNb >= (pageIndex * perPage + colsNb) ? colsNb : (slidesNb % colsNb));
    
                //Then populate with needed html markup
                var count = 0;
                for (var i = 0; i < fakeColsNb; i++) {
                    //For each column, create a new wrapper div
                    var fakeCol = $('<div class="fake-col-wrapper"></div>').appendTo(el);
                    for (var j = 0; j < rowsNb; j++) {
                    //For each row in said column, calculate which slide should be present
                    var index = Math.floor(count / perPage) * perPage + (i % colsNb) + j * colsNb;
                    if (index < slidesNb) {
                        //If said slide exists, move it under wrapper div
                        slides.filter('[data-slide-index=' + index + ']').detach().appendTo(fakeCol);
                    }
                    count++;
                    }
                }
                //end of 'smart' part
    
                previousRowsNb = rowsNb;
                previousColsNb = colsNb;
    
                if (reInit) {
                    //re-init carousel with new markup
                    carousel = el.owlCarousel(carouselOptions);
                }
                }
            };
    
            //Trigger possible update when window size changes
            $(window).on('resize', updateCarousel);
    
            //We need to execute the algorithm once before first init in any case
            updateCarousel();
            }
        }
    
        //init
        carousel = el.owlCarousel(carouselOptions);
    
        },
    controlCarousel:function(){

        var el = $('.carousel-category');

        $('.category-prev').click(function() {

            el.trigger('prev.owl.carousel');
    
        });
        $('.category-next').click(function() {
    
            el.trigger('next.owl.carousel');
    
        });

        var proNews = $('.carousel-product-news');

        $('.product-news-prev').click(function() {
    
            proNews.trigger('prev.owl.carousel');
    
        });
        $('.product-news-next').click(function() {
    
            proNews.trigger('next.owl.carousel');
    
        });

        var proHots = $('.carousel-listhot');

        $('.carousel-listhot-prev').click(function() {
    
            proHots.trigger('prev.owl.carousel');
    
        });
        $('.carousel-listhot-next').click(function() {
    
            proHots.trigger('next.owl.carousel');
    
        });

        
  
    },
    removeInterval:(target,timeout)=>{     
        var interval = setTimeout(() => {
            $(target).remove();
            clearTimeout(interval);
        }, timeout*1000);
    },
    fileterShow:function(){

        $('#opensideBar-product').click(function() {

	        if (!$(this).hasClass('active')) {

	            $(this).addClass('active');

	            $('body').append('<div class="bg-mask"></div>');

	            $('.sideBar-product').css({'transform': 'translateX(0%)','visibility':'visible'});

	        } else {

	            $(this).removeClass('active');

	            $('.bg-mask').remove();

	            $('.sideBar-product').css({'transform': 'translateX(100%)','visibility':'hidden'});

	        }

	    });
        $('body').on('click', '.bg-mask', function() {

	        $('.bg-mask').remove();

	        $('#opensideBar-product').removeClass('active');

            $('.sideBar-product').css({'transform': 'translateX(100%)','visibility':'visible'});

	    });

    },
   
}
K_FRAMEWORK.init();