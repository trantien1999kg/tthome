<?php if(!in_array($com,['thu-vien-anh','video'])){?>
<section class="section__album pt30 pb30">

    <div class="container">

        <div class="row">

            <div class="item col-6 l-6 m-6 c-12">

                <div class="box__album">

                    <div class="title__album">

                        <p>ALBUM</p>

                        <div class="title"><span>HÌNH ẢNH CÔNG TY</span></div>

                        <div class="line__album"></div>

                    </div>
                    <div class="box__thumb mt40">

                        <div class="row row10">
                            <?php foreach($albums as $album){
                                $albums_photo=$db->rawQuery("select photo from #_album_photo where hienthi=1 and id_baiviet=? and type=? order by stt asc,id desc",array($album['id'],'album'));
                            ?>
                            <div class="item10 col-6">
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
                                    <a data-fancybox="images" style="display:none"
                                        href="<?=_upload_album_l.$val["photo"]?>" title="<?=$val["ten"]?>">
                                        <img width="285" height="210" src="<?=_upload_album_l.$val["photo"]?>"
                                            alt="<?=$val["ten"]?>" />
                                    </a>
                                    <?php }?>
                                </div>
                            </div>
                            <?php }?>
                        </div>

                    </div>

                </div>

            </div>
            <div class="item col-6 l-6 m-6 c-12">

                <div class="box__album">

                    <div class="title__album">

                        <p>YOUTUBE</p>

                        <div class="title"><span>VIDEO NỔI BẬT</span></div>

                        <div class="line__album"></div>

                    </div>
                    <div class="box__thumb mt40">

                        <div class="row">
                            <div class="item col-12">
                                <div class="box__iframe border-iframe pb30">
                                    <iframe id="vid_frame" class="d-block"
                                        src="
                                        http://www.youtube.com/embed/<?=$func->getYoutube($videos[0]['links'])?>?rel=0&showinfo=0&autohide=1" width="100%"
                                        height="323" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="item col-12">
                                <div class="list-video pt30">
                                    <div class="owl-theme owl-carousel" id="slider__video">
                                        <?php for($i=1,$count_video=count($videos); $i<$count_video; $i++){?>
                                        <div class="item__video">
                                            <a href="javascript:loadVideo('<?=$func->getYoutube($videos[$i]['links'])?>')"
                                                title="<?=$func->getYoutube($videos[$i]['link'])?>">
                                                <div class="row row5">
                                                    <div class="item5 col-5 l-5 m-5 c-12">
                                                        <img class="w-100-m" width="136" height="73"
                                                            src="<?=_upload_hinhanh_l.$videos[$i]['photo']?>"
                                                            alt="<?=$func->getYoutube($videos[$i]['link'])?>"
                                                            <?=$func->errorImg()?> />
                                                    </div>
                                                    <div class="item5 col-7 l-7 m-7 c-12">
                                                        <div class="name-video line-3">
                                                            <?=$videos[$i]['ten']?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>
<?php } ?>
<section class="section__news mb30">
    <div class="container">
        <div class="row">
            <div class="item col-12">
                <div class="box__news">
                    <div class="title__album">
                        <p>TIN TỨC</p>
                        <div class="title"><span>BÀI VIẾT NỔI BẬT</span></div>
                        <div class="line__album"></div>
                    </div>
                    <div class="box__items mt30">
                        <div class="row row10">
                            <div class="item10 col-4 l-4 m-4 c-12">
                                <div class="item__news mb-m-20">
                                    <div class="thumb__news tf-hover o-hidden">
                                        <a href="<?=$news[0]["type"]?>/<?=$news[0]["tenkhongdau"]?>"
                                            title="<?=$news[0]["ten"]?>">
                                            <img width="385" height="290" src="<?=_upload_baiviet_l.$news[0]["photo"]?>"
                                                alt="<?=$news[0]["ten"]?>" />
                                        </a>
                                    </div>
                                    <div class="desc__news">
                                        <div class="name__news">
                                            <h3><a href="<?=$news[0]["type"]?>/<?=$news[0]["tenkhongdau"]?>"
                                                    title="<?=$news[0]["ten"]?>"><?=$news[0]["ten"]?></a></h3>
                                        </div>
                                        <div class="desc__text line-3">
                                            <?=htmlspecialchars_decode($news[0]["mota"])?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item10 col-8 l-8 m-8 c-12">
                                <div class="box__flex">
                                    <?php for($i=1,$count=count($news); $i<$count; $i++){?>
                                    <div class="item__news mb20">
                                        <div class="row row10">
                                            <div class="item10 col-4 l-4 m-4 c-12">
                                                <div class="thumb__news tf-hover o-hidden">
                                                    <a href="<?=$news[$i]["type"]?>/<?=$news[$i]["tenkhongdau"]?>"
                                                        title="<?=$news[$i]["ten"]?>">
                                                        <img width="385" height="290"
                                                            src="<?=_upload_baiviet_l.$news[$i]["photo"]?>"
                                                            alt="<?=$news[$i]["ten"]?>" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item10 col-8 l-8 m-8 c-12">
                                                <div class="desc__news">
                                                    <div class="name__news">
                                                        <h3><a href="<?=$news[$i]["type"]?>/<?=$news[$i]["tenkhongdau"]?>"
                                                                title="<?=$news[$i]["ten"]?>"><?=$news[$i]["ten"]?></a>
                                                        </h3>
                                                    </div>
                                                    <div class="desc__text">
                                                        <?=htmlspecialchars_decode($news[$i]["mota"])?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="read__more t-center">
                    <a rel="nofollow" class="border-gradient border-default" href="tin-tuc" title="Xem thêm">XEM
                        THÊM</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section__partner p-relative z-index-1 pt50 pb40">
    <div class="container">
        <div class="row">
            <div class="item col-6 l-6 m-6 c-12">
                <div class="box__partner">
                    <div class="title__album">
                        <p>ĐỐI TÁC</p>
                        <div class="title">KHÁCH HÀNG TIÊU BIỂU</div>
                        <div class="mt30">Danh sách những khách hàng tiêu biểu của HORIH XANH</div>
                    </div>
                    <div class="box__row mt50">
                        <div class="max__row">
                            <div class="owl-carousel owl-theme" id="owl-partner">
                                <div>
                                    <?php foreach($doitacs as $k2=>$v2){
                                        
                                        if($k2!=0 && $k2%2 == 0){ 
                                        
                                    ?>
                                </div>

                                <div>

                                    <?php } ?>
                                    <div class="item__partner mb30">
                                        <a href="<?=$v2["link"]?>" title="<?=$v2["ten_$lang"]?>">
                                            <img src="<?=_upload_hinhanh_l.$v2["photo"]?>"
                                                alt="<?=$v2["ten_$lang"]?>" />
                                        </a>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-6 l-6 m-6 c-12">
                <div class="box__booking">
                    <div class="title__booking">
                        <div class="title p-relative">
                            <span>HỖ TRỢ KHÁCH HÀNG</span>
                        </div>
                        <div class="mt30 cl-white">
                            Điền vào thông tin của bạn, chúng tôi sẽ liên hệ đến bạn sớm nhất có thể.
                        </div>
                    </div>
                    <div class="form__booking mt50">
                        <div class="form__input mt30">
                            <div class="row__input">
                                <div class="row">
                                    <div class="item col-6">
                                        <input type="text" class="input__text" name="name" placeholder="Họ và tên..." />
                                    </div>
                                    <div class="item col-6">
                                        <input type="number" class="input__text txt-input-number" name="phone" placeholder="Điện thoại..." />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row__input">
                                <input type="email" class="input__text" name="email" placeholder="Email..." />
                            </div>
                            <div class="row__input">
                                <input type="text" class="input__text" name="address" placeholder="Địa chỉ..." />
                            </div>
                            <div class="row__input">
                                <textarea rows="5" class="input__text h" name="noidung"
                                    placeholder="Nội dung..."></textarea>
                            </div>
                            <div class="row__input t-center">
                                <button type="button" class="btn__input cs-pointer btn-act">
                                    ĐĂNG KÝ HỖ TRỢ
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>