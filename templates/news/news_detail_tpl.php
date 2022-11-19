<section class="products-page container">
    <div class="grid wide">
        <div class="flex-row">
            <?php if($row_toc==1 && $deviceType=='computer'){?>
            <div class="item col__left z-100m">
                <div class="sidebar__sticky">
                    <div class="wrapper-toc mt20">

                        <div class="content ul-list-detail"></div>

                    </div>
                </div>
            </div>
            <?php }?>
            <?php 

                $col_right = ($row_toc==1 && $deviceType=='computer') ? 'col__right z-100m' : 'col-12';
    
            ?>
            <div class="item <?=$col_right?>">
                <div class="row">

                    <div class="col l-12 m-12 c-12" style="margin-bottom:0 !important;">

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

                <div class="row mt50">

                    <div class="col-12">

                        <div class="">
                            <?php if($deviceType=='computer'){?>
                            <div class="content ul-list-detail bg-white box-content">

                                <?=htmlspecialchars_decode($row_detail['noidung_'.$lang])?>

                            </div>
                            <?php }else{?>
                            <div class="wrapper-toc mt20">

                                <div class="content ul-list-detail bg-white box-content">
                                    <?=htmlspecialchars_decode($row_detail['noidung_'.$lang])?>
                                </div>

                            </div>
                            <?php }?>
                            <div class="detail mt20 mb20 colorf4 pd10">

                                <div class="i-shareLinks">
                                    <b>Chia sẻ</b>
                                    <?php include_once _source.'shareLinks.php'?>

                                </div>

                            </div>
                            <?php if(count($tintuc)>0){?>


                            <div class="i-shareLinks i-other-news pd10 mb10 colorf4">

                                <b><i class="fas fa-light fa-list-check"></i>Bài viết khác</b>

                                <ul class="i-list-news-other">
                                    <?php foreach($tintuc as $other){?>
                                    <li style="margin-top: 10px; margin-bottom: 10px;">
                                    <i class="fas fa-light fa-angles-right"></i><a class="text-decoration-none" href="<?=$other["type"]?>/<?=$other["tenkhongdau"]?>"
                                            title="<?=$other["ten_$lang"]?>">
                                            <?=$other["ten_$lang"]?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>

                            </div>

                            <?php }?>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</section>