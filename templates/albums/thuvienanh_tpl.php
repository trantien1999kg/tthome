<section class="section__album">
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
                <div class="box-content mt30 ul-list-detail original">
                    <?=htmlspecialchars_decode($seo->getSeo('subject'))?>
                </div>
            </div>
            <div class="item col-12">
                <div class="row row10">
                    <?php foreach($albums as $album){
                                $albums_photo=$db->rawQuery("select photo from #_album_photo where hienthi=1 and id_baiviet=? and type=? order by stt asc,id desc",array($album['id'],'album'));
                            ?>
                    <div class="item10 col-3 l-3 m-3 c-6">
                        <div class="item__album p-relative mb20">
                            <a data-fancybox="images" href="<?=_upload_album_l.$album["photo"]?>"
                                title="<?=$album["ten"]?>">
                                <img width="285" height="210" src="<?=_upload_album_l.$album["photo"]?>"
                                    alt="<?=$album["ten"]?>" />
                                <div class="btn-animated">
                                    <div class="btn btn-album">
                                        <span><?=$album["ten"]?></span>
                                    </div>
                                </div>
                            </a>
                            <?php foreach($albums_photo as $val){?>
                            <a data-fancybox="images" style="display:none" href="<?=_upload_album_l.$val["photo"]?>"
                                title="<?=$val["ten"]?>">
                                <img width="285" height="210" src="<?=_upload_album_l.$val["photo"]?>"
                                    alt="<?=$val["ten"]?>" />
                            </a>
                            <?php }?>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>

            <div class="item col-12 mt20 wrapper-toc">
                <div class="box-content ul-list-detail original conntent">
                    <?=htmlspecialchars_decode($seo->getSeo('content'))?>
                </div>
            </div>
        </div>

    </div>
</section>