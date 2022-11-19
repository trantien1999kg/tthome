
<section class="section-news mt20 mb20 mt-m-10 mb-m-10 mb-m-10 mb-t-10">
    <div class="container">
        <div class="title-index">
            <h1>     
                <?php if($seo->getSeo('h1') != ""){?>
                <?=$seo->getSeo('h1')?>
                <?php }else{ echo $title_seo;}?>
            </h1>
        </div>
        <?php if(!empty($seo->getSeo('content')) || !empty($seo->getSeo('subject')) ){?>
        <div class="row">
            <div class="item col-12">
                <div class="box__seo">
                    <div class="box-description mt20">
                        <span><?=htmlspecialchars_decode($seo->getSeo('subject'))?></span>
                    </div>
                    <?php if(!empty($seo->getSeo('content'))){?>
                    <div class="wrapper-toc mt20">
                        <div class="content ul-list-detail">
                            <?=htmlspecialchars_decode($seo->getSeo('content'))?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php }?>
        <div class="mt20">
            <div class="grid-12 gap40 gap20-sm">
                <div class="span9 span12-sm">
                    <div class="">
                        <div class="grid-12 gap30 gap20-sm">
                            <?php if(count($tintuc)>0){?>
                            <?php foreach($tintuc as $k=>$v){
                                $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);
                                ?>
                            <div class="span12">
                                <div class="news">                 
                                    <div class="news_thumb">
                                        <figure class="shine thumb-box">
                                            <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>">
                                                <img  src="<?=_upload_baiviet_l.$v["photo"]?>" class="js-loadcover"
                                                    alt="<?=$v["ten_$lang"]?>">
                                            </a>
                                        </figure>      
                                    </div>
                                    <div class="news_content">
                                        <p class="news_content_calendar"><i class="fas fa-calendar-alt mr5"></i> <?=date('d/m/Y',$v["ngaytao"])?></p>
                                        <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>">
                                            <h4 class="news_content_label line-2">
                                                <?=$v["ten_$lang"]?>
                                            </h4>
                                        </a>
                                        <p class="news_content_desc line-6"><?=$seoDB["description_$lang"]?></p>
                                        <a href="san-pham">
                                            <div class="wrapper-button__intro">
                                                <span>XEM TẤT CẢ</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            <?php }else{?>
                            <div class="span12 t-center">
                                Nội dung đang cập nhật....
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="paging">
                        <?=$paging?>
                    </div>
                </div>
                <div class="span3 span12-sm">
                    <?php include _layouts.'sidearticle.php';?>
                </div>
            </div>  
        </div>
          
    </div>
</section>