<section class="section-header-thanhxuan">
    <div class="container">
        <div class="container-header-thanhxuan">
            <div class="header">
                <div class="menu">
                    <ul>
                        <li>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?>
                                <a href="">TRANG CHỦ</a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <li><?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?><a href="gioi-thieu">GIỚI THIỆU</a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <li>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?>
                                <a href="san-pham">SẢN PHẨM</a>
                                <?php if($danhmuc1){?>
                                <div class="sub-menu">
                                    <ul>
                                        <?php foreach($danhmuc1 as $key => $value){ 
                                            $c2 = $db->rawQuery("select id ,tenkhongdau_$lang as tenkhongdau , ten_$lang as ten from #_baiviet_cat where hienthi=1 and id_list=?  order by stt asc,id desc",array($value['id']));
                                               //LẤY ID_LIST TỪ THG DM CẤP 2 NÀY , CHO NÓ LÀ ? ĐỂ NÓ ĐỐI CHIẾU QUA THG array($value['id'])); MÀ THẰNG ID CỦA DANHMUC1 NẰM PHÍA TRÊN VÒNG LẶP
                                            ?>

                                        <li><a
                                                href="<?= $value['type']?>/<?= $value['tenkhongdau']?>"><?= $value['ten']?></a>
                                            <ul class="menucon">
                                                <?php foreach($c2 as $k => $v){ ?>
                                                <li><a
                                                        href="<?= $value['type']?>/<?= $value['tenkhongdau']?>/<?= $v['tenkhongdau']?>"><?= $v['ten']?></a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <?php } ?>
                                    </ul>

                                </div>
                                <?php }?>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        </li>
                        <li>
                            <!--<img src="assets/images/logo.png"> --><?php //echo $logo["thumb_vi"];?>
                            <img src="<?=_upload_hinhanh_l.$logo['photo_vi']?>" />
                        </li>

                        <li><?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?> <a href="feedback">FEEDBACK</a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <li> <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?><a href="tin-tuc">TIN
                                    TỨC</a><?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <li> <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?><a href="lien-he">LIÊN
                                    HỆ</a><?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <li>
                            <a href="javascript:void(0)" onclick="_FRAMEWORK.toggle('#modal-search')">
                                <img src="assets/images/iconsearch.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>