<div class="box-modal-menu" id="menuSide">

    <div class="p-relative">

        <ul>
            <li>
            <a href="" title="Trang chủ" class="logo" element-area="header">
                    <img src="<?=_upload_hinhanh_l.$logo['photo_'.$lang]?>"/>
                </a>
            </li>
            <li class="<?php if($com=='gioi-thieu') echo ' active';?>">
                    
                            <a href="gioi-thieu">Giới Thiệu</a>
                        
                    </li>
            <li>
                <div class="d-flex align-items-center">

                            <a href="san-pham" title="Về chúng tôi ">Sản Phẩm</a>
                            
                    <?php if($danhmuc1){ ?>
                        <span class="drop event-menu p-relative"></span>
                    <?php } ?>
                </div>
                <?php if($danhmuc1){ ?>
                <ul>
                    <?php foreach($danhmuc1 as $key => $value){ ?>
                    <li class="dropdown">
                        <div class="d-flex align-items-center">
                            <a class="pl30" title="<?=$value["ten"]?>" href="<?=$value["type"]?>/<?=$value['tenkhongdau']?>">
                                <span><?=$value["ten"]?></span>
                            </a>
                            <?php if($c2){ ?>
                                <span class="drop event-menu p-relative"></span>
                            <?php }?>
                        </div>
                        <?php if($c2){ ?>
                        <ul>
                            <?php foreach($c2 as $k=>$vc2){?>
                                <li class="dropdown">
                                    <div class="d-flex align-items-center">
                                        <a class="pl40" title="<?=$vc2["ten"]?>" href="<?=$value["type"]?>/<?=$value['tenkhongdau']?>/<?=$vc2['tenkhongdau']?>">
                                            <span><?=$vc2["ten"]?></span>
                                        </a>
                                    </div>
                                </li>
                            <?php }?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li>
                <div class="d-flex align-items-center">
                    <a href="thiet-ke-thi-cong" title="Thiết kế thi công ">Thiết kế thi công</a>
                            
                    <?php if($thietke_c1){ ?>
                        <span class="drop event-menu p-relative"></span>
                    <?php } ?>
                </div>
                <?php if($thietke_c1){ ?>
                <ul>
                    <?php foreach($thietke_c1 as $key => $value){ ?>
                    <li class="dropdown">
                        <div class="d-flex align-items-center">
                            <a class="pl30" title="<?=$value["ten"]?>" href="<?=$value["type"]?>/<?=$value['tenkhongdau']?>">
                                <span><?=$value["ten"]?></span>
                            </a>
                            <?php if($c2){ ?>
                                <span class="drop event-menu p-relative"></span>
                            <?php }?>
                        </div>
                        <?php if($c2){ ?>
                        <ul>
                            <?php foreach($c2 as $k=>$vc2){?>
                                <li class="dropdown">
                                    <div class="d-flex align-items-center">
                                        <a class="pl40" title="<?=$vc2["ten"]?>" href="<?=$value["type"]?>/<?=$value['tenkhongdau']?>/<?=$vc2['tenkhongdau']?>">
                                            <span><?=$vc2["ten"]?></span>
                                        </a>
                                    </div>
                                </li>
                            <?php }?>
                        </ul>
                        <?php } ?>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li>
                <div class="d-flex align-items-center">
                <a href="tin-tuc" title="Tin tức">Tin Tức</a>

                </div>
                
            </li>
            <li>
                <div class="d-flex align-items-center">
                <a href="lien-he" title="Liên hệ">Liên Hệ</a>
                </div>
            </li>
        </ul>
    </div>

</div>