<section class="section__video">
    <div class="container">
        <div class="title__default title__in title__default-black">
            <h1 class="mg0">
                <span>
                    <?php if($seo->getSeo('h1') != ""){?>
                    <?=$seo->getSeo('h1')?>
                    <?php }else{ echo $title_seo;}?>
                </span>
            </h1>
        </div>
        <div class="item col-12 mt20">
            <div class="box-content ul-list-detail original">
                <?=htmlspecialchars_decode($seo->getSeo('subject'))?>
            </div>
        </div>
        <div class="video-tpl mt30 clearfix">
            <div class="col-12 mt30">
                <div class="d-flex flex-wrap row">
                    <?php foreach($videos as $key => $value){
                    $videoimg = $func->getYoutubeImg($value);
                    ?>
                    <div class="col-3 item l-3 m-3 c-6 mb20">
                        <div class="video inpage">
                            <a data-fancybox="video" href="<?php echo $value['links'];?>"
                                title="<?= $value['ten_'.$lang]?>">
                                <div class="p-relative img">
                                    <img src="<?= $videoimg?>" width="287" height="186" class="coverimg"
                                        alt="<?= $value['ten_'.$lang]?>">
                                    <span><i class="fas fa-play"></i></span>
                                </div>
                                <div class="content">
                                    <h4 class="line-2"><?= $value['ten_'.$lang]?></h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div class="row">
            </div>
        </div>
        <div class="mt20 mb20 d-flex justify-content-center">
          <?=$paging?>
        </div>
        <div class="item col-12 mt20 wrapper-toc">
            <div class="box-content ul-list-detail original conntent">
                <?=htmlspecialchars_decode($seo->getSeo('content'))?>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(function() {
        $('.show-youtube').click(function() {
            var links = $(this).attr('data-links');
            $.ajax({
                url: 'ajax/ajax_load_video.php',
                data: {
                    links: links
                },
                type: 'post',
                success: function(data) {
                    $('.video--main').html(data);
                }
            });
        });
    });
    </script>
</section>