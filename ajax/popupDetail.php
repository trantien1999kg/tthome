<?php 
	require_once 'ajaxConfig.php';
    if($func->isAjax()){
        $id = $_POST['id'];
        $row = $db-> rawQueryOne("select noidung_$lang as noidung,ten_$lang as ten from #_baiviet where id=?",array($id));
?>
<div id="modalbox" class="modal">
    <div class="frame">
        <div class="Detail">
            <span class="close-modal" onclick="G.remove('#modalbox')">&times;</span>
            <div class="label line-2"><?= $row['ten']?></div>
            <div class="original desc">
                <?= htmlspecialchars_decode($row['noidung'])?>
            </div>
        </div>
    </div>
</div>
<?php }?>