<header class="element-header d-none-m <?= ($source == 'index')?"shadow-sticky ":"box-shadow headersticky"?>"
    style="<?= ($source == 'index')?"":"background-image:url("._upload_hinhanh_l.$bg_header['photo'].");"?>">
    <div class="container">
        <div class="row5 d-flex flex-wrap justify-content-between align-items-center p-relative">
            <div class="item col-12 headercenter">
                <div class="col-10">
                    <ul class="nav-menu d-flex justify-content-between">
                        <li class=" <?php if($source=='index') echo ' active';?> nav-menu-line pl0">
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2>
                                <?php }?>
                                <a href="" title="Trang chủ" rel="dofollow" class="pl0">TRANG CHỦ</a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <li class=" <?php if($com=='gioi-thieu') echo ' active';?> nav-menu-line">
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2>
                                <?php }?>
                                <a href="gioi-thieu" title="Giới thiệu" rel="dofollow">GIỚI THIỆU</a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <li class=" p-relative nav-menu-line">
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2>
                                <?php }?>
                                <a href="san-pham" title="Về chúng tôi ">Sản Phẩm</a>
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
                        <li class="wrapper-nav__menu-logo t-center items-lastchild">
                            <a href="" class="p-relative d-block">
                                <img src="<?=_upload_hinhanh_l.$logo['photo_'.$lang]?>" alt="Logo trang chủ">
                                <div class="star-box">
                                    <img src="./assets/images/saolaplanh.png" class="saolaplanh star-animate"
                                        alt="Sao lấp lánh">
                                </div>
                            </a>
                        </li>
                        <li class="<?php if($com=='bao-gia') echo ' active';?> p-relative nav-menu-line">
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2>
                                <?php }?>
                                <a href="cong-trinh" title="BÁO GIÁ" rel="dofollow">BÁO GIÁ</a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <li class="<?php if($com=='tin-tuc') echo ' active';?> p-relative nav-menu-line">
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2>
                                <?php }?>
                                <a href="tin-tuc" title="TIN TỨC" rel="dofollow">TIN TỨC</a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <li class="<?php if($com=='lien-he') echo ' active';?> p-relative nav-menu-line ">
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2>
                                <?php }?>
                                <a href="lien-he" title="LIÊN HỆ" rel="dofollow" class="pr0">LIÊN HỆ</a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <li class="search">
                        <!-- <a href="javascript:void(0)" onclick="console.log(_FRAMEWORK.toggle('so cc'))"> -->
                        <a href="javascript:void(0)" onclick="_FRAMEWORK.toggle('#modal-search')">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<?php

    $slider=$db->rawQuery("select ten_$lang as ten,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('slider'));

?>
<script>
const header = document.querySelector("header")
window.addEventListener("scroll", function() {
    x = window.pageYOffset
    if (x > 0) {
        header.classList.add("sticky")
        const aTag = document.querySelectorAll("header ul li h2 a")
        //   aTag.forEach(e => e.classList.add("color-black"))
        //   aTag.classList.add("color-black")


    } else {
        header.classList.remove("sticky")
        const aTag = document.querySelectorAll("header ul li h2 a")
        aTag.forEach(e => e.classList.remove("color-black"))
    }
})
</script>