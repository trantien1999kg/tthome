"use strict"

const G={
    init: function(){   
        $('#loader').addClass('active');
        G.imgRatio();  
        G.loadMore();
        G.changetab();
        G.scrollTab();
        G.numberrun();
        G.menuSide();
        G.proDetail();
        G.GForm();
        G.firstload();
    },
    firstload: ()=>{      
        window.addEventListener('load',function(){
            $('#loader').removeClass('active');
        })
    },
    GForm:()=>{
        $('.g-input input').keyup((e)=>{
            var selector = $(e.target);
            if(selector.val() != ''){
                selector.parent().addClass('on');
            }else{
                selector.parent().removeClass('on');
            }
        })
        $('.g-input textarea').keyup((e)=>{
            var selector = $(e.target);
            if(selector.val() != ''){
                selector.parent().addClass('on');
            }else{
                selector.parent().removeClass('on');
            }
        })
    },
    menuSide:()=>{
        $('.js-menuside').click((e)=>{
            var $this = $(e.target);       
            var $grandparent = $this.parent().parent().parent();
            var $next = $this.parent().next();
            if($next.hasClass('show')){
                $next.removeClass("show");
                $next.slideUp(500);
                $this.removeClass('active');
            }else{
                $grandparent.find("ul.inner").removeClass("show");
                $grandparent.find("ul.inner").slideUp(500);
                $grandparent.find('.js-menuside').removeClass('active');
                $this.addClass('active');
                $next.slideDown(500);            
                $next.addClass("show");
            }
           
        });
    },
    numberrun:()=>{
        $('.count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    },
    changetab:()=>{
        $('.G-tab').click(function(){
            var target = $(this).data('target');
            $('.G-tab').removeClass('active');
            $(this).addClass('active');
            $('.G-tabcont').removeClass('active');
            $(target).addClass('active');
        })
    },
    changeYoutubeFrame:(element,target)=>{
        var value = element.value;
        $(target).attr('src','https://www.youtube.com/embed/'+value);
    },
    scrollTab:()=>{
        $(".G-sbox").each(function(){
            let $this = $(this);
            let margin = parseInt($this.data('margin'));
            let items = $this.find(".G-sitem");
            let total = 0;
            items.each(function(){
                var width = parseInt($(this).data('width'));
                total = total +width;
                $(this).css('width', width+'px');
                $(this).css('margin-right', margin+'px');
            })
            $this.find('.G-sitem:last-child').css('margin-right', '0px');
            let count = items.length;
            total = total + ((count-1)*margin);
            $this.css("width", total+'px');
        });
    },
    submitForm:(form , modal = "")=>{
        var valid = $(form).find('[data-validate]');   
        var flag = false;
        var errmsg = "";
        valid.each(function(){
            let value = $(this).val();
            let message = $(this).data('message')
            if(isBlank(value)){
                errmsg = message;
                flag = true;
                return;
            }
            let valide = $(this).data('validate-email');
            let validp = $(this).data('validate-phone');
            if (typeof valide !== 'undefined' && valide !== false) {
                if(!isEmail(value)) {
                    errmsg = 'Email không đúng định dạng';
                    flag = true;
                    return;
                }
            }
            if (typeof validp !== 'undefined' && validp !== false) {
                if(!validatePhone(value)) {
                    errmsg = 'Số điện thoại không đúng định dạng';
                    flag = true;
                    return;
                }
            }
        });
        if(flag) {
            _FRAMEWORK.showError(errmsg,'error');
            return false;
        }
        $.ajax({
            url:'ajax/bookingsend.php',
            type:'post',
            data:$(form).serialize(),
            dataType:'json',
            beforeSend:()=>{
                $("#loader").addClass('active');
            },
            success:(res)=>{
                _FRAMEWORK.showError(res.message,res.error);
            },complete:()=>{
                $("#loader").removeClass('active');
                if(modal != ""){
                    $(modal).remove();
                }
            }
        })
    },
    remove:(id)=>{
        $(id).remove();
    },
    cart:()=>{
        $('.js-color').click(function(){
            var target = $(this).data('target');
            var value = $(this).data('value');
            $('.js-color').removeClass('active');
            $(this).addClass('active');
            $(target).val(value);
        });
        $('.js-size').click(function(){
            var target = $(this).data('target');
            var value = $(this).data('value');
            $('.js-size').removeClass('active');
            $(this).addClass('active');
            $(target).val(value);
        });
    },
    addFavor(id){
        $("#loader").addClass('active');
        $.post(
            "ajax/addFavor.php",
            {id:id},
            (data,status)=>{
                if(status === "success"){
                    $("#loader").removeClass('active');
                }
            }
        )
    },
    proDetail:()=>{
        $('.js-viewdetail').click(function(e){
            var $this = $(e.target);
            var rel = $this.data('p');
            var params = {id:rel};
            G.showModal('ajax/popupDetail.php',params,'body');
        })
    },
    showModal(url,param,tab){
        $("#loader").addClass('active');
        $.post(
            url,
            param,
            (data,status)=>{
                if(status === "success"){
                    $(tab).append(data);
                    $("#loader").removeClass('active');
                }
            }
        )
    },
    imgRatio:()=>{
        $("img").each(function(){
            if($(this).hasClass('coverimg') || $(this).hasClass('scaleimg')){
                var w = $(this).attr('width');
                var h = $(this).attr('height');
                $(this).css("aspect-ratio",w+"/"+h);
            }
        })
    },
    getMore:(type,table,tab,list=0,cat=0,page=0,perpage=0,status="")=>{
        var strurl = 'ajax/ajaxRoute.php';
        var params = {type:type,table:table,list:list,cat:cat,page:page,perpage:perpage,tab:tab,status:status};
        $("#loader").addClass('active');
        $.post(strurl,params,function(data,status){
            if(status=='success'){
                $(tab).html(data);
                $("#loader").removeClass('active');
            }
        });
    },
    addMore:(type,table,tab,list=0,cat=0,page=0,perpage=0,status="")=>{
        var strurl = 'ajax/ajaxRoute.php';
        var params = {type:type,table:table,list:list,cat:cat,page:page,perpage:perpage,tab:tab,status:status};
        $("#loader").addClass('active');
        $.post(strurl,params,function(data,status){
            if(status=='success'){
                $(tab).append(data);
                $("#loader").removeClass('active');
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
                G.imgRatio();
            }
        });
    },
    loadMore:function(){
        $('.js-paging').click(function(){
            var $this = $(this);
            var type = $this.data('type');
            var target = $this.data('target');
            var list = $this.data('list');
            var cat = $this.data('cat');
            var table = $this.data('table');
            var status = $this.data('status');
            G.getMore(type,table,target,list,cat,1,4,status);
            $('.js-paging[data-target="'+target+'"]').removeClass('active');
            $(this).addClass('active');
        });
        $("body").click(function(e){
            var ele = e.target;
            if($(ele).hasClass("js-viewmore")){
                var $this = $(ele);
                var type = $this.data('type');
                var target = $this.data('target');
                var list = $this.data('list');
                var cat = $this.data('cat');
                var table = $this.data('table');
                var p = $this.data('p');
                var perpage = $this.data('per');
                var status = $this.data('status');
                G.addMore(type,table,target,list,cat,p,perpage,status);
                var nextp = (parseInt(p)+1);
                $this.data('p',nextp);
            }
        });
    },
    toggle: function(id){
        $(id).toggleClass('active');
    }
}

G.init();
