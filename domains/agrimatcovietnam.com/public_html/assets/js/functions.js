function pushState(options,targetTitle,targetUrl) {
    window.history.pushState(options, targetTitle, targetUrl);
}
function goToByScroll(id) {
    $('body,html').animate({ scrollTop: $(id).offset().top - 100 }, 500);
}
function redirect(url){
    window.location.href=url;
}
function exists(el){
    if(el.length>0) return true;
    else return false
}
function slugConvert(slug,focus=false)
{
    slug = slug.toLowerCase();
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    slug = slug.replace(/ /gi, "-");
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    
    if(!focus)
    {
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    }

    return slug;
}
function onChangeSelect(e,p){
    $.ajax({
        url: _ROOT + 'users.js',
        type: 'POST',
        data: {p: p , src:'load-place'},
        success: function(data){
            $(e).html(data);
        }
    });
}
function sideScroll(element, direction, speed, distance, step) {
    scrollAmount = 0;
    var slideTimer = setTimeout(function() {
        if (direction == 'left') {
            $(element).animate({
                scrollLeft: "-=" + step
            }, "slow");
            //element.scrollLeft -= step;
        } else {
            $(element).animate({
                scrollLeft: "+=" + step
            }, "slow");
            //element.scrollLeft += step;
        }
        scrollAmount += step;
        if (scrollAmount >= distance) {
            window.clearInterval(slideTimer);
        }
    }, speed);
}
function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}

function copyToClipboardText(text) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(text).select();
    document.execCommand("copy");
    $temp.remove();
}
function isBlank(a) {
    if (a.length == 0) {
        return true
    }
    return false
}
function searchEnter(t){
    var k = t.val();

    var url;


    if(!isBlank(k)){

        url = 'keywords='+k;

        window.location.href = _ROOT + searchlang +'?'+encodeURI(url);

    }else{

        t.focus();

    }

}
function loadScrollPage(url,type,width,height,ele){

    var a=!1;

    $(window).scroll(function(){

        $(window).scrollTop()>10 && !a&&($('#'+ele).load('ajax/load_addons.php?url='+url+'&width='+width+'&height='+height+'&type='+type),a=!0)

    });

}
function isEmail(b) {
    
    var a = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    
    return a.test(b)
}
function validatePhone(b){
    
    b = b.replaceAll(/\s/g,'');
    
    var a=/((84|0[3|5|7|8|9])+([0-9]{8})\b)/g;
    
    return a.test(b);
}