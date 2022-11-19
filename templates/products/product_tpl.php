<section class="section__product o-hidden">
    <div class="container">    
        <div class="title-index">
            <h1>     
                <?php if($seo->getSeo('h1') != ""){?>
                <?=$seo->getSeo('h1')?>
                <?php }else{ echo $title_seo;}?>
            </h1>
        </div>
        <div class="box__seo">
            <div class="box-description mt20">
                <!-- MÔ TẢ -->
                <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>
            </div>
            <?php if(!empty($seo->getSeo('content'))){?>
            <div class="wrapper-toc mt20">
                <!-- NỘI DUNG , KHI CHẠY LÊN SẼ KÈM MỤC LỤC-->
                <div class="content ul-list-detail">
                    <?=htmlspecialchars_decode($seo->getSeo('content'))?>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="mt30">
            <div class="grid-12 gap20 gap10-sm">
                <?php if(count($tintuc)){?>
                <?php foreach($tintuc as $k => $val){?>
                <div class="span4 span6-sm ">
                    <div class="item__products">
                        <div class="thumb__products o-hidden thumb-box">
                            <a href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>" title="<?=$val["ten_".$lang]?>">
                                <img src="<?=_upload_baiviet_l.$val["photo"]?>" class="js-loadcover"
                                    alt="<?=$val["ten_".$lang]?>" <?=$func->errorImg()?> />
                                <div class="hiddenimg">
                                    <img src="<?=_upload_baiviet_l.$val["photo1"]?>" class="js-loadcover"
                                     alt="<?=$val["ten_".$lang]?>" <?=$func->errorImg()?> />
                                </div>
                            </a>
                        </div>
                        <div class="desc__products">
                            <h3 class="line-2">
                                <a href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>" title="<?=$val["ten_".$lang]?>">
                                    <?=$val["ten_".$lang]?>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php }else{?>
                <div class="span12 mb15">
                    <p class="t-center">Sản phẩm đang cập nhật...</p>
                </div>
                <?php }?>
            </div>
        </div>
        <div class="paging  mb15">
            <?=$paging?>
        </div>       
    </div>
</section>