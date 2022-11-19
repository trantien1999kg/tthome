<?php 
    //$hotlines=$db->rawQuery("select ten_$lang as ten,phone from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('hotline'));
?>
<div class="tool-pc">
    <ul class="box__tool d-none-m">
        <li class="to-top-pc">
            <a href="tel:<?=str_replace('.','',str_replace(' ','',$row_setting['hotline']))?>" rel="nofollow">
                <i class="icons-tool tool-phone" aria-hidden="true" title="Gọi ngay"></i>
            </a>
        </li>
        <li>
            <a href="http://zalo.me/<?=str_replace('.','',str_replace(' ','',$row_setting['sozalo']))?>" rel="nofollow"
                target="_blank">
                <i class="icons-tool tool-zalo"></i>
            </a>
        </li>
        <li>
            <a href="<?=$row_setting['linkmessage']?>" rel="nofollow" target="_blank">
                <i class="icons-tool tool-messenger"></i>
            </a>
        </li>
        <li>
            <a href="mailto:<?=$row_setting['email']?>" rel="nofollow" target="_blank">
                <i class="icons-tool tool-email"></i>
            </a>
        </li>
        <li>
            <a href="<?=$row_setting['iframe_map1']?>" rel="nofollow" target="_blank">
                <i class="icons-tool tool-address js-map"></i>
            </a>
        </li>


    </ul>
</div>
<div class="hotline-tool hidden-xs show cs-pointer d-none-m" onclick="_FRAMEWORK.toggle('#support-content')">
    <i class="fab fa-whatsapp fab-hothotline font-social fa-2x"></i>
    <p>Hotline</p>
    <div class="support-content" id="support-content">
        <ul class="hotline-group">
            <?php foreach($hotlines as $key => $value){?>
            <li>
                <p><?= $value['ten']?></p>
                <p class="line"><a href="tel:<?= $value['phone']?>"><i class="fa fa-volume-control-phone"
                            aria-hidden="true"></i>&nbsp;<?= $value['phone']?></a></p>
            </li>
            <?php }?>
        </ul>
    </div>
</div>

<div class="menu-bottom d-none">
    <ul class="clearfix">
        <li>
            <a href="" title="HomePage">
                <i class="fas fa-home"></i>
                <span class="sub">Trang chủ</span>
            </a>
        </li>
        <li>
            <a href="tel:<?= $row_setting['hotline']?>" title="clickToCall">
            <i class="fas fa-phone-square-alt"></i>
                <span class="sub">Hotline</span>
            </a>
        </li>
        <li>
            <a href="" title="Trang chủ">
                <img class="scaleimg" width="70" height="70" src="<?=_upload_hinhanh_l.$gioiThieuThanhXuanBackGround['photo'] ?>"
                    alt="Trang chủ" onerror="this.src='images/no-image.jpg'" />
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-target="#options" id="tool-1" title="Tiện ích" class="js-mobi-tool"> 
                <i class="fas fa-ellipsis-h mobi-tool-act"></i>
                <span class="sub">Tiện ích</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" data-target="#menuSide" id="tool-2" class="js-mobi-tool">
                <span class="bars-menu mobi-tool-act"></span>
                <span class="sub">Menu</span>
            </a>
        </li>
    </ul>
</div>

<!-- <div class="hotline-tool hidden-xs show cs-pointer d-none-m" onclick="_FRAMEWORK.toggle('#support-content')">
    <i class="fab fa-whatsapp fab-hothotline font-social fa-2x"></i>
    <p>Hotline</p>
    <div class="support-content" id="support-content">
        <ul class="hotline-group">
            <?php foreach($hotlines as $key => $value){?>
            <li>
                <p><?= $value['ten']?></p>
                <p class="line"><a href="tel:<?= $value['phone']?>"><i class="fa fa-volume-control-phone"
                            aria-hidden="true"></i>&nbsp;<?= $value['phone']?></a></p>
            </li>
            <?php }?>
        </ul>
    </div>
</div> -->
