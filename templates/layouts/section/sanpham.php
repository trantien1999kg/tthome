<section class="sanpham area-sanpham">

    <div class="container">

        <div class="row">

            <div class="item col-12 mb20 mt20i">

                <div class="wrapper-title__news wow slideInLeft" data-wow-delay="0.2s">

                    <a href="san-pham" rel="dofollow" title="Sản phẩm">

                        <span>SẢN PHẨM</span>

                    </a>

                </div>

            </div>

        </div>

        <div class="mt20">

            <div class="grid-12 gap20 gap10-sm">
                <?php foreach ($pros as $key => $value) {?>
                <div class="span4 span6-sm">
                    <div class="item__products wow fadeInUp" data-wow-delay="0.2s">
                        <div class="thumb__products o-hidden thumb-box">
                            <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>" title="<?=$value["ten_".$lang]?>">
                                <img src="<?=_upload_baiviet_l.$value["photo"]?>" class="js-loadcover"
                                    alt="<?=$value["ten_".$lang]?>" <?=$func->errorImg()?> />
                                <div class="hiddenimg">
                                    <img src="<?=_upload_baiviet_l.$value["photo1"]?>" class="js-loadcover"
                                        alt="<?=$value["ten_".$lang]?>" <?=$func->errorImg()?> />
                                </div>
                            </a>
                        </div>
                        <div class="desc__products">
                            <h3 class="line-2">
                                <a href="<?=$value["type"]?>/<?=$value["tenkhongdau"]?>"
                                    title="<?=$value["ten_".$lang]?>">
                                    <?=$value["ten_".$lang]?>
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="span12">
                    <div class="d-flex justify-content-center">
                        <a href="san-pham"><button class="wrapper-button__intro"><span>XEM TẤT CẢ</span></button></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>