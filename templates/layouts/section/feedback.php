<?php
    $partners = $db->rawQuery('select * from #_photo where hienthi=1 and type=? order by stt asc',array('feedback'));   
?>
<section class="wrappers-feedback">

    <div class="container">

        <div class="feedback-slider wow fadeInUp"  data-wow-delay="0.5s">
        
            <div class="owl-carousel owl-theme owl-carousel-loop quick-slide"

            data-height="575" data-dot="1" data-nav='1'

            data-loop='1' data-play='1' data-lg-items='6' data-md-items='4' data-sm-items='4' data-xs-items="2"

            <?php if($deviceType=="computer"){ ?> data-margin='20' <?php }else{ ?> data-margin='8' <?php }?>>

                <?php foreach($partners as $key => $value){ ?>

                    <div class="pt10 pb10">

                        <div class="feedback-slider-fb mb20">

                            <a href="<?=$value["link"]?>" target="_blank" >

                                <img src="<?= _upload_hinhanh_l.$value["photo_$lang"]?>" alt="<?=$value["ten_$lang"]?>" <?=$func->errorImg()?>>
                                    
                            </a>

                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>