<?php
    $slider=$db->rawQuery("select ten_$lang as ten, mota_$lang as mota,photo_$lang photo,link,nam,linh_vuc from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('slider'));

    $slider_mark = $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where type=?",array('slider-mark'));
?>

<link rel="stylesheet" href="assets/css/vegas.css">
<script src="assets/js/vegas.js"></script>
<?php if($slider){?>
<script type="text/javascript">
$(function() {
    $('#slodo').vegas({
        overlay: false,
        // transition: 'fade',
        transitionDuration: 4000,
        delay: 7000,
        color: 'red',
        animation: 'random',
        animationDuration: 7000,
        overlay: 'assets/vegas-master/dist/overlays/06.png',
        slides: [
            <?php for($i=0,$count_result_slider=count($slider);$i<$count_result_slider;$i++) { ?>

            {
                src: "<?= _upload_hinhanh_l.$slider[$i]['photo'] ?>",

                overlaytext: `
                
                <a href='<?= $slider[$i]['link']?>' title='<?= $slider[$i]['ten']?>' class='d-none-m'>

                <div class='niceText'>

                    <div class='title chayten'>
                    
                        <div class='box-slider_content mt-50'>

                        <div class="titleLogo wow slideInDown" data-wow-delay="0.5s"><?=$slider[$i]['linh_vuc']?></div>

                        <div class="titleSlide wow slideInLeft" data-wow-delay="0.5s"><?= $slider[$i]['ten']?></div>

                        <div class="bocngoaimota wow slideInRight" data-wow-delay="0.5s">
                            <div class="descSlide">
                                <?=$slider[$i]['mota']?>
                            </div>
                        </div>
                        

                        </div>

                    </div>

                </div>

                </a>`
            },

            <?php } ?>
        ],
        walk: function(slide, setting) {
            $("#slodo-content").empty();
            $("#slodo-content").append(setting.overlaytext);
            _FRAMEWORK.chaychu();
        },
    });
    $("a.next-vegas").click(function(e) {
        $('#slodo').vegas("next");
        e.preventDefault();
    })
    $("a.prev-vegas").click(function(e) {
        $('#slodo').vegas("previous");
        e.preventDefault();
    })
});
</script>

<?php }?>

<section class="p-relative slider-vegas">
    <img src="<?= _upload_hinhanh_l.$slider_mark['photo']?>" class="slider-mark" width="32" height="128" />
    <div id="slodo">

    </div>

    <div id="slodo-content">

    </div>

</section>

<div class="bocngoaimota">
<div class="descSlide"><?=$slider[$i]['mota']?></div>
</div>