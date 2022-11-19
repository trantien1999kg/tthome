<div id="menu-mobile" class="d-none d-block-m">
    <nav id="mmenu">
        <ul>
            <div class="search_mobi">

                <input type="text" id="keywords2" placeholder="Nhập vào tên sản phẩm cần tìm..." value="">

                <i class="fa fa-search" data-view aria-hidden="true"></i>

            </div>

            <?php if(count($list_c1)) { ?>

            <li class="heading">Danh mục sản phẩm</li>

            <?php for($i=0;$i<count($list_c1); $i++) {
                    $sql="select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where id_list = '".$list_c1[$i]['id']."' and hienthi > 0 and type='san-pham' order by stt,id desc";
                    $spcatmenu = $db->rawQuery($sql); 
            ?>
            <li>

                <a class="transition" title="<?=$list_c1[$i]['ten']?>"
                    href="<?=$list_c1[$i]['type']?>/<?=$list_c1[$i]['tenkhongdau']?>"><?=$list_c1[$i]['ten']?></a>

                <?php if(count($spcatmenu)>0) { ?>

                <ul>

                    <?php for($j=0;$j<count($spcatmenu);$j++) {

                        $spitemmenu = $db->rawQuery("select ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type, id from #_baiviet where id_cat = ? and hienthi > 0 order by stt,id desc",array($spcatmenu[$j]['id'])); ?>

                    <li>

                        <a class="transition" title="<?=$spcatmenu[$j]['ten']?>"
                            href="<?=$spcatmenu[$j]['type']?>/<?=$spcatmenu[$j]['tenkhongdau']?>"><?=$spcatmenu[$j]['ten']?></a>

                        <?php if(count($spitemmenu)) { ?>

                        <ul>

                            <?php for($u=0;$u<count($spitemmenu);$u++) {

                                $spsubmenu = $db->rawQuery("select ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type, id from #_baiviet where id_item = ? and hienthi > 0 order by stt,id desc",array($spitemmenu[$u]['id'])); ?>

                            <li>

                                <a class="transition" title="<?=$spitemmenu[$u]['ten']?>"
                                    href="<?=$spitemmenu[$u]['type']?>/<?=$spitemmenu[$u]['tenkhongdau']?>"><?=$spitemmenu[$u]['ten']?></a>

                                <?php if(count($spsubmenu)) { ?>

                                <ul>

                                    <?php for($s=0;$s<count($spsubmenu);$s++) { ?>

                                    <li>

                                        <a class="transition" title="<?=$spsubmenu[$s]['ten']?>"
                                            href="<?=$spsubmenu[$s]['type']?>/<?=$spsubmenu[$s]['tenkhongdau']?>"><?=$spsubmenu[$s]['ten']?></a>

                                    </li>

                                    <?php } ?>

                                </ul>

                                <?php } ?>

                            </li>

                            <?php } ?>

                        </ul>

                        <?php } ?>

                    </li>

                    <?php } ?>

                </ul>

                <?php } ?>

            </li>

            <?php } ?>

            <?php } ?>



            <li class="heading">Chuyên mục</li>

            <li>

                <a class="transition <?php if($com=='' || $com=='index') echo 'active'; ?>" href=""
                    title="Trang chủ">Trang chủ</a>

            </li>

            <li>

                <a class="transition <?php if($com=='gioi-thieu') echo 'active'; ?>" href="gioi-thieu"
                    title="Giới thiệu">Giới thiệu</a>

            </li>
            <li>

                <a class="transition <?php if($com=='san-pham') echo 'active'; ?>" href="san-pham" title="Sản phẩm">Sản
                    phẩm</a>

                <?php if(count($list_c1)) { ?>

                <ul>

                    <?php for($i=0;$i<count($list_c1); $i++) {
                        $sql="select id, ten_$lang as ten, tenkhongdau_$lang as tenkhongdau,type from #_baiviet_cat where id_list = '".$list_c1[$i]['id']."' and hienthi > 0 and type='san-pham' order by stt,id desc";
                        $spcatmenu = $db->rawQuery($sql); 
                    ?>

                    <li>

                        <a class="transition" title="<?=$list_c1[$i]['ten']?>"
                            href="<?=$list_c1[$i]["type"]?>/<?=$list_c1[$i]["tenkhongdau"]?>"><?=$list_c1[$i]['ten']?></a>

                        <?php if(count($spcatmenu)) { ?>

                        <ul>

                            <?php for($j=0;$j<count($spcatmenu); $j++) {?>

                            <li>

                                <a class="transition" title="<?=$spcatmenu[$j]['ten']?>"
                                    href="<?=$spcatmenu[$j]["type"]?>/<?=$spcatmenu[$j]["tenkhongdau"]?>"><?=$spcatmenu[$j]['ten']?></a>



                            </li>

                            <?php } ?>

                        </ul>

                        <?php } ?>

                    </li>

                    <?php } ?>

                </ul>

                <?php } ?>

            </li>
            <li>

                <a class="transition <?php if($com=='combo-sieu-chat') echo 'active'; ?>" href="combo-sieu-chat"
                    title="Combo siêu chất">Combo siêu chất</a>

            </li>

            <li>
                <a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="Tin tức">Tin
                    tức</a>
            </li>

            <li>

                <a class="transition <?php if($com=='khuyen-mai') echo 'active'; ?>" href="khuyen-mai"
                    title="Khuyến mãi">Khuyến mãi</a>

            </li>

            <li>

                <a class="transition <?php if($com=='he-thong-cua-hang') echo 'active'; ?>" href="he-thong-cua-hang"
                    title="Hệ thống cửa hàng">Hệ thống cửa hàng</a>

            </li>

            <li>

                <a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="Liên hệ">Liên
                    hệ</a>

            </li>

        </ul>

    </nav>

</div>