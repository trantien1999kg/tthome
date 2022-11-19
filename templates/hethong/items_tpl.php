<section class="section__map mt-m-10">
    <div class="container">
        <div class="row">
            <div class="item col-12">
                <div class="box__iframe_map o-hidden p-relative">
                    <div class="box__list-map">
                        <ul>
                            <?php foreach($maps as $k => $v){?>
                            <li data-id="<?=$v["id"]?>">
                                <div class="box__item-map">
                                    <p class="name_map">
                                        <?=$v["ten_$lang"]?>
                                    </p>
                                    <p class="address_map">
                                        <b>Địa chỉ: </b><?=$v["diachi_$lang"]?>
                                    </p>
                                    <p class="phone_map">
                                        <b>Điện thoại: </b><?=$v["phone"]?>
                                    </p>
                                    <p class="email_map">
                                        <b>Email: </b><?=$v["email"]?>
                                    </p>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="iframe__map" id="view__map">
                        <?=$func->clear_decode($maps[0]["iframe_map"])?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>