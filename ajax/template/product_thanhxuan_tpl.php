<?php 
include_once "class_paging_ajax.php";
$list = isset($_REQUEST['list']) ? $_REQUEST['list'] : 0;
$cat = isset($_REQUEST['cat']) ? $_REQUEST['cat'] : 0;
$type = isset($_REQUEST['type']) ? $_REQUEST['type'] : 'san-pham';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
$perpage = isset($_REQUEST['perpage']) ? $_REQUEST['perpage'] : 10;
$cond = [];
$tab = $_POST['tab'];
$idcat = "";
$idlist = "";
if($_REQUEST["list"]>0){
  $idlist = " and id_list= ?";
  array_push($cond,$_REQUEST["list"]);
}
if($_REQUEST["cat"]>0){
  $idcat = " and id_cat = ? ";
  array_push($cond,$_REQUEST["cat"]);
}
array_push($cond,$type);

$str_van = "select *,tenkhongdau_$lang as tenkhongdau from #_baiviet where hienthi=1 and spmoi=1 ".$idlist." ".$idcat." and type= ? order by stt asc,id desc";

$paging = new paging_ajax();

$paging->class_pagination = "pagination";

$paging->class_active = "active";

$paging->class_inactive = "inactive";

$paging->class_go_button = "go_button";

$paging->class_text_total = "total";

$paging->class_txt_goto = "txt_go_button";

$paging->cond = $cond;

$paging->per_page = $perpage;   

$sotrang=$perpage;

$paging->page = $page;

$paging->text_sql = $str_van;

$result_pag_data = $paging->GetResult();


?>
<?php if($result_pag_data){?>

    <div class="row">
        <?php foreach($result_pag_data as $key => $value){ 
            $c1 = $db->rawQueryOne("select tenkhongdau_$lang as tenkhongdau from #_baiviet_list where id=?",array($value['id_list']));?>
        <div class="item col-4 w-50-m mb30 mb-m-20 wow fadeInUp" data-wow-delay="<?= $key*0.2?>s">
            <div class="item__products">
                <div class="thumb__products o-hidden thumb-box">
                    <a href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>" title="<?=$val["ten_".$lang]?>">
                        <img src="<?=_upload_baiviet_l.$val["photo"]?>" class="js-loadcover"
                            alt="<?=$val["ten_".$lang]?>" <?=$func->errorImg()?> />
                        <div class="hiddenimg">
                            <img src="<?=_upload_baiviet_l.$val["photo1"]?>" class="js-loadcover"
                                alt="<?=$val["ten_".$lang]?>" <?=$func->errorImg()?> />
                        </div>
                    </a>
                </div>
                <div class="desc__products">
                    <h3 class="line-2">
                        <a href="<?=$val["type"]?>/<?=$val["tenkhongdau"]?>" title="<?=$val["ten_".$lang]?>">
                            <?=$val["ten_".$lang]?>
                        </a>
                    </h3>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="col-12 item5 mt10">
            <div class="paging mb20 d-flex justify-content-center">
            <?php foreach($result_pag_data as $key => $value){ ?>
                <a href="<?=$value['type']?>"><?php } ?>
                <button class="wrapper-button__intro"><span>XEM TẤT CẢ</span></button>
                </a>
                
            </div>
        </div>
    </div>
    
<?php }else{?>
<div class="mb20 d-flex justify-content-center">
    <p>Sản phẩm đang cập nhật</p>
</div>
<?php }?>
<!-- ----------------------------------------------------------->
<!-- -->
<!-------------------------------------------------------------------->
<script>
$(function() {
    $('<?= $tab?> .pagination li.active').click(function() {
        var pager = $(this).attr('p');
        _FRAMEWORK.loadTab("ajax/loadTab.php", {
            com: 'product',
            list: <?= $list?>,
            cat: <?=$cat?>,
            type: '<?=$type?>',
            page: pager,
            perpage: <?= $perpage?>,
            tab: '<?= $tab ?>'
        }, '<?=$tab ?>');
        $('body,html').animate({
            scrollTop: $('<?= $tab?>').offset().top - 250
        }, 500);
    })

    _FRAMEWORK.loadCover();
})
</script>