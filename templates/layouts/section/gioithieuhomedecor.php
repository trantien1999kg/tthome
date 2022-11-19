<section class="gioithieu-homedecor">
    <div class="container">
        <div class="row">
            <div class="grid-gioithieu item">
                <div class="col-12">
                    <div class="wow fadeInLeft" data-wow-delay="0.2s">
                        <a href="">
                            <div class=" gt">
                                <?= htmlspecialchars_decode($moTaGioiThieuThanhXuan['ten'])?>
                            </div>
                        </a>
                        <div class="pl70 box-GT">
                            <div class="title-gt">
                            </div>
                            <?= htmlspecialchars_decode($moTaGioiThieuThanhXuan['mota'])?>
                            <a href="<?=$moTaGioiThieuThanhXuan['type']?>" class="borderGT pd2">
                                <div class="f1GT pd2">
                                    <button class="wrapper-button__intro"><span>Xem thêm</span></button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="gioithieu-homedecor-top-right w-100-m mobile-none wow fadeInRight"
                        data-wow-delay="0.2s">
                        <div class="">
                            <div class="img p-relative">
                                <a data-zoom-id="Zoom-1" href="<?=_upload_hinhanh_l.$moTaGioiThieuThanhXuan['photo']?>"
                                    data-image="<?=_upload_hinhanh_l.$moTaGioiThieuThanhXuan['photo']?>"><img
                                        src="<?=_upload_hinhanh_l.$moTaGioiThieuThanhXuan['photo']?>"
                                        alt="<?=$row_detail['ten_'.$lang]?>" class="responGT">
                                </a>
                                <div class="myhouse">
                                    <p><?=$moTaGioiThieuThanhXuan["chuky"]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>