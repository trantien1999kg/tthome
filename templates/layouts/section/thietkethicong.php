<section class="thietkethicong">
    <div class="container">
        <div class="row">
            <div class="title area-index wow slideInLeft" data-wow-delay="0.2s">
                <a href="san-pham" class="titleSP">
                    <img src="<?=_upload_hinhanh_l.$icon_sp['photo']?>" alt="">
                    <h2>SẢN PHẨM NỔI BẬT</h2>
                </a>
            </div>
            <div class="owl-carousel owl-theme" id="owl-tktc">
                <?php foreach($tktc1 as $key => $value){?>
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <div class="hoverimg-modified thietke_thumb thumb-box">
                        <a href="<?=$value['type']?>/<?=$value['tenkhongdau']?>">
                            <img src="<?= _upload_baiviet_l.$value['photo']?>" alt="" class="js-loadcover">
                            <div class="hover-box">
                                <div class="hover-box_label">TT HOME <span class="cl-primary">DECOR</span></div>
                                <span class="hover-box_line"></span>
                                <div class="hover-box_desc">
                                    THIẾT KẾ <span class="hover-box_bold"><?= $value['ten']?></span>
                                </div>
                                <span class="hover-box_button">XEM THÊM</span>
                            </div>
                        </a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>