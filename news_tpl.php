<section class="section-news mt20 mb20 mt-m-10 mb-m-10 mb-m-10 mb-t-10">
    <div class="container">
        <div class="row">
            <div class="item col-12">
                <div class="title__default title__in title__default-black">
                    <h1 class="mg0">
                        <span>
                            <?php if($seo->getSeo('h1') != ""){?>
                            <?=$seo->getSeo('h1')?>
                            <?php }else{ echo $title_seo;}?>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
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
        <div class="row d-flex flex-wrap mt20">
            <div class="item col-12 w-100-m w-100-t">
                <div class="row d-flex flex-wrap">
                    <?php if(count($tintuc)>0){?>
                    <?php foreach($tintuc as $k=>$v){
                        $seoDB = $seo->getSeoDB($v['id'],'baiviet','man',$v["type"]);
                        ?>
                    <div class="item col-4 l-4 m-4 c-12">
                        <div class="i-news-box mb30">
                            <div class="i-box-white">
                                <div class="i-pic-news">
                                    <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>">
                                        <img width="383" height="287" src="<?=_upload_baiviet_l.$v["photo"]?>"
                                            alt="<?=$v["ten_$lang"]?>">
                                    </a>
                                </div>
                                <div class="i-info-news">
                                    <h4 class="i-name-news line-2">
                                        <a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>"><?=$v["ten_$lang"]?></a>
                                    </h4>
                                    <p class="i-time-news">Ngày đăng: <?=date('d/m/Y  g:i:s',$v["ngaytao"])?></p>
                                    <div class="i-desc-news i-text-split"><?=$seoDB["description_$lang"]?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <?php }else{?>
                    <div class="item col-12 t-center">
                        Nội dung đang cập nhật....
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="paging">
            <?=$paging?>
        </div>
    </div>
</section>