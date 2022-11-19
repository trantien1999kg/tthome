<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$urlcu = '';
$id = addslashes($_REQUEST['id']);
switch($act){

	case "man_lang":
		get_langs();		
		$template = "ngonngu/langs";
		break;
	case "add_lang":		
		$template = "ngonngu/lang_add";
		break;
	case "edit_lang":		
		get_ngonngu();
		$template = "ngonngu/lang_edit";
		break;
	case "save_lang":
		save_lang();
		break;
	case "delete_lang":
		delete_lang();
		break;	
	default:
		$template = "index";
}

#====================================
function get_langs(){
	global $db, $items, $paging,$page;
	$per_page = 10;
	$startpoint = ($page * $per_page) - $per_page;
	$sql = "select * from #_lang where id !=0 ";

	if($_REQUEST['keyword']!=''){
		$ten = trim($_REQUEST['keyword']);
		$sql.=" and item like ? or lang_vi like ? or lang_en like ?";
		$cond = array("%".$ten."%","%".$ten."%","%".$ten."%");
	}
	//$sql.=" order by item asc";
	$sql.=" order by id desc";
	if($_REQUEST["keyword"]!=''){
		$items = $db->rawQuery($sql,$cond);
	}else{
		$items = $db->rawQuery($sql);
	}
	// Doc va ghi file langvi, langen, langta
	$file_lang = "../sources/langWeb/lang_vi.php";

	if (!file_exists ($file_lang)){
		$file_lang = @fopen ($file_lang, "w+") or die ("Couldn't create the file");
		fwrite($file_lang, "<?php \n");
		foreach ($items as $key => $value) {
			$line = "@define ('".$value['item']."','".$value['lang_vi']."');\n";
			fwrite($file_lang, $line);
		}
		fwrite($file_lang, '?>');
		fclose ($file_lang);
	}
	// Doc va ghi file langen
	$file_langen = "../sources/langWeb/lang_en.php";
	if (!file_exists ($file_langen)){
		$file_langen = @fopen ($file_langen, "w+") or die ("Couldn't create the file");
		fwrite($file_langen, "<?php \n");
		foreach ($items as $key => $value) {
			$line = "@define ('".$value['item']."','".$value['lang_en']."');\n";
			fwrite($file_langen, $line);
		}
		fwrite($file_langen, '?>');
		fclose ($file_langen);
	}
	// Doc va ghi file langjp
	$file_langjp = "../sources/langWeb/lang_jp.php";
	if (!file_exists ($file_langjp)){
		$file_langjp = @fopen ($file_langjp, "w+") or die ("Couldn't create the file");
		fwrite($file_langjp, "<?php \n");
		foreach ($items as $key => $value) {
			$line = "@define ('".$value['item']."','".$value['lang_jp']."');\n";
			fwrite($file_langjp, $line);
		}
		fwrite($file_langjp, '?>');
		fclose ($file_langjp);
	}


	if(isset($_REQUEST['keyword'])) $link_history = "&keyword=".$ten;
	else $link_history = "";
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$url="index.php?com=ngonngu&act=man_lang".$link_history;
	//$paging = pagination($where,$per_page,$page,$url);
	// $paging=paging($items, $url, $page, $maxR, $maxP);
	// $items=$paging['source'];
}
function get_ngonngu(){
	global $db,$func, $item;
	$id = (int)$_GET['id'];
	if(!$id)
		$func->transfer("Không nhận được dữ liệu", "index.php?com=ngonngu&act=man_lang");
	
	$sql = "select * from #_lang where id=$id";
	$item = $db->rawQueryOne($sql);
	if(count($item) == 0) $func->transfer("Dữ liệu không có thực", "index.php?com=ngonngu&act=man_lang");
	
}
function save_lang(){
	global $db,$func;
	if(empty($_POST)) 
	$func->transfer("Không nhận được dữ liệu", "index.php?com=ngonngu&act=man_lang");
	$id = (int)($_POST['id']);
	$data = $_POST['data'];
	if($id){

		$db->where('id', $id);
		if($db->update('lang',$data)){
			create_lang();
			$func->redirect("index.php?com=ngonngu&act=man_lang&page=".$_REQUEST["page"]);
		}
		else
			$func->transfer("Cập nhật bị lỗi", "index.php?com=ngonngu&act=man_lang&page=".$_REQUEST["page"]);
	}
	else{
	
		if($db->insert('lang',$data)){
			create_lang();
			$func->redirect("index.php?com=ngonngu&act=man_lang");
		}
		else
			$func->transfer("Dữ liệu bị lỗi, không thể thêm mới", "index.php?com=ngonngu&act=man_lang");
	}
}
function delete_lang(){	
	global $db,$func;

	if(isset($_GET['id'])){

		$id =  (int)$_GET['id'];

		$db->where('id', $id);

		if($_REQUEST['page']!='') $page = "&page=". $_REQUEST['page'];

		else $page = "";

		$db->delete('lang',1);
		$func->redirect("index.php?com=ngonngu&act=man_lang".$page);
		
	}elseif (isset($_GET['listid'])==true){

		$listid = explode(",",$_GET['listid']);
		for ($i=0 ; $i<count($listid) ; $i++){
			$idTin=$listid[$i];
			$id =  (int)$idTin;
			$sql = "delete from #_lang where id='".$id."'";
			$db->rawQuery($sql);
		}
		$func->redirect("index.php?com=ngonngu&act=man_lang&page=".$_REQUEST['page']);
	}
	// else transfer("Không nhận được dữ liệu", "index.php?com=ngonngu&act=man_lang");
}
function create_lang(){
	global $db;
	$sql = "select * from #_lang where id != 0 order by id desc";
	$items = $db->rawQuery($sql);
	// Doc va ghi file lang, langen, langjp
	$file_lang = "../sources/langWeb/lang_vi.php";
	if (file_exists ($file_lang)){
		unlink($file_lang);
		$file_lang = @fopen ($file_lang, "w+") or die ("Couldn't create the file");
		fwrite($file_lang, "<?php \n");
		foreach ($items as $key => $value) {
			$line = "@define ('".$value['item']."','".$value['lang_vi']."');\n";
			fwrite($file_lang, $line);
		}
		fwrite($file_lang, '?>');
		fclose ($file_lang);
	}

	$file_langen = "../sources/langWeb/lang_en.php";
	if (file_exists ($file_langen)){
		unlink($file_langen);
		$file_langen = @fopen ($file_langen, "w+") or die ("Couldn't create the file");
		fwrite($file_langen, "<?php \n");
		foreach ($items as $key => $value) {
			$line = "@define ('".$value['item']."','".$value['lang_en']."');\n";
			fwrite($file_langen, $line);
		}
		fwrite($file_langen, '?>');
		fclose ($file_langen);
	}

	$file_langjp = "../sources/langWeb/lang_jp.php";
	if (file_exists ($file_langjp)){
		unlink($file_langjp);
		$file_langjp = @fopen ($file_langjp, "w+") or die ("Couldn't create the file");
		fwrite($file_langjp, "<?php \n");
		foreach ($items as $key => $value) {
			$line = "@define ('".$value['item']."','".$value['lang_jp']."');\n";
			fwrite($file_langjp, $line);
		}
		fwrite($file_langjp, '?>');
		fclose ($file_langjp);
	}

	$file_langger = "../sources/langWeb/lang_ger.php";
	if (file_exists ($file_langger)){
		unlink($file_langger);
		$file_langger = @fopen ($file_langger, "w+") or die ("Couldn't create the file");
		fwrite($file_langger, "<?php \n");
		foreach ($items as $key => $value) {
			$line = "@define ('".$value['item']."','".$value['lang_ger']."');\n";
			fwrite($file_langger, $line);
		}
		fwrite($file_langger, '?>');
		fclose ($file_langger);
	}
}
?>