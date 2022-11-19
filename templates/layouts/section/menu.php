<nav class="section__menu">
    <div class="container">
        <div class="row">
            <div class="item col-12">
                <div class="box__nav p-relative">
                    <ul class="nav-menu-header nav__menu d-flex justify-content-end d-none-m">
                        <li>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?>
                                <a <?php if($source=='index') echo 'class="active"'; ?> href="<?=$https_config?>"
                                    title="Trang chủ">
                                    Trang chủ
                                </a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <li>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?>
                                <a <?php if($com=='gioi-thieu') echo 'class="active"'; ?> href="gioi-thieu"
                                    title="Giới thiệu">
                                    Giới thiệu
                                </a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <li class="p-relative">
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?>
                                <a <?php if($com=='san-pham') echo 'class="active"'; ?> href="san-pham"
                                    title="Sản phẩm">
                                    Sản phẩm
                                </a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                            <?php if(count($list_c1)){?>
                            <ul>
                                <?php foreach($list_c1 as $k => $v1){?>
                                <li>
                                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    <h3 class="mg0">
                                        <?php }?>
                                        <a href="<?=$v1["type"]?>/<?=$v1["tenkhongdau"]?>"
                                            title="<?=$v1["ten"]?>">
                                            <?=$v1["ten"]?>
                                        </a>
                                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    </h3>
                                    <?php }?>
                                </li>
                                <?php }?>
                            </ul>
                            <?php }?>
                        </li>
                        <li class="p-relative">
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?>
                                <a <?php if($com=='dich-vu') echo 'class="active"'; ?> href="dich-vu" title="Dịch vụ">
                                    Dịch vụ
                                </a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                            <?php if(count($dichvu_c1)){?>
                            <ul>
                                <?php foreach($dichvu_c1 as $k => $v2){?>
                                <li>
                                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    <h3 class="mg0">
                                        <?php }?>
                                        <a href="<?=$v2["type"]?>/<?=$v2["tenkhongdau"]?>"
                                            title="<?=$v2["ten"]?>">
                                            <?=$v2["ten"]?>
                                        </a>
                                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    </h3>
                                    <?php }?>
                                </li>
                                <?php }?>
                            </ul>
                            <?php }?>
                        </li>
                        <li class="p-relative">
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?>
                                <a class="cs-pointer <?php if($com=='video' || $com=='thu-vien-anh') echo 'active'; ?>"
                                    title="Album">
                                    Album
                                </a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                            <ul>
                                <li>
                                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    <h3 class="mg0">
                                        <?php }?>
                                        <a href="thu-vien-anh"
                                            title="Thư viện ảnh">
                                            Thư viện ảnh
                                        </a>
                                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    </h3>
                                    <?php }?>
                                </li>
                                <li>
                                    <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    <h3 class="mg0">
                                        <?php }?>
                                        <a href="video"
                                            title="Video">
                                            Video
                                        </a>
                                        <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                                    </h3>
                                    <?php }?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?>
                                <a <?php if($com=='tin-tuc') echo 'class="active"'; ?> href="tin-tuc" title="Tin tức">
                                    Tin tức
                                </a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <li>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?>
                                <a <?php if($com=='he-thong-cua-hang') echo 'class="active"'; ?>
                                    href="he-thong-cua-hang" title="Hệ thống cửa hàng">
                                    Hệ thống cửa hàng
                                </a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li>
                        <!-- <li>
                            <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            <h2 class="mg0">
                                <?php }?>
                                <a href="lien-he" title="Liên hệ">
                                    Liên hệ
                                </a>
                                <?php if(in_array($template,explode(',',$row_setting['seo']))){?>
                            </h2>
                            <?php }?>
                        </li> -->
                    </ul>
                    <!--<div class="mobi-top d-none d-block-m">
                        <div class="menu-btn">
                            <a href="javascript:void(0)" data-target="#menuSide" id="tool-2" class="js-mobi-tool">
                                <span class="bars-menu mobi-tool-act"></span>
                            </a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</nav>