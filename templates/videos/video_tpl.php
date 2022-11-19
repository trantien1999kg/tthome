<style type="text/css">
.adv-youtube {
    width: 279px;
    height: auto;
    padding: 0px 5px;
}

.box-video {
    display: flex;
    justify-content: space-between;
}

.video--main {
    width: calc(70% + 80px);
}

.list-youtube i {
    font-size: 2em;
    color: #f00;
    visibility: hidden;
    opacity: 1;
    margin-top: -10px;
    transition: all 0.25s;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.list-youtube .item-video1:hover i {
    transition: all 0.25s;
    visibility: visible;
    margin-top: 0;
    opacity: 1;
    filter: brightness(120%);
}

iframe {
    width: 100%;
}
</style>
<section class="video-page mt30">
    <div class="container">
        <div class="row">
            <div class="item col-12">
                <div class="box-iframe-video">
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?=$func->getYoutube($videos[0]['links'])?>"
                            frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item col-12 mt20">
                <div class="row10 d-flex flex-wrap">
                    <?php for ($i=1; $i < count($videos); $i++) {?>
                    <div class="item10 col-3 w-50-m mb20">
                        <div class="show-youtube list-youtube p-relative cs-pointer"
                            data-links="<?=$func->getYoutube($videos[$i]['links'])?>">
                            <div class="item-video1">
                                <a data-fancybox href="<?=$videos[$i]['links']?>" title="<?=$videos[$i]['ten_'.$lang]?>">
                                    <img class="img-block" src="https://img.youtube.com/vi/<?=$func->getYoutube($videos[$i]['links'])?>/mqdefault.jpg">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div class="row">
            </div>
        </div>
        <div class="pagination-page mb20 mt15" style="text-align: center!important;float:none;clear: both;">
            <?=$paging?>
        </div>
    </div>
</section>