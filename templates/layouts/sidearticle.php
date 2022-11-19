<?php 
    $newest = $db->rawQuery("select ten_$lang as ten,type,tenkhongdau_$lang as tenkhongdau,photo,ngaytao,luotxem from #_baiviet where hienthi=1 and type=? order by luotxem desc",array($type));
    $prodm1 = $db->rawQuery("select id , tenkhongdau_$lang as tenkhongdau , type , ten_$lang as ten , photo from #_baiviet_list where hienthi=1 and type=?  order by stt asc,id desc",array('san-pham'));
?>
<div class="sidebar mb20">
    <div class="sidebar-header">
        Danh mục sản phẩm
    </div>
    <div class="sidebar-content">
        <ul class="menuside-list">
            <?php foreach ($prodm1 as $key => $value) {?>
                <li class="menuside-item">
                    <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" title="<?= $value['ten']?>">
                        <?= $value['ten']?>
                    </a>
                </li>
            <?php }?>
        </ul>
    </div>
</div>
<div class="sidebar-sticky">
    <div class="sidebar-header">
        Bài viết xem nhiều
    </div>
    <div class="sidebar-content">
        <ul class="article-list">
            <?php foreach ($newest as $key => $value) {?>
                <li class="article-item">
                    <div class="article-item_thumb">
                        <figure class="shine thumb-box">
                            <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" title="<?= $value['ten']?>">
                                <img src="<?= _upload_baiviet_l.$value['photo'] ?>" alt="<?= $value['ten']?>" class="js-loadcover">
                            </a>
                        </figure> 
                    </div>
                    <div class="article-item_content">
                        <a href="<?= $value['type']?>/<?= $value['tenkhongdau']?>" title="<?= $value['ten']?>">
                            <p class="article-item_content_label line-3"><?= $value['ten']?></p>
                        </a>
                        <div class="article-item_content_calendar"><i class="fas fa-eye mr10"></i><?= $value['luotxem']?><i class="fas fa-calendar-alt mr10 ml20"></i><?= date( "d/m/Y" , $value['ngaytao'])?></div>
                    </div>
                </li>
            <?php }?>
        </ul>
    </div>
</div>