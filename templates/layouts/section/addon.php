<section class="section__addon pt40 pb40">
    <div class="container">
        <div class="row__addon">
            <div class="item__addon col-6 w-100-m">
                <div class="box__form bg-addon border-addon">

                    <div class="title__form t-center">

                        <span>LIÊN HỆ TƯ VẤN</span>

                    </div>

                    <i>Điền vào thông tin của bạn, chúng tôi sẽ liên hệ đến bạn sớm nhất có thể.</i>
                    <div class="form__input mt30">
                        <div class="row__input">
                            <input type="text" class="input__text" name="name" placeholder="Họ và tên..." />
                        </div>
                        <div class="row__input">
                            <input type="number" class="input__text txt-input-number" name="phone" placeholder="Điện thoại..." />
                        </div>
                        <div class="row__input">
                            <input type="email" class="input__text" name="email" placeholder="Email..." />
                        </div>
                        <div class="row__input">
                            <textarea rows="5" class="input__text h" name="noidung" placeholder="Nội dung..."></textarea>
                        </div>
                        <div class="row__input">
                            <button type="button" class="btn__input cs-pointer btn-act">
                                Gửi yêu cầu&nbsp;<img style="vertical-align: initial;" src="assets/images/arrow.png"
                                    alt="Gửi yêu cầu" />
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="item__addon col-6 w-100-m mt-m-10">
                <div class="box__form bg__video bg-addon border-addon">

                    <div class="title__form t-center">

                        <span>VIDEO CLIP</span>

                    </div>

                    <i>Tổng hợp các video clip của công ty chúng tôi, mong rằng sẽ mang đến thông tin bổ ích cho
                        bạn.</i>
                    <div class="form__gallery mt30">
                        <div class="view__video">
                            <iframe id="vid_frame"
                                src="http://www.youtube.com/embed/<?=$func->getYoutube($videos[0]['links'])?>?rel=0&showinfo=0&autohide=1"
                                width="400" height="227" frameborder="0"></iframe>
                        </div>
                        <div class="list-video mt15">
                            <div class="owl-theme owl-carousel" id="slider__video">
                                <?php for($i=1,$count_video=count($videos); $i<$count_video; $i++){?>
                                <div class="item__video">
                                    <a href="javascript:loadVideo('<?=$func->getYoutube($videos[$i]['links'])?>')"
                                        title="<?=$func->getYoutube($videos[$i]['ten'])?>">
                                        <img width="100%" height="110" src="<?=_upload_hinhanh_l.$videos[$i]['photo']?>"
                                            alt="<?=$func->getYoutube($videos[$i]['ten'])?>" <?=$func->errorImg()?> />
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
</section>